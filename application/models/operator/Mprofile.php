<?php 
class Mprofile extends CI_Model
{
	function ubah_profile($input,$id_operator)
	{
		if (empty($input["password_operator"])) 
		{
			unset($input["password_operator"]);
		}

		else
		{
			$input['password_operator'] = sha1($input["password_operator"]);
		}
		$this->db->where("id_operator",$id_operator);
		$this->db->update("operator",$input);
		$this->db->where("id_operator",$id_operator);
		$operator = $this->db->get("operator")->row_array();
		$this->session->set_userdata("operator",$operator);
	}
}

?>