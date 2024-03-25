<?php
date_default_timezone_set("Asia/Makassar");
class Dashboard extends CI_Controller
{

	function __construct()

	{
       parent::__construct();
       if(!isset($this->session->userdata['username'])) {
           $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
           <strong>Warning!</strong> Anda belum login
           <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
         </div>');
         redirect('user/auth');
       }
   }

	public function index()
	{

		$data= $this->User_model->ambil_data($this->session->userdata['username']);
		$data= array(
			'username' => $data->username,
			'level'	=> $data->level,
			'id_sessions'=> $data->id_sessions,
			'nama_gereja' => $data->nama_gereja
		);


		$this->load->view('templates_user/header');
		$this->load->view('templates_user/sidebar',$data);
		$this->load->view('user/dashboard', $data);
		$this->load->view('templates_user/footer');
	}


}
