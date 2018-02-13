<?php 
class C_admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper(array('form', 'url'));
		if($this->session->userdata('status') != "login"){
			redirect(base_url("c_data"));
		}
	}
	function index(){
		$data['kategori'] = $this->m_data->tampil_data()->result();
		$data['artikel'] = $this->m_data->tampil_artikel()->result();
		$this->load->view('v_head',$data);
		$this->load->view('v_admin',$data);
		$this->load->view('v_tail',$data);
	}
	function data_kategori(){
		$data['kategori'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_head',$data);
		$this->load->view('v_dkategori',$data);
		$this->load->view('v_tail',$data);
	}
	function data_komentar(){
		$data['komentar'] = $this->m_data->tampil_komentar()->result();
		$this->load->view('v_head',$data);
		$this->load->view('v_komentar',$data);
		$this->load->view('v_tail',$data);
	}
	function edit($id_artikel){
		$where = array('id_artikel' => $id_artikel);
		$data['kategori'] = $this->m_data->tampil_data()->result();
		$data['artikel'] = $this->m_data->edit_data($where,'artikel')->result();
		$this->load->view('v_head',$data);
		$this->load->view('v_edit',$data);
		$this->load->view('v_tail',$data);
	}
	function edit_kategori($id_kategori){
		$where = array('id_kategori' => $id_kategori);
		$data['kategori'] = $this->m_data->edit_data($where,'kategori')->result();
		$this->load->view('v_head',$data);
		$this->load->view('v_ekategori',$data);
		$this->load->view('v_tail',$data);
	}
}
?>