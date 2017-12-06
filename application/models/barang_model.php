<?php 
/**
* 
*/
class barang_model extends CI_Model
{
	
	public $nama_table_barang 	= 'barang';
	public $id_barang 			= 'id_barang';
	public $order	= 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh mahasiswa
	function ambil_data_barang(){
		$this->db->order_by($this->id_barang,$this->order);
		return $this->db->get($this->nama_table_barang)->result();
	}
	function tambah_data_barang($data)
 	{
 		return $this->db->insert($this->nama_table_barang, $data);
 	}
 	function hapus_barang($id)
 	{
 		$this->db->where($this->id_barang, $id);
 		$this->db->delete($this->nama_table_barang);
 	}

 	function select_barang($id){
 		$this->db->where($this->id_barang, $id);
 		return $this->db->get($this->nama_table_barang)->row();
 	}

 	function edit_data_barang($id,$data){
 		$this->db->where($this->id_barang, $id);
 		$this->db->update($this->nama_table_barang, $data);
 	}
}
 ?>