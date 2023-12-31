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
    

    // echo "<pre>";
    // print_r($operator);
    // echo "</pre>";
    }

    public function tambah_surat($input)
    {
        $config ['upload_path'] = './assets/surat';
		$config ['allowed_types'] = 'xlsx';

		$this->load->library("upload",$config);

		$upload = $this->upload->do_upload("file_surat");

		if ($upload) 
		{
			$input["file_surat"] = $this->upload->data("file_name"); 
		}

        //mendapatkan kordinat waktu indonesia
		date_default_timezone_set("Asia/Jakarta");
		$input["tanggal_upload"] = date("Y-m-d H:i:s");

        // Insert data into the 'surat' table
        $this->db->insert('surat',$input);
    }

    public function detail_surat($id_surat)
    {
        $this->db->join("operator","operator.id_operator = surat.id_operator","left");
        $this->db->where("id_surat",$id_surat);
        $ambil_surat = $this->db->get("surat");
        $surat = $ambil_surat->row_array();

        return $surat;
    }

    public function ubah_surat($input, $id_surat) 
    {
        $config ['upload_path'] = './assets/surat';
		$config ['allowed_types'] = 'pdf';

		$this->load->library("upload",$config);

		$upload = $this->upload->do_upload("file_surat");

		if ($upload) 
		{
			$input["file_surat"] = $this->upload->data("file_name"); 
		}

    // Update data surat berdasarkan id_surat
    $this->db->where('id_surat', $id_surat);
    $this->db->update('surat', $input);
    }

    public function hapus_surat($id_surat)
    {
        $this->db->where("id_surat",$id_surat);
        $this->db->delete("surat");
    }

}
?>