<?php
class Anggota extends CI_Controller
{
  function index()
  {

    $data['anggota']= $this->User_model->tampil_anggota('perorangan')->result();
    $this->load->view('templates_user/header');
    $this->load->view('templates_user/sidebar');
    $this->load->view('user/anggota');
    $this->load->view('templates_user/footer');
  }

  function detail($id){
      $data['anggota']= $this->User_model->tampil_anggota($id);
      $this->load->view('templates_user/header');
      $this->load->view('templates_user/sidebar');
      $this->load->view('user/detail', $data);
      $this->load->view('templates_user/footer');
  }

  function absensi($id){
    $data['absensi']= $this->User_model->tampil_absensi($id);
    $this->load->view('templates_user/header');
    $this->load->view('templates_user/sidebar');
    $this->load->view('user/absensi', $data);
    $this->load->view('templates_user/footer');
  }





}

 ?>
