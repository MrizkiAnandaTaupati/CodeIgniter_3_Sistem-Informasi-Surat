<?php 
class Mperusahaan extends CI_Model
{

    function total_perusahaan()
    {
        $result = $this->db->get('perusahaan')->num_rows();
        return $result;

    }
}
?>