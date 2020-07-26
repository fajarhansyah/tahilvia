<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_halaman_rating extends CI_Controller {
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
        $query_pemesanan = $this->db->query("SELECT * FROM rating ");
	    $data['rating'] = $query_pemesanan->result_array();
        $this->load->view('templates/header');
        $this->load->view('halaman_rating',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $this->load->view('templates/header');
        $this->load->view('add-halaman_rating');
        $this->load->view('templates/footer');
    }
    public function tambah_aksi()
    {
        $rating = $this->input->post('rating');
        $nama = $this->input->post('nama');
        $deksripsi = $this->input->post('deskripsi');
    
        $data = array(
        'nama'         => $nama,
        'deskripsi'       => $deksripsi,
        'rating'       => $rating

        );
        $this->db->insert('rating', $data);
        redirect('c_halaman_rating');
    }
    
}
