<?php 
class Direktur extends CI_Controller
{
	//membuat function __contruct untuk mengamankan halaman (Jika tidak login tidak bisa masuk ke halaman ini)
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("admin")) {
			redirect("login");
		}
	}
	
	function direktur_tampil($id_perusahaan)
	{
		//mengambil data dari table direktur 
		$this->load->model("admin/Mdirektur");
		$data["direktur"] = $this->Mdirektur->tampil_direktur($id_perusahaan);
		$this->load->model("admin/Mperusahaan");
		$data["perusahaan"] = $this->Mperusahaan->ambil_perusahaan($id_perusahaan);
		$this->load->view("admin/direktur_tampil",$data);
	}

	function tambah($id_perusahaan)
	{
		$this->load->model("admin/Mperusahaan");
		//mengambil data yang diinput di formulir
		$input = $this->input->post();
		//jika ada data yang di input di formulir maka
		if ($input) 
		{
			//memanggil model mdirektur di folder admin
			$this->load->model("admin/Mdirektur");
			//menjalankan fungsi simpan direktur
			$this->Mdirektur->simpan_direktur($input,$id_perusahaan);
			//kembali ke halaman direktur
			redirect("admin/direktur/direktur_tampil/".$id_perusahaan);
		}
		$data["perusahaan"] = $this->Mperusahaan->ambil_perusahaan($id_perusahaan);
		//menuju ke view tambah direktur
		$this->load->view("admin/direktur_tambah",$data);
	}

	function ubah_direktur($id_direktur)
	{
		$this->load->model("admin/Mdirektur");
		//mengambil data yang di inpur di formulir
		$input = $this->input->post();
		//jika ada inputan dari formulie
		if($input)
		{
			//menjalankan fungsi ubah_direktur pada model mdirektur
			$this->Mdirektur->ubah_direktur($input,$id_direktur);
			//kembali ke halaman tampil direktur
			redirect("admin/direktur");
		}
		$data['direktur'] = $this->Mdirektur->ambil_direktur($id_direktur);
		$this->load->view("admin/direktur_ubah",$data);
	}

	function hapus_direktur($id_direktur)
	{
		$this->load->model("admin/Mdirektur");
		$this->Mdirektur->hapus_direktur($id_direktur);
		redirect("admin/direktur");
	}
}
?>