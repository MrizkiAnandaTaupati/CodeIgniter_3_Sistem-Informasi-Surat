<?php 
class Operator extends CI_Controller
{
    //membuat function __contruct untuk mengamankan halaman (Jika tidak login tidak bisa masuk ke halaman ini)
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("user_dinas")) {
            redirect("login");
        }
    }
    
    function index()
    {
        //mengambil data dari table operator 
        $this->load->model("user_dinas/Moperator");

        $data["operator"] = $this->Moperator->tampil_operator();
        $this->load->view("user_dinas/operator_tampil",$data);
    }

    function tambah()
    {
        //mengakses model perusahaan untuk mendapatkan data dari table perusahaan
        $this->load->model("user_dinas/Mperusahaan");
        $data["perusahaan"] = $this->Mperusahaan->tampil_perusahaan();

        $input = $this->input->post();
        if ($input) 
        {
            $this->load->model("user_dinas/Moperator");
            $this->Moperator->tambah_operator($input);
            redirect("user_dinas/operator");
        }

        $this->load->view("user_dinas/operator_tambah",$data);
    }

    function ubah($id_operator)
    {
        $this->load->model("user_dinas/Moperator");
        $this->load->model("user_dinas/Mperusahaan");
        $data["operator"] = $this->Moperator->detail_operator($id_operator);
        $data["perusahaan"] = $this->Mperusahaan->tampil_perusahaan();
        $input = $this->input->post();
        if ($input) 
        {
            $this->Moperator->ubah_operator($input,$id_operator);
            redirect("user_dinas/operator");
        }
        $this->load->view("user_dinas/operator_ubah",$data);
    }

    function hapus($id_operator)
    {
        $this->load->model("user_dinasMoperator");
        $this->Moperator->hapus_operator($id_operator);
        redirect("user_dinas/operator");
    }
}
?>