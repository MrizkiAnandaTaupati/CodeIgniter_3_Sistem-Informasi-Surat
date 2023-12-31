<?php 
class Login extends CI_Controller
{
	function index()
	{
		//mengambil data yang di input di formulir
		$inputan = $this->input->post();
		//jika ada yang menginput data di formulir
		if ($inputan) 
		{
			//controller memanggil model Mlogin
			$this->load->model("Mlogin");
			//Controller menjalankan fungsi login_admin sekaligus mengirim data dari formulir($inputan)
			$hasil = $this->Mlogin->login_admin($inputan);
			//Jika gagal maka kembali ke halaman login
			if ($hasil=="gagal") 
			{
				$this->session->set_flashdata('login_fail', true);
				redirect("login");
			}
			//jika tidak maka lanjut login
			else
			{
				if ($hasil=="sukses_operator")
				{
					$this->session->set_flashdata('login_success', true);
					redirect("operator/dashboard");
				}
				else
			{
				if ($hasil=="sukses_dinas") {
					$this->session->set_flashdata('login_success', true);
					redirect("user_dinas/dashboard");
				}
				else
				{
					$this->session->set_flashdata('login_success', true);
				redirect("admin/dashboard");
				}
				
			}
		}

	}
		$this->load->view("login");	
	}
	
}
?>
