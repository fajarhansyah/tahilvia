<?php

class Menyiapkan_pemesanan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') != '1'){
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
	$query_pemesanan = $this->db->query("SELECT tbl_transaksi.*, menu_tambahan.tidak_ada, menu_tambahan.noda_makanan, menu_tambahan.noda_minyak, menu_tambahan.noda_hewan, menu_tambahan.lainnya FROM tbl_transaksi LEFT JOIN menu_tambahan on tbl_transaksi.id = menu_tambahan.id_transaksi WHERE status LIKE 'setuju'");
	$data['pemesanan'] = $query_pemesanan->result_array();
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
	$this->load->view('menyiapkan_pemesanan',$data);
    $this->load->view('templates_admin/footer');
	}
	public function update($id)
  {
    $data = array(
      'progres'            => 'Selesai'

    );
    $where = array('id' => $id
    );
    $this->db->update('tbl_transaksi', $data,$where);
   
    redirect('menyiapkan_pemesanan');
  }
}
