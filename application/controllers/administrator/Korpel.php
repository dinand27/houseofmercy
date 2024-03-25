<?php
class Korpel extends CI_Controller
{
    public function index()
    {
        $data['korpel']= $this->Komsel_model->tampil_data('korpel')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/kordinator_pelayanan', $data);
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

    public function detail($id)
     {
         $data['detail']= $this->Komsel_model->detail_korpel($id);
         $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('administrator/perorangan_detail', $data);
         $this->load->view('templates_administrator/footer');
     }


}
?>
