<?php 
class Mdirektur extends CI_Model
{
	
	function tampil_direktur($id_perusahaan)
	{
		// mengambil data direktur berdasarkan perusahaan
		$this->db->where("id_perusahaan", $id_perusahaan);
		$ambil_direktur =$this->db->get("direktur");
		$direktur = $ambil_direktur->result_array();

		return $direktur;

	}

	function simpan_direktur($input)
	{
		$config ['upload_path'] = './assets/img';
		$config ['allowed_types'] = 'gif|jpg|png|pdf|jpeg';

		$this->load->library("upload",$config);

		$upload = $this->upload->do_upload("foto_direktur");
		$input["password_direktur"] = sha1($input["password_direktur"]);

		if ($upload) 
		{
			$input["foto_direktur"] = $this->upload->data("file_name"); 
		}

		$this->db->insert("direktur",$input);
	}

	function ambil_direktur($id_direktur)
	{
		//mengambil data direktur yang ingin diubah berdasarkan id direkturnya
		$this->db->where("id_direktur",$id_direktur);
		$ambil_direktur = $this->db->get("direktur");
		$direktur = $ambil_direktur -> row_array();

		return $direktur;
	}

	function ubah_direktur($input,$id_direktur)
	{
		$config ['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
		$config ['upload_path'] = './assets/img/';

		$this->load->library("upload",$config);

		$upload = $this->upload->do_upload("foto_direktur");

		if($upload)
		{
			$input["foto_direktur"] = $this->upload->data("file_name"); 
		}
		$password = $input["password_direktur"];
		if ($password) {
			$password = sha1($input["password_direktur"]);
		}
		$this->db->where("id_direktur",$id_direktur);
		$this->db->update("direktur",$input);
	}

	function hapus_direktur($id_direktur)
	{
		$this->db->where("id_direktur",$id_direktur);
		$this->db->delete('direktur');
	}
}
?>