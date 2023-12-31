<?php 
class Msurat extends CI_Model
{

    function surat_perusahaan($id_perusahaan)
    {
    //   menggambungkan / join table operator untuk ,mendapatkan kolom id perusahaan
        $this->db->order_by("id_surat", "desc");
        $this->db->join('operator','operator.id_operator = surat.id_operator',"left");

    // mengambil data surat berdasarkan id perusahaan
        $this->db->where("operator.id_perusahaan",$id_perusahaan);
        $ambil_surat = $this->db->get("surat");
        $operator = $ambil_surat->result_array();
        return $operator;
    }

    function surat_validasi($id_surat)
    {
        $this->db->where("id_surat",$id_surat);
        $ambil = $this->db->get("surat");
        $surat = $ambil->row_array();
        return $surat;
    }

    function validasi_surat($input,$id_surat)
    {
        // Update data surat berdasarkan id_surat
        $this->db->where('id_surat', $id_surat);
        $this->db->update('surat', $input);
    }
}
?>