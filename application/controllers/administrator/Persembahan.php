<?php 
class Persembahan extends CI_Controller
{
    public function index()
		{
			$data['persembahan']= $this->Persembahan_model->tampil_data('persembahan')->result();
			$this->load->view('templates_administrator/header');
			$this->load->view('templates_administrator/sidebar');
			$this->load->view('administrator/persembahan', $data);
			$this->load->view('templates_administrator/footer');
		}

 public function tambah_persembahan(){
        $data['persembahan']= $this->Persembahan_model->tampil_data('persembahan')->result();
		$data['sektor']= $this->Kepalakeluarga_model->tampil_data_sektor('sektor')->result();
		$data['kepala_keluarga']= $this->Kepalakeluarga_model->tampil_data('kepala_keluarga')->result();
		$data['ibadah']= $this->Ibadah_model->tampil_data('jenis_ibadah')->result();
        $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('administrator/persembahan_form', $data);
         $this->load->view('templates_administrator/footer');
     }


	 public function detail($id)
    {
        $data['detail']= $this->Persembahan_model->ambil_id_persembahan($id);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/persembahan_detail', $data);
        $this->load->view('templates_administrator/footer');
    }

	public function cetak_detail($id)
    {
        $data['detail']= $this->Persembahan_model->ambil_id_persembahan($id);
        $this->load->view('templates_administrator/header');
        $this->load->view('administrator/persembahan_cetak', $data);

    }



    public function tambah_persembahan_aksi()
    {
    	 $this->_rules();
        if($this->form_validation->run()== FALSE){
            $this->tambah_persembahan();
        } else {
			$tgl_persembahan	= $this->input->post('tgl_persembahan');
			$pukul				= $this->input->post('pukul');
			$konpokator			= $this->input->post('konpokator');
			$hadir_laki			= $this->input->post('hadir_laki');
			$hadir_perempuan	= $this->input->post('hadir_perempuan');
			$ayat				= $this->input->post('ayat');
			$pundi1				= $this->input->post('pundi1');
			$pundi2				= $this->input->post('pundi2');
			$pundi3				= $this->input->post('pundi3');
			$pundi4				= $this->input->post('pundi4');
			$lelang				= $this->input->post('lelang');
			$psb 				= $this->input->post('psb');
			$psp 				= $this->input->post('psp');
			$pers_babtisan		= $this->input->post('pers_babtisan');
			$pers_sidi			= $this->input->post('pers_sidi');
			$pers_nikah			= $this->input->post('pers_nikah');
			$pers_hut			= $this->input->post('pers_hut');
			$pers_perjamuankudus= $this->input->post('pers_perjamuankudus');
			$pers_keluarga		= $this->input->post('pers_keluarga');
			$perpuluhan			= $this->input->post('perpuluhan');
			$kotak_mutasipendeta= $this->input->post('kotak_mutasipendeta');
			$pundi_khusus		= $this->input->post('pundi_khusus');
			$amplop_pembangunan	= $this->input->post('amplop_pembangunan');
			$amplop_diakonia	= $this->input->post('amplop_diakonia');
			$aksi_pangiu		= $this->input->post('aksi_pangiu');
			$amplop_lain		= $this->input->post('amplop_lain');
			$pelayan_firman		= $this->input->post('pelayan_firman');
			$notulis			= $this->input->post('notulis');
			$sektor				= $this->input->post('sektor');
			$kk					= $this->input->post('kk');
			$jenis_kebaktian	= $this->input->post('jenis_kebaktian');




            $data= array(
				'tgl_persembahan'   => $tgl_persembahan,
				'pukul'   			=> $pukul,
				'konpokator'   		=> $konpokator,
				'hadir_laki'   		=> $hadir_laki,
				'hadir_perempuan'   => $hadir_perempuan,
				'ayat'   			=> $ayat,
				'pundi1'   			=> $pundi1,
				'pundi2'   			=> $pundi2,
				'pundi3'   			=> $pundi3,
				'pundi4'   			=> $pundi4,
				'lelang'   			=> $lelang,
				'psb'   			=> $psb,
				'psp'   			=> $psp,
				'pers_babtisan'   	=> $pers_babtisan,
				'pers_sidi'   		=> $pers_sidi,
				'pers_nikah'   		=> $pers_nikah,
				'pers_hut'   		=> $pers_hut,
				'pers_perjamuankudus'   => $pers_perjamuankudus,
				'pers_keluarga'   	=> $pers_keluarga,
				'perpuluhan'   		=> $perpuluhan,
				'kotak_mutasipendeta' => $kotak_mutasipendeta,
				'pundi_khusus'   	=> $pundi_khusus,
				'amplop_pembangunan' => $amplop_pembangunan,
				'amplop_diakonia'   => $amplop_diakonia,
				'aksi_pangiu'   	=> $aksi_pangiu,
				'amplop_lain'   	=> $amplop_lain,
				'pelayan_firman'   	=> $pelayan_firman,
				'notulis'   		=> $notulis,
				'sektor'   			=> $sektor,
				'kk'   				=> $kk,
				'jenis_kebaktian'   => $jenis_kebaktian,

			

            );

            $this->Persembahan_model->insert_data($data, 'persembahan');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Persembahan Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
		  
            redirect('administrator/Persembahan');
        }
    }

