<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasukan extends CI_Controller {

	public function index()
	{	
		if($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Admin") {
			$data['main_view'] = 'pemasukan_view.php';
			$data ['transaksi'] = $this->model_data->select('transaksi');
			$this->load->view('template', $data);
		}else{
			redirect('/auth');
		}
		}else{
			redirect('/auth');
		}
	}

	public function hapus($id)
	{
		if($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Admin") {
				$where = array('id'=>$id);
        		$this->model_data->delete_where('transaksi',$where);

        		if ($this->db->affected_rows() > 0){
					$this->session->set_flashdata('hapus', 'berhasil');
					redirect('/pemasukan');
				}else{
					$this->session->set_flashdata('hapus', 'gagal');
					redirect('/pemasukan');
				}
		}else{
			redirect('/auth');
		}
		}else{
			redirect('/auth');
		}
	}

	public function edit_view($id)
	{
		if ($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Admin") {
        		$where = array('id'=>$id);
        		$data['pemasukan'] = $this->model_data->select_where('transaksi',$where);
				$data['main_view'] = 'edit_view_pemasukan';
		        $this->load->view('template', $data);
			}else{
				redirect('/auth');
			}
		} else {
			redirect('/auth');
		}
	}

	public function edit()
	{
		if ($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Admin") {
				$id = $this->input->post('id');
        		$data = array(
					'id' => $this->input->post('id'),
				 	'nama_pembeli' =>  $this->input->post('nama_pembeli'),
				 	'alamat' =>  $this->input->post('alamat'),
	 			);
				$where = array('id' => $id);
        		$this->model_data->update_where('transaksi',$data,$where);
        		if ($this->db->affected_rows() > 0){
					$this->session->set_flashdata('update', 'berhasil');
					redirect('/pemasukan');
				}else{
					$this->session->set_flashdata('update', 'gagal');
					redirect('/pemasukan');
				}
			}else{
				redirect('/auth');
			}
		} else {
			redirect('/auth');
		}
	}
}

/* End of file pemasukan.php */
/* Location: ./application/controllers/pemasukan.php */