<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        $this->load->model('barang_model');
        $this->load->model('karyawan_model');
        $this->load->model('beli_model');
        $this->load->model('customer_model');
        $this->load->model('toko_model');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }

    }

    public function index()
    {
        $data['barang'] = $this->barang_model->ambil_data_barang();
		$this->load->view('barang', $data);
    }
    public function index_owner()
    {
        $data['barang'] = $this->barang_model->ambil_data_barang();
        $this->load->view('owner/barang', $data);
    }

    public function karyawan()
    {
        $data['karyawan'] = $this->karyawan_model->ambil_data_karyawan();
        $this->load->view('karyawan', $data);
    }

    public function beli()
    {
        $data['customer'] = $this->customer_model->ambil_data_customer();
        $data['karyawan'] = $this->karyawan_model->ambil_data_karyawan();
        $data['barang'] = $this->barang_model->ambil_data_barang();
        $data['beli'] = $this->beli_model->ambil_data_beli();
        $this->load->view('beli', $data);
    }

    public function customer()
    {
        $data['customer'] = $this->customer_model->ambil_data_customer();
        $this->load->view('customer', $data);
    }

    public function toko()
    {
        $data['toko'] = $this->toko_model->ambil_data_toko();
        $this->load->view('toko', $data);
    }

    public function karyawan_owner()
    {
        $data['karyawan'] = $this->karyawan_model->ambil_data_karyawan();
        $this->load->view('owner/karyawan', $data);
    }

    public function beli_owner()
    {
        $data['customer'] = $this->customer_model->ambil_data_customer();
        $data['karyawan'] = $this->karyawan_model->ambil_data_karyawan();
        $data['barang'] = $this->barang_model->ambil_data_barang();
        $data['beli'] = $this->beli_model->ambil_data_beli();
        $this->load->view('owner/beli', $data);
    }

    public function customer_owner()
    {
        $data['customer'] = $this->customer_model->ambil_data_customer();
        $this->load->view('owner/customer', $data);
    }

    public function toko_owner()
    {
        $data['toko'] = $this->toko_model->ambil_data_toko();
        $this->load->view('owner/toko', $data);
    }

    function tambah_data_barang()
    {
        $data = array(
            'nama_barang' => set_value('nama_barang'),
            'brand' => set_value('brand'),
            'action' => site_url('home/tambah_data_barang_aksi')
            );
        $this->load->view('barang_form', $data);
    }

    function tambah_data_barang_aksi()
    {
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'brand' => $this->input->post('brand'),
            );
        $this->barang_model->tambah_data_barang($data);
        redirect(site_url('home/index'));
    }

    function tambah_data_karyawan()
    {
        $data = array(
            'id_karyawan' => set_value('id_karyawan'),
            'nama_karyawan' => set_value('nama_karyawan'),
            'password' => set_value('password'),
            'toko'=> $this->toko_model->ambil_data_toko(),
            'action' => site_url('home/tambah_data_karyawan_aksi')
            );
        $this->load->view('karyawan_form', $data);
    }

    function tambah_data_karyawan_aksi()
    {
        $data = array(
            'id_karyawan' => $this->input->post('id_karyawan'),
            'nama_karyawan' => $this->input->post('nama_karyawan'),
            'password' => $this->input->post('password'),
            'id_toko' => $this->input->post('id_toko'),
            );
        $this->karyawan_model->tambah_data_karyawan($data);
        redirect(site_url('home/karyawan'));
    }

    function tambah_data_beli()
    {
        $data = array(
            'id_beli' => set_value('id_beli'),
            'id_barang' => set_value('id_barang'),
            'id_customer' => set_value('id_customer'),
            'id_karyawan' => set_value('id_karyawan'),
            'jumlah_barang' => set_value('jumlah_barang'),
            'tanggal_beli' => set_value('tanggal_beli'),
            'karyawan' => $this->karyawan_model->ambil_data_karyawan(),
            'barang'=> $this->barang_model->ambil_data_barang(),
            'customer'=>$this->customer_model->ambil_data_customer(),

            'action' => site_url('home/tambah_data_beli_aksi')
            );
        $this->load->view('beli_form', $data);
    }

    function tambah_data_beli_aksi()
    {
        $data = array(
            'id_beli' => $this->input->post('id_beli'),
            'id_barang' => $this->input->post('id_barang'),
            'id_customer' => $this->input->post('id_customer'),
            'id_karyawan' => $this->input->post('id_karyawan'),
            'jumlah_barang' => $this->input->post('jumlah_barang'),
            'tanggal_beli' => $this->input->post('tanggal_beli'),
            );
        $this->beli_model->tambah_data_beli($data);
        redirect(site_url('home/beli'));
    }

    function tambah_data_customer()
    {
        $data = array(
            'id_customer' => set_value('id_customer'),
            'nama_customer' => set_value('nama_customer'),
            'alamat_customer' => set_value('alamat_customer'),
            'action' => site_url('home/tambah_data_customer_aksi')
            );
        $this->load->view('customer_form', $data);
    }

    function tambah_data_customer_aksi()
    {
        $data = array(
            'id_customer' => $this->input->post('id_customer'),
            'nama_customer' => $this->input->post('nama_customer'),
            'alamat_customer' => $this->input->post('alamat_customer'),
            );
        $this->customer_model->tambah_data_customer($data);
        redirect(site_url('home/customer'));
    }

    function tambah_data_toko()
    {
        $data = array(
            'id_toko' => set_value('id_toko'),
            'nama_toko' => set_value('nama_toko'),
            'alamat_toko' => set_value('alamat_toko'),
            'action' => site_url('home/tambah_data_toko_aksi')
            );
        $this->load->view('toko_form', $data);
    }

    function tambah_data_toko_aksi()
    {
        $data = array(
            'id_toko' => $this->input->post('id_toko'),
            'nama_toko' => $this->input->post('nama_toko'),
            'alamat_toko' => $this->input->post('alamat_toko'),
            );
        $this->toko_model->tambah_data_toko($data);
        redirect(site_url('home/toko'));
    }

    function hapus_barang($id)
    {
        $this->barang_model->hapus_barang($id);
        redirect(site_url('home/index'));
    }

    function hapus_karyawan($id)
    {
        $this->karyawan_model->hapus_karyawan($id);
        redirect(site_url('home/karyawan'));
    }

    function hapus_beli($id)
    {
        $this->beli_model->hapus_beli($id);
        redirect(site_url('home/beli'));
    }

    function hapus_customer($id)
    {
        $this->customer_model->hapus_customer($id);
        redirect(site_url('home/customer'));
    }

    function hapus_toko($id)
    {
        $this->toko_model->hapus_toko($id);
        redirect(site_url('home/toko'));
    }

    public function beli_edit($id)
    {
       
        $beli = $this->beli_model->select_beli($id);
       $data = array(
            'id_beli' => set_value('id_beli',$beli->id_beli),
            'id_barang' => set_value('id_barang',$beli->id_barang),
            'id_customer' => set_value('id_customer',$beli->id_customer),
            'id_karyawan' => set_value('id_karyawan',$beli->id_karyawan),
            'jumlah_barang' => set_value('jumlah_barang',$beli->jumlah_barang),
            'tanggal_beli' => set_value('tanggal_beli',$beli->tanggal_beli),


            'barang' => $this->barang_model->ambil_data_barang(),
            'customer' => $this->customer_model->ambil_data_customer(),
            'karyawan' => $this->karyawan_model->ambil_data_karyawan(),

            'action' => site_url('home/beli_edit_aksi')
            );
        
        $this->load->view('beli_edit',$data);
        
    } 

    function beli_edit_aksi() 
    {
       
        $data = array(
         
            
            'id_barang' => $this->input->post('id_barang'),
            'id_customer' => $this->input->post('id_customer'),
            'id_karyawan' => $this->input->post('id_karyawan'),
            'jumlah_barang' => $this->input->post('jumlah_barang'),
           
            'tanggal_beli' => $this->input->post('tanggal_beli'),
            );
        $bl =  $this->input->post('id_beli');
        $this->beli_model->edit_data_beli($bl,$data);
        redirect(site_url('home/beli'));

    }

    public function barang_edit($id)
    {
       
        $barang = $this->barang_model->select_barang($id);
       $data = array(
            'nama_barang' => set_value('nama_barang',$barang->nama_barang),
            'brand' => set_value('brand',$barang->brand),
            'id_barang'=> set_value('id_barang', $barang->id_barang),

            'action' => site_url('home/barang_edit_aksi')
            );
        
        $this->load->view('barang_edit',$data);
        
    } 

    function barang_edit_aksi() 
    {  
        $data = array(
         
            'nama_barang' => $this->input->post('nama_barang'),
            'brand' => $this->input->post('brand'),
        );

        $brg =  $this->input->post('id_barang');
        $this->barang_model->edit_data_barang($brg,$data);
        redirect(site_url('home/index'));

    }

    public function karyawan_edit($id)
    {
       
        $karyawan = $this->karyawan_model->select_karyawan($id);
        $data = array(
            'id_karyawan' => set_value('id_karyawan', $karyawan->id_karyawan),
            'nama_karyawan' => set_value('nama_karyawan',$karyawan->nama_karyawan),
            'password' => set_value('password',$karyawan->password),
            'toko' => $this->toko_model->ambil_data_toko(),

            'action' => site_url('home/karyawan_edit_aksi')
            );
        
        $this->load->view('karyawan_edit',$data);
        
    } 

    function karyawan_edit_aksi() 
    {  
        $data = array(
         
            'id_karyawan' => $this->input->post('id_karyawan'),
            'nama_karyawan' => $this->input->post('nama_karyawan'),
            'password' => $this->input->post('password'),
            'id_toko' => $this->input->post('id_toko'),
        );

        $krywn =  $this->input->post('id_karyawan');
        $this->karyawan_model->edit_data_karyawan($krywn,$data);
        redirect(site_url('home/karyawan'));

    }

    public function customer_edit($id)
    {
       
        $customer = $this->customer_model->select_customer($id);
        $data = array(
            'id_customer' => set_value('id_customer', $customer->id_customer),
            'nama_customer' => set_value('nama_customer', $customer->nama_customer),
            'alamat_customer' => set_value('alamat_customer', $customer->alamat_customer),
            'action' => site_url('Home/customer_edit_aksi'),
            );
        
        $this->load->view('customer_edit',$data);
        
    } 

    function customer_edit_aksi() 
    {  
        $data = array(
         
            'id_customer' => $this->input->post('id_customer'),
            'nama_customer' => $this->input->post('nama_customer'),
            'alamat_customer' => $this->input->post('alamat_customer'),
        );

        $cus =  $this->input->post('id_customer');
        $this->customer_model->edit_data_customer($cus,$data);
        redirect(site_url('home/customer'));

    }

    public function toko_edit($id)
    {
       
        $toko = $this->toko_model->select_toko($id);
        $data = array(
            'id_toko' => set_value('id_toko', $toko->id_toko),
            'nama_toko' => set_value('nama_toko',$toko->nama_toko),
            'alamat_toko' => set_value('alamat_toko',$toko->alamat_toko),
            
            'action' => site_url('home/toko_edit_aksi')
            );
        
        $this->load->view('toko_edit',$data);
        
    } 

    function toko_edit_aksi() 
    {  
        $data = array(
         
            'nama_toko' => $this->input->post('nama_toko'),
            'alamat_toko' => $this->input->post('alamat_toko'),
        );

        $tk =  $this->input->post('id_toko');
        $this->toko_model->edit_data_toko($tk,$data);
        redirect(site_url('home/toko'));

    }
}

/* End of file Workflows.php */
/* Location: ./application/controllers/Workflows.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-04-15 00:43:10 */
/* http://harviacode.com */