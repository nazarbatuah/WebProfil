<?php
class C_login extends CI_Controller{

 function __construct(){
  parent::__construct();
  $this->load->model('m_login');

}

function index(){
  $this->load->view('v_home');
}

function cek_login(){
  $where = array('username' => $this->input->post('username', TRUE),
    'password' => md5($this->input->post('password', TRUE))
  );
  $hasil = $this->m_login->tes_login("user",$where);
  if ($hasil->num_rows() == 1) {
    foreach ($hasil->result() as $sess) {
      $sess_data['status'] = "login";
      $sess_data['nama'] = $sess->username;
      $sess_data['level'] = $sess->level;
      $this->session->set_userdata($sess_data);
    }
    if ($this->session->userdata('level')=='admin') {
     redirect(base_url("c_admin"));

   }
   else if ($this->session->userdata('level')=='user') {
    redirect(base_url("c_data"));      }   
  }
  else {
    echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
  }

}

function logout(){
  $this->session->sess_destroy();
  redirect(base_url('c_data'));
}
}
?>