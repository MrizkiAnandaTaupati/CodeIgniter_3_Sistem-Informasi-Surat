<?php 
class Moperator extends CI_Model
{
    
    function tampil_operator($id_perusahaan)
{
    // Menggabungkan table perusahaan dan table operator untuk dapat mengakses data dari table perusahaan
    $this->db->join('perusahaan', 'perusahaan.id_perusahaan = operator.id_perusahaan');
    $this->db->where("operator.id_perusahaan", $id_perusahaan); 
    $ambil_operator = $this->db->get("operator");
    $operator = $ambil_operator->result_array();

    return $operator;
}

    function tampil_operator_perusahaan($id_perusahaan)
    {
        $this->db->where("operator.id_perusahaan",$id_perusahaan);
        $ambil_operator = $this->db->get("operator");
        $operator = $ambil_operator->result_array();

        return $operator;
    }
    
    function tambah_operator($input)
    {
        $input["password_operator"] = sha1($input["password_operator"]);
        $this->db->insert("operator",$input);
    }

    function detail_operator($id_operator)
    {
        $this->db->where("id_operator",$id_operator);
        $op = $this->db->get("operator");
        $operator = $op->row_array();

        return $operator;
    }

    function ubah_operator($input,$id_operator)
    {
        $password = $input["password_operator"];
        if ($password) {
            $password = sha1($input["password_operator"]);
        }
        $this->db->where("id_operator",$id_operator);
        $this->db->update("operator",$input);
    }

    function hapus_operator($id_operator)
    {
        $this->db->where("id_operator",$id_operator);
        $this->db->delete('operator');
    }
}
 ?>