    public function _rules(){
		$this->form_validation->set_rules('tgl_persembahan','tgl_persembahan', 'required',['required'=> 'Tanggal Wajib diisi']);
		$this->form_validation->set_rules('pelayan_firman','pelayan_firman', 'required',['required'=> 'Pelayan Firman Wajib diisi']);
	/*	$this->form_validation->set_rules('tmpt_lahir','tmpt_lahir', 'required',['required'=> 'Tempat lahir Wajib diisi']);
		$this->form_validation->set_rules('jenkel','jenkel', 'required',['required'=> 'Gender Wajib diisi']);
		$this->form_validation->set_rules('status','status', 'required',['required'=> 'status Wajib diisi']);
		$this->form_validation->set_rules('tgl_lahir','tgl_lahir', 'required',['required'=> 'Status Wajib diisi']);
		$this->form_validation->set_rules('nama_panggilan','no_identitas', 'required',['required'=> 'nama_panggilan Wajib diisi']);
		$this->form_validation->set_rules('peran_keluarga','peran_keluarga', 'required',['required'=> 'peran_keluarga Wajib diisi']);
		$this->form_validation->set_rules('no_kk','no_kk', 'required',['required'=> 'no_kk Wajib diisi']);
		$this->form_validation->set_rules('gol_darah','gol_darah', 'required',['required'=> 'gol_darah Wajib diisi']);
		$this->form_validation->set_rules('status_nikah','status_nikah', 'required',['required'=> 'status_nikah Wajib diisi']);
		$this->form_validation->set_rules('pekerjaan','pekerjaan', 'required',['required'=> 'Pekerjaan Wajib diisi']);
		$this->form_validation->set_rules('foto','foto', 'required',['required'=> 'foto Wajib diisi']);
		$this->form_validation->set_rules('alamat','alamat', 'required',['required'=> 'alamat Wajib diisi']);
		$this->form_validation->set_rules('negara','negara', 'required',['required'=> 'negara Wajib diisi']);
		$this->form_validation->set_rules('provinsi','provinsi', 'required',['required'=> 'provinsi Wajib diisi']);
		$this->form_validation->set_rules('kota','kota', 'required',['required'=> 'kota Wajib diisi']);
		$this->form_validation->set_rules('kecamatan','kecamatan', 'required',['required'=> 'kecamatan Wajib diisi']);
		$this->form_validation->set_rules('kelurahan','kelurahan', 'required',['required'=> 'kelurahan Wajib diisi']);
		$this->form_validation->set_rules('area','area', 'required',['required'=> 'area Wajib diisi']);
		$this->form_validation->set_rules('telp','telp', 'required',['required'=> 'telp Wajib diisi']);
		$this->form_validation->set_rules('no_wa','no_wa', 'required',['required'=> 'no_wa Wajib diisi']);
		$this->form_validation->set_rules('email','email', 'required',['required'=> 'email Wajib diisi']);

*/
       }


	   public function update($id)
	   {
		   $where= array('id_persembahan' => $id);
		   $data['kebaktian']= $this->Persembahan_model->tampil_data('jenis_ibadah')->result();
			$data['persembahan']= $this->Persembahan_model->edit_data($where,'persembahan')->result();
		   $this->load->view('templates_administrator/header');
			$this->load->view('templates_administrator/sidebar');
			$this->load->view('administrator/persembahan_update', $data);
			$this->load->view('templates_administrator/footer');
	   }
   
