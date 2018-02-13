<?php 
class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('kategori');
	}

	function tampil_artikel(){
		return $this->db->join('kategori b','b.id_kategori=a.id_kategori')->get('artikel a');
	}
	function tampil_komentar(){
		return $this->db->get('komentar');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data($where,$table){	
		return $this->db->get_where($table,$where);
	}	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}
?>