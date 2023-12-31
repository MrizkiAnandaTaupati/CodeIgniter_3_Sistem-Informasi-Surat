<?php 
class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("user_dinas")) {
			redirect("login");
		}
	}
	
	function index()
	{
		$this->load->view('user_dinas/index');
	}
}

?>