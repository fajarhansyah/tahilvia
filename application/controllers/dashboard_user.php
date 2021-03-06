<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_user extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') != '2'){
		  $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Anda Belum Login
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('auth/login');
		}
	  }
	public function index()
	{
    $this->load->view('templates/header');
	$this->load->view('dashboard_user');
    $this->load->view('templates/footer');

	}
	public function data_pemesanan($nama)
	{
	$query_pemesanan = $this->db->query("SELECT tbl_transaksi.*, menu_tambahan.tidak_ada, menu_tambahan.noda_makanan, menu_tambahan.noda_minyak, menu_tambahan.noda_hewan, menu_tambahan.lainnya FROM tbl_transaksi LEFT JOIN menu_tambahan on tbl_transaksi.id = menu_tambahan.id_transaksi WHERE status LIKE '' && nama='$nama'");
	$data['pemesanan'] = $query_pemesanan->result_array();
	$this->load->view('data_pesanan',$data);

	}
	public function edit($id){
		$where = array('id' => $id );
		$data['pemesanan'] = $this->model_pemesanan_admin->edit_rekap_data($where,'tbl_transaksi')->result();
		$this->load->view('data_pesanan',$data);
	  }
	public function delete($id)
	{
	$query_pemesanan = $this->db->query("DELETE FROM `db_hilvia`.`tbl_transaksi` WHERE `tbl_transaksi`.`id` = $id");
	redirect('dashboard_user/data_pemesanan/'.$this->session->userdata('nama'));

	}
}
