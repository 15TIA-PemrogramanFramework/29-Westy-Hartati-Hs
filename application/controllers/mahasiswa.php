<?php 
/**
* 
*/
class mahasiswa extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_model');

		if(!$this->session->userdata('logined') && $this->session->userdata('logined') == true)
		{
			redirect('/');
		}
	}
	function index(){
		//print_r($this->mahasiswa_model->ambil_data());
		//data dibawah adalah nama array, mahasiswa isi array data. hanya bisa mengirimkan 1 array data
		$data['mahasiswa']=$this->mahasiswa_model->ambil_data();
		$this->load->view('mahasiswa/mahasiswa_list',$data);
	}
	function tambah(){
		$data=array(
			'nama'=>set_value('nama'),
			'prodi'=>set_value('prodi'),
			'daerah'=>set_value('daerah'),
			'id'=>set_value('id'),
			'button'=>'Tambah',
			'action'=>site_url('mahasiswa/tambah_aksi')
		);
		$this->load->view('mahasiswa/mahasiswa_form', $data);
	}

	function tambah_aksi()
	{
		$data=array(
			'nama'=>$this->input->post('nama'),
			'prodi'=>$this->input->post('prodi'),
			'daerah'=>$this->input->post('daerah'),
		);
		$this->mahasiswa_model->tambah_data($data);
		//untuk kembali ke halaman mahasiswa
		redirect(site_url('mahasiswa'));
	}
	function delete($id){
		$this->mahasiswa_model->hapus_data($id);
		redirect(site_url('mahasiswa'));
	}

	function edit($id){
		//print_r($this->mahasiswa_model->ambil_data_id($id));
		$mhs=$this->mahasiswa_model->ambil_data_id($id);
		$data=array(
			'nama'		=>set_value('nama',$mhs->nama),
			'prodi'		=>set_value('prodi',$mhs->prodi),
			'daerah'	=>set_value('daerah',$mhs->daerah),
			'id'		=>set_value('id',$mhs->id),
			'button'	=>'Edit',
			'action'	=>site_url('mahasiswa/edit_aksi')
		);
		$this->load->view('mahasiswa/mahasiswa_form', $data);
		//'nama' yg kuning itu yg dipanggil di function.
	}

	function edit_aksi(){
		$data=array(
			'nama'=>$this->input->post('nama'),
			'prodi'=>$this->input->post('prodi'),
			'daerah'=>$this->input->post('daerah'),
		);
		$id=$this->input->post('id');
		$this->mahasiswa_model->edit_data($id, $data);
		redirect(site_url('mahasiswa'));
	}
}
 ?>