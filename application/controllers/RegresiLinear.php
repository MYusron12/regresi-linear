<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegresiLinear extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Regresi_model', 'model');
  }

  public function index()
  {
    $data['regresi'] = $this->db->get('regresi_linear')->result_array();
    $data['countid'] = $this->model->countId();
    $data['sumx'] = $this->model->sumx();
    $data['sumy'] = $this->model->sumy();
    $this->load->view('regresilinear/index', $data);
  }
  public function tambah()
  {
    $index = $this->input->post('index');
    $x = $this->input->post('x');
    $y = $this->input->post('y');
    $this->db->insert('regresi_linear', [
      'index' => $index,
      'x' => $x,
      'y' => $y
    ]);
    $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert"> Berhasil menambah data! </div>');
    redirect('regresilinear/index');
  }
  public function editVariable($id)
  {
    # code...
  }
  public function hapusVariable($id)
  {
    $this->db->delete('regresi_linear', ['id' => $id]);
    redirect('regresilinear');
  }

  public function kmeans()
  {
    // $data['kmeans'] = $this->db->get('kmeans')->result_array();
    $this->load->view('regresilinear/kmeans');
  }
}