	   public function update_aksi(){
			$id					= $this->input->post('id_persembahan');
			$tgl_persembahan	= $this->input->post('tgl_persembahan');
			$pukul				= $this->input->post('pukul');
			$konpokator			= $this->input->post('konpokator');
			$hadir_laki			= $this->input->post('hadir_laki');
			$hadir_perempuan	= $this->input->post('hadir_perempuan');
			$ayat				= $this->input->post('ayat');
			$pundi1				= $this->input->post('pundi1');
			$pundi2				= $this->input->post('pundi2');
			$pundi3				= $this->input->post('pundi3');
			$pundi4				= $this->input->post('pundi4');
			$psb 				= $this->input->post('psb');
			$psp 				= $this->input->post('psp');
			$pers_babtisan		= $this->input->post('pers_babtisan');
			$pers_sidi			= $this->input->post('pers_sidi');
			$pers_nikah			= $this->input->post('pers_nikah');
			$pers_hut			= $this->input->post('pers_hut');
			$pers_perjamuankudus= $this->input->post('pers_perjamuankudus');
			$pers_keluarga		= $this->input->post('pers_keluarga');
			$perpuluhan			= $this->input->post('perpuluhan');
			$kotak_mutasipendeta= $this->input->post('kotak_mutasipendeta');
			$pundi_khusus		= $this->input->post('pundi_khusus');
			$amplop_pembangunan	= $this->input->post('amplop_pembangunan');
			$amplop_diakonia	= $this->input->post('amplop_diakonia');
			$aksi_pangiu		= $this->input->post('aksi_pangiu');
			$amplop_lain		= $this->input->post('amplop_lain');
			$pelayan_firman		= $this->input->post('pelayan_firman');
			$notulis			= $this->input->post('notulis');
			$sektor				= $this->input->post('sektor');
			$kk					= $this->input->post('kk');
			$jenis_kebaktian	= $this->input->post('jenis_kebaktian');
			$lelang	= $this->input->post('lelang');

		   $data= array(
			'tgl_persembahan'   	=> $tgl_persembahan,
				'pukul'   			=> $pukul,
				'konpokator'   		=> $konpokator,
				'hadir_laki'   		=> $hadir_laki,
				'hadir_perempuan'   => $hadir_perempuan,
				'ayat'   			=> $ayat,
				'pundi1'   			=> $pundi1,
				'pundi2'   			=> $pundi2,
				'pundi3'   			=> $pundi3,
				'pundi4'   			=> $pundi4,
				'psb'   			=> $psb,
				'psp'   			=> $psp,
				'pers_babtisan'   	=> $pers_babtisan,
				'pers_sidi'   		=> $pers_sidi,
				'pers_nikah'   		=> $pers_nikah,
				'pers_hut'   		=> $pers_hut,
				'pers_perjamuankudus'   => $pers_perjamuankudus,
				'pers_keluarga'   	=> $pers_keluarga,
				'perpuluhan'   		=> $perpuluhan,
				'kotak_mutasipendeta' => $kotak_mutasipendeta,
				'pundi_khusus'   	=> $pundi_khusus,
				'amplop_pembangunan' => $amplop_pembangunan,
				'amplop_diakonia'   => $amplop_diakonia,
				'aksi_pangiu'   	=> $aksi_pangiu,
				'amplop_lain'   	=> $amplop_lain,
				'pelayan_firman'   	=> $pelayan_firman,
				'notulis'   		=> $notulis,
				'sektor'   			=> $sektor,
				'kk'   				=> $kk,
				'jenis_kebaktian'   => $jenis_kebaktian,
				'lelang'   			=> $lelang
			 );
			   $where = array( 
			   'id_persembahan' => $id
		   );
		   $this->Persembahan_model->update_data($where, $data,'persembahan');
		   $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			   Data Persembahan Berhasil DIUPDATE!
			   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			   <span aria-hidden="true">&times;</span>
			   </button>
		   </div>');
		   redirect('administrator/Persembahan');
	   }
   
	   
	   public function cetak(){
        $data['persembahan']= $this->Persembahan_model->tampil_data('persembahan')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('administrator/preview_persembahan', $data);
    }



}
?>