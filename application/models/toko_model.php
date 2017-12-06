<?php 
/**
* 
*/
class toko_model extends CI_Model
{
	
	public $nama_table_toko			= 'toko';
	public $id_toko					= 'id_toko';
	public $order					= 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh mahasiswa
	function ambil_data_toko(){
		$this->db->order_by($this->id_toko,$this->order);
		return $this->db->get($this->nama_table_toko)->result();
	}

	function tambah_data_toko($data)
 	{
 		return $this->db->insert($this->nama_table_toko, $data);
 	}
 	function hapus_toko($id)
 	{
 		$this->db->where($this->id_toko, $id);
 		$this->db->delete($this->nama_table_toko);
 	}

 	function select_toko($id){
 		$this->db->where($this->id_toko, $id);
 		return $this->db->get($this->nama_table_toko)->row();
 	}

 	function edit_data_toko($id,$data){
 		$this->db->where($this->id_toko, $id);
 		$this->db->update($this->nama_table_toko, $data);
 	}

}
 ?>