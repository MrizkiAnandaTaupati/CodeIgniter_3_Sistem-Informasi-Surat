<?php 
class Perusahaan extends CI_Controller
{
    //membuat function __contruct untuk mengamankan halaman (Jika tidak login tidak bisa masuk ke halaman ini)
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("admin")) {
            redirect("login");
        }
    }
    
    function index()
    {
        //mengambil data dari table perusahaan 
        $this->load->model("admin/Mperusahaan");

        $data["perusahaan"] = $this->Mperusahaan->tampil_perusahaan();
        $this->load->view("admin/perusahaan_tampil",$data);
    }

    function tambah()
    {
        $this->load->model("Mperusahaan");
        $data["perusahaan"] = $this->Mperusahaan->tampil_perusahaan();

        $this->load->view("admin/perusahaan_tambah",$data);
    }
    public function ubah_perusahaan($id_perusahaan)
    {
        $this->load->model("admin/Mperusahaan");
        
        // Mengambil data yang diinputkan dalam form
        $input = $this->input->post();
        
        // Jika ada inputan dari form
        if ($input) {
            // Menjalankan fungsi ubah_perusahaan pada model Mperusahaan
            $this->Mperusahaan->ubah_perusahaan($input, $id_perusahaan);
            // Kembali ke halaman tampil perusahaan
            redirect("admin/perusahaan");
        }
        
        // Mengambil data perusahaan berdasarkan id_perusahaan
        $data['perusahaan'] = $this->Mperusahaan->tampil_perusahaan($id_perusahaan);
        $this->load->view('admin/perusahaan_ubah', $data);
    }
    
    
}
?>