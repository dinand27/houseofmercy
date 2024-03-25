<?php
class Kordinator extends CI_Controller
{
	public function index()
		{
			$data['kordinator']= $this->Kepalakeluarga_model->tampil_data('kordinator')->result();
			$this->load->view('templates_administrator/header');
			$this->load->view('templates_administrator/sidebar');
			$this->load->view('administrator/kepala_keluarga', $data);
			$this->load->view('templates_administrator/footer');
		}

 public function tambah_orang(){
        $data['pekerjaan']= $this->Kepalakeluarga_model->tampil_data_pekerjaan('pekerjaan')->result();
        $data['hobi']= $this->Kepalakeluarga_model->tampil_data_hobi('hobi')->result();
        $data['sektor']= $this->Kepalakeluarga_model->tampil_data_sektor('sektor')->result();

        $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('administrator/kepala_keluarga_form', $data);
         $this->load->view('templates_administrator/footer');
     }


	 public function detail($id)
    {
        $data['detail']= $this->Kepalakeluarga_model->ambil_id_orang($id);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/kepalakeluarga_detail', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function jointable($idk){
        // $data['angkel']=$this->Kepalakeluarga_model->tampil_keluarga($idk);
        $data['detail']= $this->Kepalakeluarga_model->tampil_kepala($idk);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/kepalakel_join', $data);
        $this->load->view('templates_administrator/footer');

    }


    public function tambah_kepalakel_aksi()
    {
    	 $this->_rules();
        if($this->form_validation->run()== FALSE){
            $this->tambah_orang();
        } else {
            $nomor_kaj			= $this->input->post('nomor_kaj');
            $nik			= $this->input->post('nik');
			$nama		        = $this->input->post('nama');
            $nama_panggilan		        = $this->input->post('nama_panggilan');
            $status_jemaat		        = $this->input->post('status_jemaat');
            $status_kel		        = $this->input->post('status_kel');
            $sektor		        = $this->input->post('sektor');
            $alamat		        = $this->input->post('alamat');
            $telp_rumah		    = $this->input->post('telp_rumah');
            $wa		            = $this->input->post('wa');
			$tgl_lahir			= $this->input->post('tgl_lahir');
			$tempat_lahir		= $this->input->post('tempat_lahir');
            $pendidikan		    = $this->input->post('pendidikan');
            $pekerjaan		    = $this->input->post('pekerjaan');
            $penghasilan		= $this->input->post('penghasilan');
            $gol_darah		    = $this->input->post('gol_darah');
            $hobby		        = $this->input->post('hobby');
            $tempat_menikah		= $this->input->post('tempat_menikah');
            $tgl_menikah		= $this->input->post('tgl_menikah');
			$diberkati_oleh		= $this->input->post('diberkati_oleh');
            $status_nikah       = $this->input->post('status_nikah');
            $nama_pasangan		        = $this->input->post('nama_pasangan');
            $jenkel             = $this->input->post('jenkel');
            $tempat_babtis       = $this->input->post('tempat_babtis');
            $tgl_babtis        =  $this->input->post('tgl_babtis');
            $pendeta_babtis        =  $this->input->post('pendeta_babtis');
            $user               = $this->input->post('user');


            $data= array(
                'nomor_kaj'   	=> $nomor_kaj,
                'nik'           => $nik,
                'nama'   		=> ucwords($nama),
                'nama_panggilan'=> $nama_panggilan,
                'status_jemaat'   		=> $status_jemaat,
                'status_kel'    => $status_kel,
                'sektor'   		=> $sektor,
                'alamat'   		=> ucwords($alamat),
                'telp_rumah'   	=> $telp_rumah,
                'wa'   		    => $wa,
                'tgl_lahir'   	=> $tgl_lahir,
                'tempat_lahir'  => ucwords($tempat_lahir),
                'pendidikan'   	=> $pendidikan,
                'pekerjaan'   	=> $pekerjaan,
                'penghasilan'   => $penghasilan,
                'gol_darah'   	=> $gol_darah,
                'hobby'   		=> $hobby,
                'tempat_menikah'   		=> ucwords($tempat_menikah),
                'tgl_menikah'   		=> $tgl_menikah,
                'diberkati_oleh'   		=> ucwords($diberkati_oleh),
                'status_nikah'          => $status_nikah,
                'nama_pasangan'         => ucwords($nama_pasangan),
                'jenkel'                => $jenkel,
                'tempat_babtis'         => ucwords($tempat_babtis),
                'pendeta_babtis'        =>ucwords($pendeta_babtis),
                'user'                => $user

            );

            $this->Kepalakeluarga_model->insert_data($data, 'kordinator');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Kepala Keluarga Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('administrator/kepala_keluarga');
        }
    }

