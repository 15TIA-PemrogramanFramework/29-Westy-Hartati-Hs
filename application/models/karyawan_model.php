<?php 
/**
* 
*/
class karyawan_model extends CI_Model
{
	
	public $nama_table_karyawan		= 'karyawan';
	public $id_karyawan 			= 'id_karyawan';
	public $order					= 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh mahasiswa
	function ambil_data_karyawan(){
		$this->db->order_by($this->id_karyawan,$this->order);
		return $this->db->get($this->nama_table_karyawan)->result();
	}

	function tambah_data_karyawan($data)
 	{
 		return $this->db->insert($this->nama_table_karyawan, $data);
 	}
 	function hapus_karyawan($id)
 	{
 		$this->db->where($this->id_karyawan, $id);
 		$this->db->delete($this->nama_table_karyawan);
 	}

 	function select_karyawan($id){
 		$this->db->where($this->id_karyawan, $id);
 		return $this->db->get($this->nama_table_karyawan)->row();
 	}

 	function edit_data_karyawan($id,$data){
 		$this->db->where($this->id_karyawan, $id);
 		$this->db->update($this->nama_table_karyawan, $data);
 	}

}
 ?>