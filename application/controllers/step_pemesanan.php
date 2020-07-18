<?php
class Step_pemesanan extends CI_Controller{
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
  public function index(){
    $data['menuitem'] = $this->model_menu_item->tampil_data()->result();
		$this->load->view('step_pemesanan', $data);
  }
  public function tambah_proses_pemesanan()
  {
    $tidak_ada = $this->input->post('tidak_ada');
    $noda_makanan = $this->input->post('noda_makanan');
    $noda_minyak = $this->input->post('noda_minyak');
    $noda_hewan = $this->input->post('noda_hewan');
    $nodalainya = $this->input->post('nodalainya');
    $nama_unit = $this->input->post('nama_unit');
    $harga_unit = $this->input->post('harga_unit');
    $jumlah_unit = $this->input->post('quant');
    $nama = $this->input->post('nama');
    $id_item = $this->input->post('id_item');
    $no_telp = $this->input->post('no_telp');
    $tanggal = $this->input->post('tanggal');
    $jam = $this->input->post('jam');
    $alamat = $this->input->post('alamat');
    $total = $this->input->post('total');
    
    
    $data2 = array(
      'nama'            => $nama,
      'tanggal'         => $tanggal,
      'no_telp'         => $no_telp,
      'jam'             => $jam,
      'alamat'          => $alamat,
      'total'           => $total

    );
    $this->db->insert('tbl_transaksi', $data2);
    $last_id = $this->db->insert_id();
    

    $total = 0;
    for ($i = 0; $i < count($nama_unit); $i++) {
      if ($jumlah_unit[$i] != 0) {
        $data = array(
          'id_transaksi'  => $last_id,
          'id_item'       => $id_item[$i],
          'nama_unit'     => $nama_unit[$i],
          'harga_unit'    => $harga_unit[$i],
          'jumlah_unit'   => $jumlah_unit[$i]
        );
        $this->db->insert('tbl_transaksi_jasa', $data);
      }
    }
    $data3 = array(
      'id_transaksi'      => $last_id,
      'tidak_ada'         => $tidak_ada,
      'noda_makanan'      => $noda_makanan,
      'noda_minyak'       => $noda_minyak,
      'noda_hewan'        => $noda_hewan,
      'lainnya'           => $nodalainya

    );
    $this->db->insert('menu_tambahan', $data3);
    redirect('dashboard_user/data_pemesanan/'.$this->session->userdata('nama'));
  }
  public function edit($id){
    $data['menuitem'] = $this->model_menu_item->tampil_data()->result();
    $query_pemesanan = $this->db->query("SELECT tbl_transaksi.*, menu_tambahan.id as id_tambahan, menu_tambahan.tidak_ada, menu_tambahan.noda_makanan, menu_tambahan.noda_minyak, menu_tambahan.noda_hewan, menu_tambahan.lainnya FROM tbl_transaksi LEFT JOIN menu_tambahan on tbl_transaksi.id = menu_tambahan.id_transaksi WHERE menu_tambahan.id_transaksi = $id");
    $data['pemesanan'] = $query_pemesanan->result_array();
		$this->load->view('edit-step_pemesanan', $data);
	  }
  public function update()
  {
    $id       	= $this->input->post('id');
    $id_tambahan = $this->input->post('id_tambahan');
    $tidak_ada = $this->input->post('tidak_ada');
    $noda_makanan = $this->input->post('noda_makanan');
    $noda_minyak = $this->input->post('noda_minyak');
    $noda_hewan = $this->input->post('noda_hewan');
    $nodalainya = $this->input->post('nodalainya');
    $id_unit = $this->input->post('id_unit');
    $nama_unit = $this->input->post('nama_unit');
    $harga_unit = $this->input->post('harga_unit');
    $jumlah_unit = $this->input->post('quant');
    $nama = $this->input->post('nama');
    $no_telp = $this->input->post('no_telp');
    $tanggal = $this->input->post('tanggal');
    $jam = $this->input->post('jam');
    $alamat = $this->input->post('alamat');
    $total = $this->input->post('total');
    
    
    $data2 = array(
      'nama'            => $nama,
      'tanggal'         => $tanggal,
      'no_telp'         => $no_telp,
      'jam'             => $jam,
      'alamat'          => $alamat,
      'total'           => $total

    );
    $where = array('id' => $id
    );
    $this->db->update('tbl_transaksi', $data2,$where);
    $total = 0;
    for ($i = 0; $i < count($nama_unit); $i++) {
      if ($jumlah_unit[$i] != 0) {
        $data = array(
          'nama_unit'     => $nama_unit[$i],
          'harga_unit'    => $harga_unit[$i],
          'jumlah_unit'   => $jumlah_unit[$i]
        );
        $this->db->update('tbl_transaksi_jasa', $data, array('id' => $id_unit[$i]));
      }
    }
    $data3 = array(
      'tidak_ada'         => $tidak_ada,
      'noda_makanan'      => $noda_makanan,
      'noda_minyak'       => $noda_minyak,
      'noda_hewan'        => $noda_hewan,
      'lainnya'           => $nodalainya

    );
    $this->db->update('menu_tambahan', $data3, array('id' => $id_tambahan));
    redirect('dashboard_user/data_pemesanan/'.$this->session->userdata('nama'));
  }
  
}
 ?>
