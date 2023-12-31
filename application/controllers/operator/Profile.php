<?php 
class Profile extends CI_Controller
{

	function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("operator")) {
            redirect("login");
        }
    }

	function index()
	{
		$this->load->model("operator/Mprofile");
		$input = $this->input->post();
		if($input)
		{
			$this->Mprofile->ubah_profile($input,$_SESSION["operator"] ["id_operator"]);
			redirect("operator/profile");
		}
		$this->load->view("operator/profile");
	}
}
?>