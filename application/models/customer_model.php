<?php 
/**
* 
*/
class customer_model extends CI_Model
{
	
	public $nama_table_customer		= 'customer';
	public $id_customer				= 'id_customer';
	public $order					= 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh mahasiswa
	function ambil_data_customer(){
		$this->db->order_by($this->id_customer,$this->order);
		return $this->db->get($this->nama_table_customer)->result();
	}

	function tambah_data_customer($data)
 	{
 		return $this->db->insert($this->nama_table_customer, $data);
 	}
 	function hapus_customer($id)
 	{
 		$this->db->where($this->id_customer, $id);
 		$this->db->delete($this->nama_table_customer);
 	}

 	function select_customer($id){
 		$this->db->where($this->id_customer, $id);
 		return $this->db->get($this->nama_table_customer)->row();
 	}

 	function edit_data_customer($id,$data){
 		$this->db->where($this->id_customer, $id);
 		$this->db->update($this->nama_table_customer, $data);
 	}
 }
 ?>