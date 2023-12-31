<?php
class Dashboard extends CI_Controller
{
    function index()
        {
            $this->load->model("Mperusahaan");
            $data['perusahaan'] = $this->Mperusahaan->total_perusahaan();
            $this->load->view("dashboard_pengunjung",$data);
        }
}
?>