    public function _rules(){
		$this->form_validation->set_rules('nomor_kaj','nomor_kaj', 'required|is_unique[kepala_keluarga.nomor_kaj]',[
        'required'=> 'nomor_kaj belum diisi',
        'is_unique' => 'Data sudah ada'

        ]);
        $this->form_validation->set_rules('nik','nik', 'required|is_unique[kepala_keluarga.nik]',[
            'required'=> 'NIK belum diisi',
            'is_unique' => 'NIK sudah ada'

            ]);
      /*  $this->form_validation->set_rules('nama','nama', 'required',['required'=> 'Nama Wajib diisi']);
        $this->form_validation->set_rules('status','status', 'required',['required'=> 'status Wajib diisi']);
        $this->form_validation->set_rules('sektor','sektor', 'required',['required'=> 'sektor Wajib diisi']);
        $this->form_validation->set_rules('alamat','alamat', 'required',['required'=> 'alamat Wajib diisi']);
        $this->form_validation->set_rules('telp_rumah','telp_rumah', 'required',['required'=> 'telp_rumah Wajib diisi']);
        $this->form_validation->set_rules('telp_kantor','telp_kantor', 'required',['required'=> 'telp_kantor Wajib diisi']);
        $this->form_validation->set_rules('wa','wa', 'required',['required'=> 'wa Wajib diisi']);
        $this->form_validation->set_rules('tgl_lahir','tgl_lahir', 'required',['required'=> 'tgl_lahir Wajib diisi']);
        $this->form_validation->set_rules('tempat_lahir','tempat_lahir', 'required',['required'=> 'tempat_lahir Wajib diisi']);
        $this->form_validation->set_rules('pendidikan','pendidikan', 'required',['required'=> 'pendidikan Wajib diisi']);
        $this->form_validation->set_rules('pekerjaan','pekerjaan', 'required',['required'=> 'pekerjaan Wajib diisi']);
        $this->form_validation->set_rules('penghasilan','penghasilan', 'required',['required'=> 'penghasilan Wajib diisi']);
        $this->form_validation->set_rules('gol_darah','gol_darah', 'required',['required'=> 'gol_darah Wajib diisi']);
        $this->form_validation->set_rules('hobby','hobby', 'required',['required'=> 'hobby Wajib diisi']);
        $this->form_validation->set_rules('tempat_menikah','tempat_menikah', 'required',['required'=> 'tempat_menikah Wajib diisi']);
        $this->form_validation->set_rules('tgl_menikah','tgl_menikah', 'required',['required'=> 'tgl_menikah Wajib diisi']);
        $this->form_validation->set_rules('diberkati_oleh','diberkati_oleh', 'required',['required'=> 'diberkati_oleh Wajib diisi']);
		*/
       }


	   public function update($id)
	   {
		   $where= array('id_kepkel' => $id);

            $data['pekerjaan']= $this->Kepalakeluarga_model->tampil_data_pekerjaan('pekerjaan')->result();
            $data['hobi']= $this->Kepalakeluarga_model->tampil_data_hobi('hobi')->result();
            $data['sektor']= $this->Kepalakeluarga_model->tampil_data_sektor('sektor')->result();
			$data['kordinator']= $this->Kepalakeluarga_model->edit_data($where,'kordinator')->result();
		    $this->load->view('templates_administrator/header');
			$this->load->view('templates_administrator/sidebar');
			$this->load->view('administrator/kepalakeluarga_update', $data);
			$this->load->view('templates_administrator/footer');
	   }

