<?php
class Pemesanan extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('pemesanan_model');
  }

  public function proses()
  {
    // Kode untuk memproses pemesanan ikan
  }
}
