<?php 
class Wilayah extends CI_Controller
{
    public function index()
    {
        $data['wilayah']= $this->Komsel_model->tampil_data('km_wilayah')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/wilayah', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function komsel($id)
    {
        $data['komsel']= $this->Komsel_model->ambil_id($id);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/komsel', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function komsel_detail($id)
    {
        // $data['anggota_komsel']= $this->Komsel_model->tampil_data('perorangan')->result();
        $data['anggota_komsel']= $this->Komsel_model->ambil_id_anggota($id);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/komsel_detail', $data);
        $this->load->view('templates_administrator/footer');
    }


}
?>