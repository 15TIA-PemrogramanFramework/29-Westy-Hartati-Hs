<?php 
/**
* 
*/
class hp_model extends CI_Model
{
	
	public $nama_table = 'hp_1086';
	public $id 		= 'id';
	public $order	= 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	
	function ambil_data(){
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_table)->result();
	}

	
	function tambah_data($data){
		return $this->db->insert($this->nama_table,$data);
	}
	
	function hapus_data($id){
		$this->db->where($this->id,$id); //$id (data yg dikirimkan ke controller tadi)
		$this->db->delete($this->nama_table); //menghasilkan delete nama table
	}

	function edit_data($id, $data){
		$this->db->where($this->id,$id); //$id (data yg dikirimkan ke controller tadi)
		$this->db->update($this->nama_table, $data); //menghasilkan delete nama table
	}

	function ambil_data_id($id){
		$this->db->where($this->id, $id);
		return $this->db->get($this->nama_table)->row();
	}

	// function cek_login($username, $password){
	// 	$this->db->where('nama',$username);
	// 	$this->db->where('prodi',$password);
	// 	return $this->db->get($this->nama_table)->row();
	// }
	

}
 ?>