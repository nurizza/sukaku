<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Admin") {
			$data['main_view'] = 'pengeluaran_view.php';
			$data ['pengeluaran'] = $this->model_data->select('pembelanjaan');
			$this->load->view('template', $data);
		}else{
			redirect('/auth');
		}
		}else{
			redirect('/auth');
		}
	}

	public function input_view()
	{
		if ($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Admin") {
				$data['main_view'] = 'input_view_pengeluaran';
        		$this->load->view('template', $data);
			}else{
				redirect('/auth');
			}
		} else {
			redirect('/auth');
		}
	}

	public function input()
	{
		if ($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Admin") {
				$data = array(
					'id' => $this->input->post('id'),
					'nama_barang' => $this->input->post('nama_barang'),
				 	'harga' => $this->input->post('harga'),
				 	'jml_barang' =>  $this->input->post('jml_barang'),
				 	'total' =>  $this->input->post('total')
	 			);

			$this->db->insert('pembelanjaan', $data);

			if ($this->db->affected_rows() > 0){
					$data['notif'] = 'berhasil';
					$data['main_view'] = 'input_view_pengeluaran';
					$this->load->view('template', $data);
			}else{
					$data['notif'] = 'gagal';
					$data['main_view'] = 'input_view_pengeluaran';
					$this->load->view('template', $data);
			}
			}else{
				redirect('/auth');
			}
		} else {
			redirect('/auth');
		}
	}

	public function hapus($id)
	{
		if($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Admin") {
				$where = array('id'=>$id);
        		$this->model_data->delete_where('pembelanjaan',$where);

        		if ($this->db->affected_rows() > 0){
					$this->session->set_flashdata('hapus', 'berhasil');
					redirect('/pengeluaran');
				}else{
					$this->session->set_flashdata('hapus', 'gagal');
					redirect('/pengeluaran');
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
        		$data['pengeluaran'] = $this->model_data->select_where('pembelanjaan',$where);
				$data['main_view'] = 'edit_view_pengeluaran';
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
					'nama_barang' => $this->input->post('nama_barang'),
				 	'harga' => $this->input->post('harga'),
				 	'jml_barang' =>  $this->input->post('jml_barang'),
				 	'total' =>  $this->input->post('total')
	 			);
				$where = array('id' => $id);
        		$this->model_data->update_where('pembelanjaan',$data,$where);
        		if ($this->db->affected_rows() > 0){
					$this->session->set_flashdata('update', 'berhasil');
					redirect('/pengeluaran');
				}else{
					$this->session->set_flashdata('update', 'gagal');
					redirect('/pengeluaran');
				}
			}else{
				redirect('/auth');
			}
		} else {
			redirect('/auth');
		}
	}
}

/* End of file pengeluaran.php */
/* Location: ./application/controllers/pengeluaran.php */