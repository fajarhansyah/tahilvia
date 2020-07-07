<?php
class Model_pemesanan_admin extends CI_Model{
  public function tampil_data(){
    return $this->db->get('tbl_transaksi');
  }
  public function edit_rekap_data($where,$tables){
    return $this->db->get_where($tables,$where);
  }
  public function update_rekap_data($where,$data,$tables){
      $this->db->where($where);
      $this->db->update($tables,$data);
  }
}
 ?>