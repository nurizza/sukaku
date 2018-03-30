<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Admin") {
			$data ['produk'] = $this->model_data->select('barang');
			$data['main_view'] = 'produk_view';
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
				$data['main_view'] = 'input_view_produk';
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
				$foto = $this->upload();
				$data = array(
					'id' => $this->input->post('id'),
					'nama_barang' => $this->input->post('nama_barang'),
					'foto' => $foto,
				 	'harga' => $this->input->post('harga'),
				 	'stok' =>  $this->input->post('stok'),
				 	'detail' =>  $this->input->post('detail'),
	 			);

			$this->db->insert('barang', $data);

			if ($this->db->affected_rows() > 0){
					$data['notif'] = 'berhasil';
					$data['main_view'] = 'input_view_produk';
					$this->load->view('template', $data);
			}else{
					$data['notif'] = 'gagal';
					$data['main_view'] = 'input_view_produk';
					$this->load->view('template', $data);
			}
			}else{
				redirect('/auth');
			}
		} else {
			redirect('/auth');
		}
	}

	function upload(){
		$type = explode('.', $_FILES["foto"]["name"]);
		$type = $type[count($type)-1];
		$url = uniqid(rand()).'.'.$type;
			if(in_array($type, array("jpg","jpeg","png","PNG")))
				if(is_uploaded_file($_FILES["foto"]["tmp_name"]))
					if(move_uploaded_file($_FILES["foto"]["tmp_name"],"./assets/img/".$url))
						return $url;
					return "";
	}

	public function hapus($id)
	{
		if($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Admin") {
				$where = array('id'=>$id);
        		$this->model_data->delete_where('barang',$where);

        		if ($this->db->affected_rows() > 0){
					$this->session->set_flashdata('hapus', 'berhasil');
					redirect('/produk');
				}else{
					$this->session->set_flashdata('hapus', 'gagal');
					redirect('/produk');
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
        		$data['produk'] = $this->model_data->select_where('barang',$where);
				$data['main_view'] = 'edit_view_produk';
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
				 	'stok' =>  $this->input->post('stok'),
				 	'detail' =>  $this->input->post('detail')
	 			);
				$where = array('id' => $id);
        		$this->model_data->update_where('barang',$data,$where);
        		if ($this->db->affected_rows() > 0){
					$this->session->set_flashdata('update', 'berhasil');
					redirect('/produk');
				}else{
					$this->session->set_flashdata('update', 'gagal');
					redirect('/produk');
				}
			}else{
				redirect('/auth');
			}
		} else {
			redirect('/auth');
		}
	}

	public function edit_foto_view($id)
	{
		if ($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Admin") {
        		$where = array('id'=>$id);
        		$data['produk'] = $this->model_data->select_where('barang',$where);
				$data['main_view'] = 'edit_view_foto';
		        $this->load->view('template', $data);
			}else{
				redirect('/auth');
			}
		} else {
			redirect('/auth');
		}
	}

	public function edit_foto()
	{	
		if ($this->session->userdata('login') == "sudah login") {
			if ($this->session->userdata('posisi') == "Admin") {
				$id = $this->input->post('id');
				$foto = $this->upload();
        		$data = array(
					'id' => $this->input->post('id'),
					'foto' => $foto
	 			);
	 			$where = array('id' => $id);
        		$this->model_data->update_where('barang',$data,$where);
        		if ($this->db->affected_rows() > 0){
					$this->session->set_flashdata('foto', 'berhasil');
					redirect('/produk');
				}else{
					$this->session->set_flashdata('foto', 'gagal');
					redirect('/produk');
				}
			}else{
				redirect('auth');
			}
		}else{
			redirect('auth');
		}
	}
}

/* End of file product.php */
/* Location: ./application/controllers/product.php */