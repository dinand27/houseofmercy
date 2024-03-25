<?php
class Perorangan extends CI_Controller
{
	public function index()
		{
			$data['perorangan']= $this->Perorangan_model->tampil_data('perorangan')->result();
			$this->load->view('templates_administrator/header');
			$this->load->view('templates_administrator/sidebar');
			$this->load->view('administrator/perorangan', $data);
			$this->load->view('templates_administrator/footer');
		}

 public function tambah_orang(){
        $data['perorangan']= $this->Perorangan_model->tampil_data('perorangan')->result();
        $data['hobi']= $this->Perorangan_model->tampil_data('hobi')->result();
        $data['kota']= $this->Perorangan_model->tampil_data('kota')->result();
        $data['pekerjaan']= $this->Perorangan_model->tampil_data('pekerjaan')->result();
		$data['komsel']= $this->Perorangan_model->tampil_data('komsel')->result();
        $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('administrator/perorangan_form', $data);
         $this->load->view('templates_administrator/footer');
     }


	 public function detail($id)
    {
        $data['detail']= $this->Perorangan_model->ambil_id_orang($id);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/perorangan_detail', $data);
        $this->load->view('templates_administrator/footer');
    }

	public function detail_anggota($id)
    {
        $data['detail']= $this->Perorangan_model->ambil_id_orang($id);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/detail_anggota', $data);
        $this->load->view('templates_administrator/footer');
    }


    public function tambah_orang_aksi()
    {
    	 $this->_rules();
        if($this->form_validation->run()== FALSE){
            $this->tambah_orang();
        } else {
			$tgl_regis_gs			= $this->input->post('tgl_regis_gs');
			$nomor_kaj			= $this->input->post('nomor_kaj');
			$nama						= $this->input->post('nama');
			$nama_panggilan	= $this->input->post('nama_panggilan');
			$nik						= $this->input->post('nik');
			$jenkel					= $this->input->post('jenkel');
			$alamat					= $this->input->post('alamat');
			$nmKota					= $this->input->post('nmKota');
			$tempat_lahir		= $this->input->post('tempat_lahir');
			$tgl_lahir			= $this->input->post('tgl_lahir');
			$wa							= $this->input->post('wa');
			$hp							= $this->input->post('hp');
			$email					= $this->input->post('email');
			$gol_darah				= $this->input->post('gol_darah');
			$hobby						= $this->input->post('hobby');
			$pendidikan			= $this->input->post('pendidikan');
			$pekerjaan				= $this->input->post('pekerjaan');
			$status_nikah				= $this->input->post('status_nikah');
			$nama_pasangan			= $this->input->post('nama_pasangan');
			$tempat_menikah			= $this->input->post('tempat_menikah');
			$tgl_menikah				= $this->input->post('tgl_menikah');
			$diberkati_oleh			= $this->input->post('diberkati_oleh');
			$status_babtis			= $this->input->post('status_babtis');
			$tempat_babtis			= $this->input->post('tempat_babtis');
			$tgl_babtis					= $this->input->post('tgl_babtis');
			$pendeta_babtis			= $this->input->post('pendeta_babtis');
			$status_jemaat			= $this->input->post('status_jemaat');
			$komsel							= $this->input->post('komsel');
			$user							= $this->input->post('user');
		/*	$foto 						= $_FILES['foto'];
				if($foto= ''){ echo "tidak ada foto diupload";

				} else {
					$config['upload_path']= './assets/uploads/';
					$config['allowed_types']= 'jpg|jpeg|png|tiff|gif';
					$this->load->library('upload',$config);
					if(!$this->upload->do_upload('foto')){
						echo 'Foto masih Kosong/ belum di Upload'; die();
					}else {
						$foto=$this->upload->data('file_name');
					}
				} */

				$data= array(
						'tgl_regis_gs' =>	$tgl_regis_gs,
						'nomor_kaj'   	=> $nomor_kaj,
						'nama'   				=> ucwords($nama),
						'nama_panggilan'=> $nama_panggilan,
						'nik'           => $nik,
						'jenkel'        => $jenkel,
						'alamat'   			=> ucwords($alamat),
						'nmKota'				=> $nmKota,
						'tempat_lahir'  => ucwords($tempat_lahir),
						'tgl_lahir'   	=> $tgl_lahir,
						'hp'   					=> $hp,
						'wa'   		    	=> $wa,
						'email'				=>$email,
						'gol_darah'   	=> $gol_darah,
						'hobby'   			=> $hobby,
						'pendidikan'   	=> $pendidikan,
						'pekerjaan'   	=> $pekerjaan,
						'status_jemaat' => $status_jemaat,
						'komsel'   			=> $komsel,
						'tempat_menikah'   		=> ucwords($tempat_menikah),
						'tgl_menikah'   			=> $tgl_menikah,
						'diberkati_oleh'   		=> ucwords($diberkati_oleh),
						'status_nikah'          => $status_nikah,
						'nama_pasangan'         => ucwords($nama_pasangan),
						'status_babtis'				=> $status_babtis,
						'tgl_babtis'					=> $tgl_babtis,
						'tempat_babtis'         => ucwords($tempat_babtis),
						'pendeta_babtis'        =>ucwords($pendeta_babtis),
						'user'                	=> $user

				);



            $this->Perorangan_model->insert_data($data, 'perorangan');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Perorangan Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('administrator/perorangan');
        }
    }

