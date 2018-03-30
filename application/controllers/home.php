<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('login') == "sudah login") { //menjalankan fungsi login di controller
			if ($this->session->userdata('posisi') == "Admin") {
				redirect('/dashboard');
			} else if ($this->session->userdata('posisi') == "Buyer"){
				redirect('/buyer');
			} 
		} else {
			redirect('/auth');
		}
	}

}

/* End of file session.php */
/* Location: ./application/controllers/session.php */