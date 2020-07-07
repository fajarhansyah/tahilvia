<?php
class Model_menu_item extends CI_Model{
  public function tampil_data(){
    return $this->db->get('menu_item');
  }
  public function tambah_portofolio($data,$tables){
      $this->db->insert($tables,$data);
  }
  public function edit_portofolio($where,$tables){
    return $this->db->get_where($tables,$where);
  }
  public function update_portofolio($where,$data,$tables){
      $this->db->where($where);
      $this->db->update($tables,$data);
  }
  public function hapus_portofolio($where,$tables){
    $this->db->where($where);
    $this->db->delete($tables);
  }
  public function detail_portofolio($id_portofolio,$result){
    $result = $this->db->where('id', $id_portofolio)->get('menu_item');
    if ($result->num_rows() > 0) {
      return $result->result();
    }else {
      return false;
    }
  }
}
 ?>
