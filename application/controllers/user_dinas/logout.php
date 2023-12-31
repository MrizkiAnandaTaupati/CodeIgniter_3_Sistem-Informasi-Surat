<?php 
class Logout extends CI_Controller
{
	function index()
	{
		$this->session->unset_userdata("user_dinas");

		redirect("/login");
	}

}

?>
