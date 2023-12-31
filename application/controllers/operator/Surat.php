<?php 
class Surat extends CI_Controller
{
    //membuat function __contruct untuk mengamankan halaman (Jika tidak login tidak bisa masuk ke halaman ini)
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("operator")) {
            redirect("login");
        }
    }
    
    function surat_tampil()
    {
        // menampilkan surat berdasarkan perusahaan
        $this->load->model("operator/Msurat");
        $id_perusahaan = $_SESSION['operator'] ['id_perusahaan'];
        $data["surat"] = $this->Msurat->surat_perusahaan($id_perusahaan);
        $data["id_perusahaan"] = $_SESSION['operator'] ['id_perusahaan'];
        $this->load->view("operator/surat_tampil",$data);

    }
    public function tambah_surat()
	{   
        $id_perusahaan = $_SESSION['operator'] ['id_perusahaan'];
		$this->load->model("operator/Msurat");
		$this->load->model("operator/Moperator");
		//mengambil data operator berdasarkan id perusahaan
		$data['operator'] = $this->Moperator->tampil_operator_perusahaan($id_perusahaan);

    	// Mengambil data yang diinputkan dalam form
		$input = $this->input->post();

    	// Jika ada inputan dari form
		if ($input) {
        // Menjalankan fungsi tambah_surat pada model Msurat
			$this->Msurat->tambah_surat($input);
        // Kembali ke halaman tampil surat
			redirect("operator/surat/surat_tampil/".$id_perusahaan);
		}

    // Load the view for adding surat
		$this->load->view("operator/surat_tambah",$data);
	}

    public function ubah_surat($id_surat)
    {
    $id_perusahaan = $_SESSION['operator'] ['id_perusahaan'];
    $this->load->model("operator/Msurat");
    // Mengambil data yang diinputkan dalam form
    $input = $this->input->post();
    
    // Jika ada inputan dari form
    if ($input) {
        // Menjalankan fungsi ubah_surat pada model Msurat
        $this->Msurat->ubah_surat($input,$id_surat);
        // Kembali ke halaman tampil surat
        redirect("operator/surat/surat_tampil/".$id_perusahaan);
    }
    
    // Mengambil data surat berdasarkan id_surat
    $data['surat'] = $this->Msurat->detail_surat($id_surat);
    $this->load->view("operator/surat_ubah", $data);
    }

    public function hapus_surat($id_surat)
    {   
        $id_perusahaan = $_SESSION['operator'] ['id_perusahaan'];
        $this->load->model("operator/Msurat");
        $this->Msurat->hapus_surat($id_surat);
        redirect("operator/surat/surat_tampil/".$id_perusahaan);
    }

}
?>