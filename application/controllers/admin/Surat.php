<?php 
class Surat extends CI_Controller
{
    //membuat function __contruct untuk mengamankan halaman (Jika tidak login tidak bisa masuk ke halaman ini)
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("admin")) {
            redirect("login");
        }
    }
    
    function surat_tampil($id_perusahaan)
    {
        // menampilkan surat berdasrkan perusahaan
        $this->load->model("admin/Msurat");
        $data["surat"] = $this->Msurat->surat_perusahaan($id_perusahaan);
        $data["id_perusahaan"] = $id_perusahaan;

        $this->load->view("admin/surat_tampil",$data);

    }
    public function tambah_surat($id_perusahaan)
	{
		$this->load->model("admin/Msurat");

		$this->load->model("admin/Moperator");
		//mengambil data operator berdasarkan id perusahaan
		$data['operator'] = $this->Moperator->tampil_operator_perusahaan($id_perusahaan);

    	// Mengambil data yang diinputkan dalam form
		$input = $this->input->post();

    	// Jika ada inputan dari form
		if ($input) {
        // Menjalankan fungsi tambah_surat pada model Msurat
			$this->Msurat->tambah_surat($input);
        // Kembali ke halaman tampil surat
			redirect("admin/surat/surat_tampil/".$id_perusahaan);
		}

    // Load the view for adding surat
		$this->load->view("admin/surat_tambah",$data);
	}

    public function ubah_surat($id_surat,$id_perusahaan)
    {
    $this->load->model("admin/Msurat");
    // Mengambil data yang diinputkan dalam form
    $input = $this->input->post();
    
    // Jika ada inputan dari form
    if ($input) {
        // Menjalankan fungsi ubah_surat pada model Msurat
        $this->Msurat->ubah_surat($input,$id_surat);
        // Kembali ke halaman tampil surat
        redirect("admin/surat/surat_tampil/".$id_perusahaan);
    }
    
    // Mengambil data surat berdasarkan id_surat
    $data['surat'] = $this->Msurat->detail_surat($id_surat);
    $this->load->view("admin/surat_ubah", $data);
    }

    public function hapus_surat($id_surat,$id_perusahaan)
    {
        $this->load->model("admin/Msurat");
        $this->Msurat->hapus_surat($id_surat);
        redirect("admin/surat/surat_tampil/".$id_perusahaan);
    }

}
?>