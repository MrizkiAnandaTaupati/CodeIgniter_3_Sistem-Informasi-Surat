<?php 
class Mprofile extends CI_Model
{
	function ubah_profile($input)
	{
		if (empty($input["password_admin"])) 
		{
			unset($input["password_admin"]);
		}

		else
		{
			$input['password_admin'] = sha1($input["password_admin"]);
		}
		$this->db->where($_SESSION['admin'] ['id_admin'],$_SESSION["admin"] ["id_admin"]);
		$this->db->update("admin",$input);
		$this->db->where($_SESSION['admin'] ['id_admin'],$_SESSION["admin"] ["id_admin"]);
		$admin = $this->db->get("admin")->row_array();
		$this->session->set_userdata("admin",$admin);
	}
}

?>