<?php
class Direktur extends CI_controller
{
    function __contruct()
    {
        parent::__construct();
        if (!$this->session->userdata("operator")) {
            redirect("login");
        }
    }

    function index()
    {
        $this->load->model("operator/Mdirektur");
        $data['direktur'] = $this->Mdirektur->tampil_direktur();
        
        $this->load->view("operator/direktur_tampil",$data);
    }
}
?>