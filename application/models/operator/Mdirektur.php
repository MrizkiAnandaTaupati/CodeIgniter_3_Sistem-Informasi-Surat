<?php

Class Mdirektur extends CI_model
{

    function tampil_direktur()
    {   
        $id_perusahaan = $_SESSION["operator"] ["id_perusahaan"];
        $this->db->where("id_perusahaan",$id_perusahaan);
        $ambil = $this->db->get("direktur");
        $direktur = $ambil->result_array();

        return $direktur;
    }
}
?>