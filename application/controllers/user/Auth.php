<?php
class Auth extends CI_Controller
{
	public function index(){
		$this->load->view('templates_administrator/header');
		$this->load->view('administrator/login');
		$this->load->view('templates_administrator/footer');
	}

	public function proses_login(){
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if($this->form_validation->run()== false) {
			$this->load->view('templates_administrator/header');
			$this->load->view('administrator/login');
			$this->load->view('templates_administrator/footer');
		} else {
			$username	= $this->input->post('username');
			$password	= $this->input->post('password');
			//isi variabel nya
			$user 		= $username;
			$pass 		= MD5($password);
			$cek		= $this->Login_model->cek_login($user,$pass);
			if($cek->num_rows() > 0){
				foreach( $cek->result() as $ck){
					$sess_data['username']= $ck->username;
					$sess_data['id_sessions']= $ck->id_sessions;
					$sess_data['email']=$ck->email;
					$sess_data['level']= $ck->level;
					$sess_data['nama_gereja']= $ck->nama_gereja;
					$this->session->set_userdata($sess_data);
				}
				if($sess_data['level'] == '1'){
					redirect('administrator/dashboard');
				} else if($sess_data['level'] == '2'){
					redirect('user/Dashboard');}
					else {

						$this->session->set_flashdata('pesan','Maaf Username / Password anda salah 1');
						redirect('administrator/auth');
					}
			}
			else {
			 	$this->session->set_flashdata('pesan','Username/Password tidak Ditemukan');
						redirect('administrator/auth');

				}
			}
	}

	public function Logout(){
		$this->session->sess_destroy();
		redirect('user/auth');
	}
}


 ?>
