<?php
error_reporting(0);
class Registrasi extends CI_Controller
{
  public function index()
  {
    $this->form_validation->set_rules('nama', ' Nama', 'required', [
      'required' => 'Nama Wajib Diisi!'
    ]);
    $this->form_validation->set_rules('username', ' Username', 'required', [
      'required' => 'Email Wajib Diisi!'
    ]);
    $this->form_validation->set_rules('no_telp', ' Nomor Telfon', 'required', [
      'required' => 'Nomer Telfon Wajib Diisi!'
    ]);
    $this->form_validation->set_rules('password_1', ' Password', 'required|matches[password_2]', [
      'required' => 'Password Wajib Diisi!',
      'matches' => 'Password Tidak Cocok!'

    ]);
    $this->form_validation->set_rules('password_2', ' Password', 'required|matches[password_1]');
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates_admin2/header');
      $this->load->view('registrasi');
      $this->load->view('templates_admin2/footer');
    } else {
      $data = array(
        'id'    => '',
        'nama'  =>  $this->input->post('nama'),
        'username'  =>  $this->input->post('username'),
        'no_telp'  =>  $this->input->post('no_telp'),
        'password'  =>  $this->input->post('password_1'),
        'role_id'  =>  2,
      );
      $this->db->insert('tb_user', $data);
      redirect('auth/login');
    }
  }
}

?>