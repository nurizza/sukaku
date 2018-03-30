<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('login') != "sudah login") {
			$this->load->view('login');
		} else {
			redirect('/home');
		}
	}

	public function login() 	
	{
		if ($this->session->userdata('login') != "sudah login") {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			
			$auth = array(
				'email' => $email,
				'password' => $password,
				);
			$cek = $this->model_data->select_where('data_user',$auth);
		
			if (count($cek) > 0) {
				$data_session = array(
					'id' => $cek[0]['id'],	
					'nama' => $cek[0]['nama'],
					'email' => $cek[0]['email'],
					'password' => $cek[0]['password'],
					'posisi' => $cek[0]['posisi'],
					'login' => "sudah login",
					);  
				$this->session->set_userdata($data_session);
				redirect('/home');
			} else {
				echo "<script type='text/javascript'>
		        		alert('Data Staff Tidak Ditemukan!') 
		        		</script>"; 
		        echo "<script type='text/javascript'>
		        		window.location.href = '".base_url()."'
		        		</script>";
			}
		} else{
			redirect('/home');
		}
	}

	public function logout()
	{
		if ($this->session->userdata('login') == "sudah login") {
			$this->session->sess_destroy();
			redirect();
		} else {
			redirect();
		}
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */