<?php 
class Profile extends CI_Controller
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
		$this->load->model("user_dinas/Mprofile");
		$input = $this->input->post();
		if($input)
		{
			$this->Mprofile->ubah_profile($input,$_SESSION["user_dinas"] ["id_user_dinas"]);
			redirect("user_dinas/profile");
		}
		$this->load->view("user_dinas/profile");
	}
}
?>