<?php 
class Anggotajemaat extends CI_Controller
{
    public function index(){

        $data['kepala_keluarga']= $this->Kepalakeluarga_model->tampil_data('kepala_keluarga')->result();
        $data['anggota_keluarga']= $this->Kepalakeluarga_model->tampil_data('anggota_keluarga')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/jemaat',$data);
        $this->load->view('templates_administrator/footer');
    }

    
}
?>

