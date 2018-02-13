<?php 

class C_data extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper(array('form', 'url'));
	}
	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$data['artikel'] = $this->m_data->tampil_artikel()->result();
		// $this->load->view('v_home',$data);
		$this->load->view('v_head',$data);
		$this->load->view('v_index',$data);
		$this->load->view('v_tail',$data);
	}
	function konten(){
		$id=$this->uri->segment('3');
		$where = array('id_artikel' => $id);
		$data['artikel'] = $this->m_data->edit_data($where,'artikel')->result();
		$data['komentar'] = $this->m_data->edit_data($where,'komentar')->result();
		// $this->load->view('v_home',$data);
		$this->load->view('v_head',$data);
		$this->load->view('v_isi',$data);
		$this->load->view('v_tail',$data);
	}
	function kategori(){
		$id=$this->uri->segment('3');
		$where = array('id_kategori' => $id);
		$data['artikel'] = $this->m_data->edit_data($where,'artikel')->result();
		$this->load->view('v_head',$data);
		$this->load->view('v_kategori',$data);
		$this->load->view('v_tail',$data);
	}

	function tambah_aksi(){
		$config['upload_path']          = './asset/img/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('v_admin', $error);
		}else{
			$upload = $this->upload->data();
			$this->load->view('v_admin', $upload);
		}
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$kategori = $this->input->post('kategori');
		$data = array(
			'id_artikel' => NULL,
			'judul' => $judul,
			'isi_artikel' => $isi,
			'waktu_artikel' => date("Y/m/d h:i:s"),
			'id_kategori' => $kategori,
			'username' => $this->session->userdata("nama"),
			'gambar' => $upload['file_name'],
		);
		$this->m_data->input_data($data,'artikel');
		redirect('c_admin');
	}
	function tambah_komen(){
		$user = $this->input->post('user_komen');
		$isi = $this->input->post('isi_komen');
		$id = $this->input->post('id_artikel');
		$data = array(
			'id_komentar' => NULL,
			'isi_komentar' => $isi,
			'tgl_komentar' => date("Y/m/d h:i:s"),
			'username' => $user,
			'id_artikel' => $id,
		);
		$this->m_data->input_data($data,'komentar');
		redirect('c_data/konten/'.$id);
	}
	function tambah_kategori(){
		$nama = $this->input->post('nama_kategori');
		$rincian = $this->input->post('rincian');
		$data = array(
			'id_kategori' => NULL,
			'nama_kategori' => $nama,
			'rincian' => $rincian,
		);
		$this->m_data->input_data($data,'kategori');
		redirect('c_admin/data_kategori');
	}
	function hapus($id_artikel){
		$where = array('id_artikel' => $id_artikel);
		$this->m_data->hapus_data($where,'artikel');
		redirect('c_admin');
	}
	function hapus_kategori($id_kategori){
		$where = array('id_kategori' => $id_kategori);
		$this->m_data->hapus_data($where,'kategori');
		redirect('c_admin/data_kategori');
	}
	function hapus_komentar($id_komentar){
		$where = array('id_komentar' => $id_komentar);
		$this->m_data->hapus_data($where,'komentar');
		redirect('c_admin/data_komentar');
	}
	function update(){
		$config['upload_path']          = './asset/img/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 4000;
		$config['max_width']            = 2024;
		$config['max_height']           = 1068;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('v_edit', $error);
		}else{
			$upload = $this->upload->data();
			$this->load->view('v_edit', $upload);
		}
		$id_artikel = $this->input->post('id_artikel');
		$isi_artikel = $this->input->post('isi_artikel');
		$id_kategori = $this->input->post('id_kategori');
		$judul = $this->input->post('judul');
		$data = array(
			'isi_artikel' => $isi_artikel,
			'judul' => $judul,
			'id_kategori' => $id_kategori,
			'gambar' => $upload['file_name'],
		);
		$where = array(
			'id_artikel' => $id_artikel
		);
		$this->m_data->update_data($where,$data,'artikel');
		redirect('c_admin');
	}
	function update_kategori(){
		$id_kategori = $this->input->post('id_kategori');
		$nama_kategori = $this->input->post('nama_kategori');
		$rincian = $this->input->post('rincian');
		$data = array(
			'rincian' => $rincian,
			'nama_kategori' => $nama_kategori,
			'id_kategori' => $id_kategori,
		);
		$where = array(
			'id_kategori' => $id_kategori
		);
		$this->m_data->update_data($where,$data,'kategori');
		redirect('c_admin/data_kategori');
	}
}
?>