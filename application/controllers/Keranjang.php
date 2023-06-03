<?php
class Keranjang extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('keranjang_model');
  }

  public function tampil()
  {
    $data['keranjang'] = $this->keranjang_model->get_keranjang();
    $this->load->view('templates/header');
    $this->load->view('keranjang/tampil', $data);
    $this->load->view('templates/footer');
  }

  public function tambah($id)
  {
    // Kode untuk menambahkan ikan ke keranjang
  }

  public function hapus($id)
  {
    // Kode untuk menghapus ikan dari keranjang
  }
}
