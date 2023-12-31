<?php 
class Mlogin extends CI_Model
{
	function login_admin($inputan)
	{
		//Pemrograman akan mengambil data dari table admin yang username dan password nya sesuai dengan yang di ketik di formulir	
		$this->db->where("username_admin",$inputan["username_login"]);
		$this->db->where("password_admin",sha1($inputan["password_login"]));
		$ambil = $this->db->get("admin");
		$cek = $ambil->row_array();

		//jika data tidak sesuai maka gagal
		if (empty($cek)) 
		{
			$this->db->where("username_operator",$inputan["username_login"]);
			$this->db->where("password_operator",sha1($inputan["password_login"]));
			$ambil_operator = $this->db->get("operator");
			$co = $ambil_operator->row_array();

			if(empty($co))
		{
			$this->db->where("username_user_dinas",$inputan["username_login"]);
			$this->db->where("password_user_dinas",sha1($inputan["password_login"]));
			$ambil_user_dinas = $this->db->get("user_dinas");
			$cd = $ambil_user_dinas->row_array();
			
			if (empty($cd)) {
				return "gagal";
			}

			else
			{
				$this->session->set_userdata("user_dinas",$cd);
				return "sukses_dinas";
			}
		}
			else
			{
				$this->session->set_userdata("operator",$co);

				return "sukses_operator";
			}
		}

		//selain itu maka membuat session cek
		else
		{
			$this->session->set_userdata("admin",$cek);

			return "sukses";	
		}
	}
}

 ?>