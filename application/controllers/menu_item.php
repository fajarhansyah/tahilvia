<?php

class Menu_item extends CI_Controller {

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
		$data['menuitem'] = $this->model_menu_item->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('menu_item', $data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_item()
  {
    $nama = $this->input->post('nama');
    $gambar = $_FILES['gambar']['name'];
    $satuan = $this->input->post('satuan');
    $harga = $this->input->post('harga');

    if($gambar =''){}else{
      $config['upload_path'] = './uploads';
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('gambar')) {
        echo "Gambar Gagal Upload !";
      }else {
        $gambar=$this->upload->data('file_name');
      }
    }
    $data = array(
      'nama'         => $nama,
      'gambar'       => $gambar,
      'satuan'       => $satuan,
      'harga'        => $harga

    );
    $this->model_menu_item->tambah_portofolio($data, 'menu_item');
    redirect('menu_item/index');
  }
  public function edit($id){
    $where = array('id' => $id );
    $data['menuitem'] = $this->model_menu_item->edit_portofolio($where,'menu_item')->result();
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('edit_menu_item', $data);
    $this->load->view('templates_admin/footer');
  }
  public function update(){
    $id       	= $this->input->post('id');
    $nama       = $this->input->post('nama');
    $satuan 	= $this->input->post('satuan');
    $harga 		= $this->input->post('harga');
    $gambar 	= $_FILES['gambar']['name'];
    if($gambar =''){
    }else{
      $config['upload_path'] = './uploads';
      $config['allowed_types'] = '*';

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('gambar')) {
        echo "Gambar Gagal Upload !";
      }else {
        $gambar=$this->upload->data('file_name');
      }
    }
    $data = array(
      'nama'  			=> $nama,
      'gambar'          => $gambar,
      'harga'       	=> $harga,
      'satuan'          => $satuan
    );
    $where = array('id' => $id
    );
    $this->model_menu_item->update_portofolio($where,$data,'menu_item');
    redirect('menu_item/index');
  }
  public function hapus($id){
    $where = array('id' => $id );
    $this->model_menu_item->hapus_portofolio($where, 'menu_item');
    redirect('menu_item/index');
  }

	
}
