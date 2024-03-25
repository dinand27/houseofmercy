<?php 
class Notifikasi extends CI_Controller
{
    public function index(){
		$data['perorangan']= $this->Perorangan_model->tampil_data('anggota_keluarga')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('tables', $data);
    }
}	

?>