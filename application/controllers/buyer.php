<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Buyer") {
			$data ['barang'] = $this->model_data->select('barang');
			$data['main_view'] = 'produk_buyer_view';
			$this->load->view('template_buyer', $data);
		}else{
			redirect('/auth');
		}
		}else{
			redirect('/auth');
		}
	}

	public function detail($id){
		if($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Buyer") {
				$where = array('id'=>$id);
       			$data['produk'] = $this->model_data->select_where('barang',$where);
				$data['main_view'] = 'detail';
				$this->load->view('template_buyer', $data);
			}else{
			redirect('/auth');
		}
		}else{
			redirect('/auth');
		}
	}

	public function input()
	{
		if ($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Buyer") {
				$data = array(
					'nama_barang' => $this->input->post('nama_barang'),
				 	'harga' => $this->input->post('harga'),
				 	'jml_brg' =>  $this->input->post('jml_brg'),
				 	'total' =>  $this->input->post('total'),
				 	'nama_pembeli' =>  $this->input->post('nama_pembeli'),
				 	'alamat' =>  $this->input->post('alamat'),
	 			);

			$this->db->insert('transaksi', $data);
					$id = $this->input->post('id');
					$stokjual = $this->input->post('jml_brg');
					$stokasli = $this->input->post('stok');
					$data = array(
					'id' => $this->input->post('id'),
					'stok' => $stokasli - $stokjual,
					);
				$where = array('id' => $id);
        		$this->model_data->update_where('barang',$data,$where);

			if ($this->db->affected_rows() > 0){
					$this->session->set_flashdata('notif', 'Transaksi Berhasil');
					redirect('/buyer/detail/'.$id);
			}else{
					$this->session->set_flashdata('notif', 'Transaksi Gagal');
					redirect('/buyer/detail/'.$id);
			}
			}else{
				redirect('/auth');
			}
		} else {
			redirect('/auth');
		}
	}

}

/* End of file buyer.php */
/* Location: ./application/controllers/buyer.php */