    public function _rules(){
		$this->form_validation->set_rules('nama','nama_lengkap', 'required',['required'=> 'Nama Wajib diisi']);
		$this->form_validation->set_rules('tempat_lahir','tempat_lahir', 'required',['required'=> 'Tempat lahir Wajib diisi']);
		$this->form_validation->set_rules('jenkel','jenkel', 'required',['required'=> 'Gender Wajib diisi']);
		$this->form_validation->set_rules('tgl_lahir','tgl_lahir', 'required',['required'=> 'Tgl lahir Wajib diisi']);
	/*	$this->form_validation->set_rules('nama_panggilan','no_identitas', 'required',['required'=> 'nama_panggilan Wajib diisi']);
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

	   public function ganti_foto($id)
	   {
		   $where= array('id' => $id);
			$data['perorangan']= $this->Perorangan_model->edit_data($where,'perorangan')->result();
		  // $data['prodi']= $this->db->query("SELECT * FROM prodi prd,jurusan jrs WHERE prd.nama_jurusan = jrs.nama_jurusan AND prd.id_prodi='$id' ")->result();
		  // $data['jurusan']= $this->grup_model->tampil_data('jurusan')->result();
		   $this->load->view('templates_administrator/header');
			$this->load->view('templates_administrator/sidebar');
			$this->load->view('administrator/perorangan_gantifoto', $data);
			$this->load->view('templates_administrator/footer');
	   }
	   public function ganti_foto_aksi()
	   {
			$id = $this->input->post('id');
			$foto 		= $_FILES['foto'];
            if($foto= ''){
            } else {
            	$config['upload_path']= './gambar/';
            	$config['allowed_types']= 'jpg|jpeg|png|tiff|gif';
            	$this->load->library('upload',$config);
            	if(!$this->upload->do_upload('foto')){
            		echo 'Gagal upload FOto'; die();
            	}else {
            		$foto=$this->upload->data('file_name');
            	}
            }


			$data= array(
				'foto'   	=> $foto
			);

			$where = array(
				'id' => $id
			);
			$this->Perorangan_model->update_data($where, $data,'perorangan');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Foto Profil Berhasil DIUPDATE!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>');
			redirect('administrator/perorangan/detail/'.$id);
	   }


	   public function update($id)
	   {
			$data['pekerjaan']= $this->Perorangan_model->tampil_data_pekerjaan('pekerjaan')->result();
			$data['hobi']= $this->Perorangan_model->tampil_data_hobi('hobi')->result();
			  $data['kota']= $this->Perorangan_model->tampil_data('kota')->result();
			$data['komsel']= $this->Perorangan_model->tampil_data_komsel('komsel')->result();
			$data['pelayanan']= $this->Perorangan_model->tampil_data_komsel('korpel')->result();

			$where= array('id' => $id);
			$data['perorangan']= $this->Perorangan_model->edit_data($where,'perorangan')->result();

		   $this->load->view('templates_administrator/header');
			$this->load->view('templates_administrator/sidebar');
			$this->load->view('administrator/perorangan_update', $data);
			$this->load->view('templates_administrator/footer');
	   }

	   public function update_aksi(){
		$id                 = $this->input->post('id');
		$nik                 = $this->input->post('nik');
        $nomor_kaj			= $this->input->post('nomor_kaj');
        $nama		        = $this->input->post('nama');
        $nama_panggilan		= $this->input->post('nama_panggilan');
        $status_jemaat		= $this->input->post('status_jemaat');
        $status_kel			= $this->input->post('status_kel');
        $komsel		        = $this->input->post('komsel');
        $alamat		        = $this->input->post('alamat');
        $nmKota		        = $this->input->post('nmKota');
        $hp				    = $this->input->post('hp');
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
		$bidang_pelayanan        =  $this->input->post('bidang_pelayanan');

        $user               = $this->input->post('user');


        $data= array(
            'nomor_kaj'   	=> $nomor_kaj,
			'nik'   	=> $nik,
            'nama'   		=> ucwords($nama),
            'nama_panggilan'    => $nama_panggilan,
            'status_jemaat'   		=> $status_jemaat,
            'status_kel'    => $status_kel,
            'komsel'   		=> $komsel,
            'alamat'   		=> ucwords($alamat),
						'nmKota'			=>$nmKota,
            'hp'   			=> $hp,
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
			'bidang_pelayanan'        =>$bidang_pelayanan,
            'user'                => $user

        );

		   $where = array(
			   'id' => $id
		   );
		   $this->Perorangan_model->update_data($where, $data,'perorangan');
		   $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			   Data Perorangan Berhasil DIUPDATE!
			   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			   <span aria-hidden="true">&times;</span>
			   </button>
		   </div>');
		   redirect('administrator/perorangan');
	   }



	   public function search(){
		$keyword= $this->input->post('keyword');
		$data['perorangan']= $this->Perorangan_model->search_by_id($keyword);
		$this->load->view('search',$data);

	   }


	   public function datakeluarga(){
        $data['perorangan']= $this->Perorangan_model->tampil_data('data_perorangan')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('datakeluarga',$data);
        $this->load->view('templates_administrator/footer');
    }

	public function cari(){
		$this->load->model('Perorangan_model');
		$keyword = $this->input->get('keyword');
		$data = $this->Perorangan_model->ambil_data($keyword);
		$data = array(
			'keyword'	=> $keyword,
			'data'		=> $data
		);
		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/search_perorangan',$data);
        $this->load->view('templates_administrator/footer');
	}

	    public function delete($id){
        $where= array('id'=> $id);
        $this->Perorangan_model->hapus_data($where, 'perorangan');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Perorangan Berhasil DIHAPUS!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/perorangan');
    }

	    public function cari_komsel(){
		$data2['cari']= $this->Perorangan_model->tampil_data('komsel')->result();
		$keyword = $this->input->get('keyword');
		$data = $this->Perorangan_model->ambil_data_komsel($keyword);
		$data = array(
			'keyword'	=> $keyword,
			'data'		=> $data
		);
		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/search_komsel',$data, $data2);
        $this->load->view('templates_administrator/footer');
	}


    public function cari_hutLahir(){
        $tgl1 = $this->input->get('tgl1');
        $tgl2 = $this->input->get('tgl2');
        $data['data']= $this->Perorangan_model->tampil_data('perorangan')->result();

		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/search_hutLahir',$data);
        $this->load->view('templates_administrator/footer');
	}
    public function hasil_hutLahir(){
        $tgl_awal= $this->input->post('tgl_awal');
        $tgl_akhir= $this->input->post('tgl_akhir');

        $data['lahir']= $this->Perorangan_model->getDate($tgl_awal, $tgl_akhir);
		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/hasil_hutLahir',$data);
        $this->load->view('templates_administrator/footer');
    }


    //==================hut nikah
    public function cari_hutNikah(){
        $tgl1 = $this->input->get('tgl1');
        $tgl2 = $this->input->get('tgl2');
        $data['data']= $this->Perorangan_model->tampil_data('perorangan')->result();

		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/search_hutNikah',$data);
        $this->load->view('templates_administrator/footer');
	}
    public function hasil_hutNikah(){
        $tgl_awal= $this->input->post('tgl_awal');
        $tgl_akhir= $this->input->post('tgl_akhir');

        $data['nikah']= $this->Perorangan_model->getDate_nikah($tgl_awal, $tgl_akhir);
		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/hasil_hutNikah',$data);
        $this->load->view('templates_administrator/footer');
    }



    public function cari_goldarah(){
        $data['data']= $this->Perorangan_model->tampil_data('perorangan')->result();
		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/search_goldarah',$data);
        $this->load->view('templates_administrator/footer');
	}
    public function hasil_goldarah(){
        $d['cari']= $this->Perorangan_model->ambil_data_goldarah();
		$this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/hasil_gdarah',$d);
        $this->load->view('templates_administrator/footer');
    }







}
?>
