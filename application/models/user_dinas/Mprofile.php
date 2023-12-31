<?php 
class Mprofile extends CI_Model
{
	function ubah_profile($input,$id_user_dinas)
	{
		if (empty($input["password_user_dinas"])) 
		{
			unset($input["password_user_dinas"]);
		}

		else
		{
			$input['password_user_dinas'] = sha1($input["password_user_dinas"]);
		}
		$this->db->where("id_user_dinas",$id_user_dinas);
		$this->db->update("user_dinas",$input);
		$this->db->where("id_user_dinas",$id_user_dinas);
		$user_dinas = $this->db->get("user_dinas")->row_array();
		$this->session->set_userdata("user_dinas",$user_dinas);
	}
}

?>