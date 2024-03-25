<?php  
class Laporanpersembahan extends CI_Controller
{
    public function index(){

        $data['persembahan']= $this->Persembahan_model->tampil_data('persembahan');
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/laporanpersembahan',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function cari(){
		$this->load->model('Persembahan_model');
		$keyword = $this->input->get('keyword');
		$data = $this->persembahan_model->ambil_data($keyword);
		$data = array(
			'keyword'	=> $keyword,
			'data'		=> $data
		);
		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/laporanpersembahan_tampil',$data);
        $this->load->view('templates_administrator/footer');
	}

    public function tambah_persembahan(){
        $data['persembahan']= $this->Persembahan_model->tampil_data('persembahan');
        $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('administrator/kepala_keluarga_form', $data);
         $this->load->view('templates_administrator/footer');
     }

}
?>