	   public function update_aksi(){
        $id                 = $this->input->post('id_kepkel');
        $nomor_kaj			= $this->input->post('nomor_kaj');
        $nama		        = $this->input->post('nama');
        $nama_panggilan		        = $this->input->post('nama_panggilan');
        $status_jemaat		= $this->input->post('status_jemaat');
        $status_kel		= $this->input->post('status_kel');
        $sektor		        = $this->input->post('sektor');
        $alamat		        = $this->input->post('alamat');
        $telp_rumah		    = $this->input->post('telp_rumah');
        $wa		            = $this->input->post('wa');
        $tgl_lahir			= $this->input->post('tgl_lahir');
        $tempat_lahir		= $this->input->post('tempat_lahir');
        $pendidikan		    = $this->input->post('pendidikan');
        $pekerjaan		    = $this->input->post('pekerjaan');
        $penghasilan		= $this->input->post('penghasilan');
        $gol_darah		    = $this->input->post('gol_darah');
        $hobby		        = $this->input->post('hobby');
        $tempat_menikah		= $this->input->post('tempat_menikah');
        $tgl_menikah		= $this->input->post('tgl_menikah');
        $diberkati_oleh		= $this->input->post('diberkati_oleh');
        $status_nikah       = $this->input->post('status_nikah');
        $nama_pasangan      = $this->input->post('nama_pasangan');
        $jenkel             = $this->input->post('jenkel');
        $tempat_babtis       = $this->input->post('tempat_babtis');
        $tgl_babtis        =  $this->input->post('tgl_babtis');
        $pendeta_babtis        =  $this->input->post('pendeta_babtis');

        $user               = $this->input->post('user');


        $data= array(
            'nomor_kaj'   	=> $nomor_kaj,
            'nama'   		=> ucwords($nama),
            'nama_panggilan'    => $nama_panggilan,
            'status_jemaat'   		=> $status_jemaat,
            'status_kel'    => $status_kel,
            'sektor'   		=> $sektor,
            'alamat'   		=> ucwords($alamat),
            'telp_rumah'   	=> $telp_rumah,
            'wa'   		    => $wa,
            'tgl_lahir'   	=> $tgl_lahir,
            'tempat_lahir'  => ucwords($tempat_lahir),
            'pendidikan'   	=> $pendidikan,
            'pekerjaan'   	=> $pekerjaan,
            'penghasilan'   => $penghasilan,
            'gol_darah'   	=> $gol_darah,
            'hobby'   		=> $hobby,
            'tempat_menikah'   		=> ucwords($tempat_menikah),
            'tgl_menikah'   		=> $tgl_menikah,
            'diberkati_oleh'   		=> ucwords($diberkati_oleh),
            'status_nikah'          => $status_nikah,
            'nama_pasangan'         =>$nama_pasangan,
            'jenkel'                => $jenkel,
            'tempat_babtis'         => ucwords($tempat_babtis),
            'tgl_babtis'            => $tgl_babtis,
            'pendeta_babtis'        =>ucwords($pendeta_babtis),
            'user'                => $user

        );

		   $where = array(
			   'id_kepkel' => $id
		   );
		   $this->Kepalakeluarga_model->update_data($where, $data,'kordinator');
		   $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			   Data Kepala Keluarga Berhasil DIUPDATE!
			   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			   <span aria-hidden="true">&times;</span>
			   </button>
		   </div>');
		   redirect('administrator/Kepala_keluarga');
	   }



	   public function datakeluarga(){
        $data['perorangan']= $this->perorangan_model->tampil_data('data_perorangan')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('datakeluarga',$data);
        $this->load->view('templates_administrator/footer');
    }
//blok filter cari
    public function cari(){
		$this->load->model('Kepalakeluarga_model');
		$keyword = $this->input->get('keyword');
		$data = $this->Kepalakeluarga_model->ambil_data($keyword);
		$data = array(
			'keyword'	=> $keyword,
			'data'		=> $data
		);
		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/search_kepalakel',$data);
        $this->load->view('templates_administrator/footer');
	}

