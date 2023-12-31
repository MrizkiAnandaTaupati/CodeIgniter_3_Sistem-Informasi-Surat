<?php 
class Mperusahaan extends CI_Model
{
    
    function tampil_perusahaan()
    {
        $ambil_perusahaan =$this->db->get("perusahaan");
        $perusahaan = $ambil_perusahaan->result_array();

        return $perusahaan;

    }
}
 ?>