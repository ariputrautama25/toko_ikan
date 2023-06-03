<?php
class Ikan extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('ikan_model');
  }

  public function daftar()
  {
    $data['ikan'] = $this->ikan_model->get_ikan();
    $this->load->view('templates/header');
    $this->load->view('ikan/daftar', $data);
    $this->load->view('templates/footer');
  }

  public function detail($id)
  {
    $data['ikan'] = $this->ikan_model->get_detail_ikan($id);
    $this->load->view('templates/header');
    $this->load->view('ikan/detail', $data);
    $this->load->view('templates/footer');
  }
}