    public function cari_sektor(){
		$this->load->model('Kepalakeluarga_model');
        $data2['sektor']= $this->Kepalakeluarga_model->tampil_data_sektor('sektor')->result();
		$keyword = $this->input->get('keyword');
		$data = $this->Kepalakeluarga_model->ambil_data_sektor($keyword);
		$data = array(
			'keyword'	=> $keyword,
			'data'		=> $data
		);
		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/search_sektor',$data,$data2);
        $this->load->view('templates_administrator/footer');
	}


    public function cari_hutLahir(){
        $tgl1 = $this->input->get('tgl1');
        $tgl2 = $this->input->get('tgl2');
        $data['data']= $this->Kepalakeluarga_model->tampil_data('kordinator')->result();

		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/search_hutLahir',$data);
        $this->load->view('templates_administrator/footer');
	}
    public function hasil_hutLahir(){
        $tgl_awal= $this->input->post('tgl_awal');
        $tgl_akhir= $this->input->post('tgl_akhir');

        $data['lahir']= $this->Kepalakeluarga_model->getDate($tgl_awal, $tgl_akhir);
		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/hasil_hutLahir',$data);
        $this->load->view('templates_administrator/footer');
    }


    //==================hut nikah
    public function cari_hutNikah(){
        $tgl1 = $this->input->get('tgl1');
        $tgl2 = $this->input->get('tgl2');
        $data['data']= $this->Kepalakeluarga_model->tampil_data('kordinator')->result();

		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/search_hutNikah',$data);
        $this->load->view('templates_administrator/footer');
	}
    public function hasil_hutNikah(){
        $tgl_awal= $this->input->post('tgl_awal');
        $tgl_akhir= $this->input->post('tgl_akhir');

        $data['nikah']= $this->Kepalakeluarga_model->getDate_nikah($tgl_awal, $tgl_akhir);
		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/hasil_hutNikah',$data);
        $this->load->view('templates_administrator/footer');
    }



    public function cari_goldarah(){
        $data['data']= $this->Kepalakeluarga_model->tampil_data('data_perorangan')->result();
		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/search_goldarah',$data);
        $this->load->view('templates_administrator/footer');
	}
    public function hasil_goldarah(){
        $d['cari']= $this->Kepalakeluarga_model->ambil_data_goldarah();
		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/hasil_gdarah',$d);
        $this->load->view('templates_administrator/footer');
    }


    public function delete($id){
        $where= array('id_kepkel'=> $id);
        $this->Kepalakeluarga_model->hapus_data($where, 'kordinator');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Kepala Keluarga Berhasil DIHAPUS!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/Kepala_keluarga/jointable/'.$id);
    }

    public function hapus_semua($id){
        $where= array('id_kepkel'=> $id);
        $this->Kepalakeluarga_model->hapus_data($where, 'kordinator');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Kepala Keluarga Berhasil DIHAPUS!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/Kepala_keluarga/');
    }









    public function cetak(){
        $data['kordinator']= $this->Kepalakeluarga_model->tampil_data('data_perorangan')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('administrator/preview', $data);
    }
    public function toprint(){
        $data['kordinator']= $this->Kepalakeluarga_model->tampil_data('kordinator')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('administrator/cetak_kk', $data);
    }

    public function cetak_detail($idk){
        $data['angkel']=$this->Kepalakeluarga_model->tampil_angkel($idk);
        $data['detail']= $this->Kepalakeluarga_model->ambil_id_orang($idk);
        $this->load->view('templates_administrator/header');
        $this->load->view('administrator/preview_detail', $data);


    }


    //batas anggota keluarga

    public function tambah_anggota($id)

    {

        $keyword = $this->input->get('keyword');
		$data = $this->Kepalakeluarga_model->ambil_data($keyword);
		$data = array(
			'keyword'	=> $keyword,
			'data'		=> $data
		);


         $data['hobi']= $this->Kepalakeluarga_model->tampil_data_hobi('hobi')->result();
        $data['pekerjaan']= $this->Kepalakeluarga_model->tampil_data_pekerjaan('pekerjaan')->result();

        $where= array('id_kepkel' => $id);
         $data['kordinator']= $this->Kepalakeluarga_model->edit_data($where,'kordinator')->result();
       // $data['prodi']= $this->db->query("SELECT * FROM prodi prd,jurusan jrs WHERE prd.nama_jurusan = jrs.nama_jurusan AND prd.id_prodi='$id' ")->result();
       // $data['jurusan']= $this->grup_model->tampil_data('jurusan')->result();
        $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('administrator/anggotakeluarga_form', $data);
         $this->load->view('templates_administrator/footer');
    }

