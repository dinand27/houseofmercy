<?php 
class Kebaktian extends CI_Controller
{
    public function index(){
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/kebaktian');
        $this->load->view('templates_administrator/footer');
    }

    
}
?>