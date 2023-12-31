<?php 
class Mperusahaan extends CI_Model
{
    
    function tampil_perusahaan()
    {
        $ambil_perusahaan =$this->db->get("perusahaan");
        $perusahaan = $ambil_perusahaan->result_array();

        return $perusahaan;

    }
    public function ubah_perusahaan($data, $id_perusahaan)
{
    // Update data perusahaan berdasarkan id_perusahaan
    $this->db->where('id_perusahaan', $id_perusahaan);
    $this->db->update('nama_tabel_perusahaan', $data);
}
    function ambil_perusahaan($id_perusahaan)
    {
        $this->db->where("id_perusahaan",$id_perusahaan);
        $perusahaan = $this->db->get("perusahaan")->row_array();

        return $perusahaan;
    }
}
 ?>