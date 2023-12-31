<?php 
class Profile extends CI_Controller
{

	function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("admin")) {
            redirect("login");
        }
    }

	function index()
	{
		$this->load->model("admin/Mprofile");
		$input = $this->input->post();
		if($input)
		{
			$this->Mprofile->ubah_profile($input,$_SESSION["admin"] ["id_admin"]);
			redirect("admin/profile");
		}
		$this->load->view("admin/profile");
	}
}
?>