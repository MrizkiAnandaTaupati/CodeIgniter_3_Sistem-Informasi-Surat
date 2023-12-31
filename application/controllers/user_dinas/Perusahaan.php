<?php 
class Perusahaan extends CI_Controller
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
        //mengambil data dari table perusahaan 
        $this->load->model("user_dinas/Mperusahaan");

        $data["perusahaan"] = $this->Mperusahaan->tampil_perusahaan();
        $this->load->view("user_dinas/perusahaan_tampil",$data);
    }

    function surat_perusahaan($id_perusahaan)
    {
        $this->load->model("user_dinas/Msurat");
        $data['surat'] = $this->Msurat->surat_perusahaan($id_perusahaan);

        $this->load->view("user_dinas/surat_perusahaan",$data);
    }

    function validasi_surat($id_surat,$id_perusahaan)
    {
        $this->load->model("user_dinas/Msurat");
        $data['surat'] = $this->Msurat->surat_validasi($id_surat);
        $this->load->view("user_dinas/validasi_surat",$data);
        $input = $this->input->post();
        if ($input) {
            $id_surat= $input['id_surat'];
            $this->Msurat->validasi_surat($input,$id_surat);
            redirect("user_dinas/perusahaan/surat_perusahaan/".$id_perusahaan);
        }
    }


}
?>