<?php 
class Operator extends CI_Controller
{
    //membuat function __contruct untuk mengamankan halaman (Jika tidak login tidak bisa masuk ke halaman ini)
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("operator")) {
            redirect("login");
        }
    }
    
    function index()
{
    // Mengambil data dari table operator 
    $this->load->model("operator/Moperator");
    
    $id_perusahaan = $_SESSION['operator'] ['id_perusahaan'];
    $data["operator"] = $this->Moperator->tampil_operator($id_perusahaan);
    $this->load->view("operator/operator_tampil", $data);
}

    

    function tambah()
    {
        //mengakses model perusahaan untuk mendapatkan data dari table perusahaan
        $this->load->model("operator/Mperusahaan");
        $data["perusahaan"] = $this->Mperusahaan->tampil_perusahaan();

        $input = $this->input->post();
        if ($input) 
        {
            $this->load->model("operator/Moperator");
            $this->Moperator->tambah_operator($input);
            redirect("operator/operator");
        }

        $this->load->view("operator/operator_tambah",$data);
    }

    function ubah($id_operator)
    {
        $this->load->model("operator/Moperator");
        $this->load->model("operator/Mperusahaan");
        $data["operator"] = $this->Moperator->detail_operator($id_operator);
        $data["perusahaan"] = $this->Mperusahaan->tampil_perusahaan();
        $input = $this->input->post();
        if ($input) 
        {
            $this->Moperator->ubah_operator($input,$id_operator);
            redirect("operator/operator");
        }
        $this->load->view("operator/operator_ubah",$data);
    }

    function hapus($id_operator)
    {
        $this->load->model("operator/Moperator");
        $this->Moperator->hapus_operator($id_operator);
        redirect("operator/operator");
    }
}
?>