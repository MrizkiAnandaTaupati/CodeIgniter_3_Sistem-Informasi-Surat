<?php

class Dashboard extends CI_controller
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
        $this->load->view("operator/index");
    }
}
?>