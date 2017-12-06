<?php 
/**
* 
*/
class beli_model extends CI_Model
{
	
	public $nama_table_beli		= 'beli';
	public $id_beli	 			= 'id_beli';
	public $order				= 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh mahasiswa
	function ambil_data_beli(){
		$this->db->distinct();
 		$this->db->select('a.nama_barang, b.nama_customer, c.nama_karyawan, d.jumlah_barang, d.tanggal_beli, d.id_beli');
 		$this->db->from('beli d');
 		$this->db->join('barang a', 'a.id_barang=d.id_barang');
 		$this->db->join('customer b', 'b.id_customer=d.id_customer');
 		$this->db->join('karyawan c', 'c.id_karyawan=d.id_karyawan');
 		
 		return $this->db->get($this->nama_table_beli)->result();
	}

	function tambah_data_beli($data)
 	{
 		return $this->db->insert($this->nama_table_beli, $data);
 	}
 	function hapus_beli($id)
 	{
 		$this->db->where($this->id_beli, $id);
 		$this->db->delete($this->nama_table_beli);
 	}

 	function select_beli($id){
 		$this->db->where($this->id_beli, $id);
 		return $this->db->get($this->nama_table_beli)->row();
 	}

 	function edit_data_beli($id,$data){
 		$this->db->where($this->id_beli, $id);
 		$this->db->update($this->nama_table_beli, $data);
 	}



}
 ?>