    public function tambahanggota_aksi(){
        $id			= $this->input->post('id_kep');
        $kepala_keluarga		= $this->input->post('kordinator');
        $nomor_kaj			= $this->input->post('nomor_kaj');
        $nik		        = $this->input->post('nik');
			$nama		        = $this->input->post('nama');
            $nama_panggilan		        = $this->input->post('nama_panggilan');
            $status_kel		= $this->input->post('status_kel');
            $status_jemaat		= $this->input->post('status_jemaat');
            $alamat		        = $this->input->post('alamat');
            $telp_rumah		    = $this->input->post('telp_rumah');
            $telp_kantor		= $this->input->post('telp_kantor');
            $wa		            = $this->input->post('wa');
			$tgl_lahir			= $this->input->post('tgl_lahir');
			$tempat_lahir		= $this->input->post('tempat_lahir');
            $pendidikan		    = $this->input->post('pendidikan');
            $pekerjaan		    = $this->input->post('pekerjaan');
            $penghasilan		= $this->input->post('penghasilan');
            $gol_darah		    = $this->input->post('gol_darah');
            $hobby		        = $this->input->post('hobby');
            $status_nikah       = $this->input->post('status_nikah');
            $jenkel             = $this->input->post('jenkel');
            $status_aktif            = $this->input->post('status_aktif');
            $tempat_babtis       = $this->input->post('tempat_babtis');
            $tempat_sidi        =  $this->input->post('tempat_sidi');
            $tgl_babtis        =  $this->input->post('tgl_babtis');
            $tgl_sidi        =  $this->input->post('tgl_sidi');
            $pendeta_babtis        =  $this->input->post('pendeta_babtis');
            $pendeta_sidi        =  $this->input->post('pendeta_sidi');
            $user               =  $this->input->post('user');


            $data= array(
                'id_kep'     => $id,
                'kordinator' => $kepala_keluarga,
                'nik'         =>$nik,
                'nomor_kaj'   	=> $nomor_kaj,
                'nama'   		=> ucwords($nama),
                'nama_panggilan'   		=> ucwords($nama_panggilan),
                'status_jemaat'   		=> $status_jemaat,
                'status_kel'        => $status_kel,
                'alamat'   		=> ucwords($alamat),
                'telp_rumah'   	=> $telp_rumah,
                'telp_kantor'   => $telp_kantor,
                'wa'   		    => $wa,
                'tgl_lahir'   	=> $tgl_lahir,
                'tempat_lahir'  => ucwords($tempat_lahir),
                'pendidikan'   	=> $pendidikan,
                'pekerjaan'   	=> $pekerjaan,
                'penghasilan'   => $penghasilan,
                'gol_darah'   	=> $gol_darah,
                'hobby'   		=> $hobby,
                'status_nikah'          => $status_nikah,
                'jenkel'                => $jenkel,
                'status_aktif'                => $status_aktif,
                'tempat_babtis'         => ucwords($tempat_babtis),
                'tempat_sidi'           => ucwords($tempat_sidi),
                'tgl_babtis'            => $tgl_babtis,
                'tgl_sidi'              => $tgl_sidi,
                'pendeta_babtis'        =>ucwords($pendeta_babtis),
                'pendeta_sidi'          => ucwords($pendeta_sidi),
                'user'                => $user

            );
            $this->Kepalakeluarga_model->insert_data($data, 'kordinator');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Anggota Keluarga Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/Kepala_keluarga/jointable/'.$id);
    }


//update anggota keluarga

public function notifikasi(){
    $data['data']= $this->Kepalakeluarga_model->tampil_data('kordinator')->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/notifikasi', $data);
    $this->load->view('templates_administrator/footer');

}


}
?>
