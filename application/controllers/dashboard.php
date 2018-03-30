<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Admin") {
			$data['pemasukan'] = $this->model_data->select_chart('transaksi');
			$data['pengeluaran'] = $this->model_data->select_chart('pembelanjaan');
			$data['main_view'] = 'dashboard_view';
			$this->load->view('template', $data);
		}else{
			redirect('/auth');
		}
		}else{
			redirect('/auth');
		}
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */