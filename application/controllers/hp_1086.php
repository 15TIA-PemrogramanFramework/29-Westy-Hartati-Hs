<?php 
/**
* 
*/
class Hp_1086 extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('hp_model');

		if(!$this->session->userdata('logined') && $this->session->userdata('logined') == true)
		{
			redirect('/');
		}
	}
	function index(){
		
		$data['hp_1086']=$this->hp_model->ambil_data();
		$this->load->view('hp_1086/hp_list',$data);
	}
	function tambah(){
		$data=array(
			'id'=>set_value('id'),
			'merk_hp'=>set_value('merk_hp'),
			'jenis_hp'=>set_value('jenis_hp'),
			'tgl_produksi'=>set_value('tgl_produksi'),
			'os'=>set_value('os'),
			'jumlah_stock'=>set_value('jumlah_stock'),
			'harga'=>set_value('harga'),
			'button'=>'Tambah',
			'action'=>site_url('hp_1086/tambah_aksi')
		);
		$this->load->view('hp_1086/hp_form', $data);
	}

	function tambah_aksi()
	{
		$data=array(
			'merk_hp'=>$this->input->post('merk_hp'),
			'jenis_hp'=>$this->input->post('jenis_hp'),
			'tgl_produksi'=>$this->input->post('tgl_produksi'),
			'os'=>$this->input->post('os'),
			'jumlah_stock'=>$this->input->post('jumlah_stock'),
			'harga'=>$this->input->post('harga'),

		);
		$this->hp_model->tambah_data($data);
		redirect(site_url('hp_1086'));
	}
	function delete($id){
		$this->hp_model->hapus_data($id);
		redirect(site_url('hp_1086'));
	}

	function edit($id){
		$hp=$this->hp_model->ambil_data_id($id);
		$data=array(
			'id'	=>set_value('id',$hp->id),	
			'merk_hp'	=>set_value('merk_hp',$hp->merk_hp),
			'jenis_hp'	=>set_value('jenis_hp',$hp->jenis_hp),
			'tgl_produksi'	=>set_value('tgl_produksi',$hp->tgl_produksi),
			'os'		=>set_value('os',$hp->os),
			'jumlah_stock'		=>set_value('jumlah_stock',$hp->jumlah_stock),
			'harga'		=>set_value('harga',$hp->harga),
			'button'	=>'Edit',
			'action'	=>site_url('hp_1086/edit_aksi')
		);
		$this->load->view('hp_1086/hp_form', $data);
	}

	function edit_aksi(){
		$data=array(
			'merk_hp'=>$this->input->post('merk_hp'),
			'jenis_hp'=>$this->input->post('jenis_hp'),
			'tgl_produksi'=>$this->input->post('tgl_produksi'),
			'os'=>$this->input->post('os'),
			'jumlah_stock'=>$this->input->post('jumlah_stock'),
			'harga'=>$this->input->post('harga'),
		);
		$id=$this->input->post('id');
		$this->hp_model->edit_data($id, $data);
		redirect(site_url('hp_1086'));
	}
}
 ?>