<?php 
class Datatable extends CI_Controller
{
    public function index(){
      $data['perorangan']= $this->perorangan_model->tampil_data('data_perorangan')->result();
      $this->load->view('templates_administrator/header');
      $this->load->view('templates_administrator/sidebar');
      $this->load->view('tables',$data);	
      $this->load->view('templates_administrator/footer');


    }

    
}

?>