<?php 
class Anggotajemaat extends CI_Controller
{
    public function index(){

        $data['kepala_keluarga']= $this->Kepalakeluarga_model->tampil_kkel('kepala_keluarga')->result();
        $data['anggota_keluarga']= $this->Kepalakeluarga_model->tampil_anggotakeluarga('anggota_keluarga')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/jemaat',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update($id){

        $where= array('id_anggota' => $id);
           
            $data['pekerjaan']= $this->Kepalakeluarga_model->tampil_data_pekerjaan('pekerjaan')->result();
            $data['hobi']= $this->Kepalakeluarga_model->tampil_data_hobi('hobi')->result();
            $data['sektor']= $this->Kepalakeluarga_model->tampil_data_sektor('sektor')->result();
			$data['anggota_keluarga']= $this->Kepalakeluarga_model->edit_data($where,'anggota_keluarga')->result();
            $this->load->view('templates_administrator/header');
			$this->load->view('templates_administrator/sidebar');
			$this->load->view('administrator/anggota_update', $data);
			$this->load->view('templates_administrator/footer');
    }

    public function update_aksi(){
                $id                 = $this->input->post('id_anggota');
                $id_kep             = $this->input->post('id_kep');
                 $nomor_kaj			= $this->input->post('nomor_kaj');
                $nama		        = $this->input->post('nama');
                $nama_panggilan		= $this->input->post('nama_panggilan');
                $status_jemaat		= $this->input->post('status_jemaat');
                $status_kel		= $this->input->post('status_kel');
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
                $profesi            = $this->input->post('profesi');
                $status_aktif            = $this->input->post('status_aktif');
                $tempat_babtis       = $this->input->post('tempat_babtis');
                $tempat_sidi        =  $this->input->post('tempat_sidi');
                $tgl_babtis        =  $this->input->post('tgl_babtis');
                $tgl_sidi        =  $this->input->post('tgl_sidi');
                $pendeta_babtis        =  $this->input->post('pendeta_babtis');
                $pendeta_sidi        =  $this->input->post('pendeta_sidi');
    
                $user               =  $this->input->post('user'); 
                        
               
                $data= array(

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
                    'profesi'       => $profesi,
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
                $where = array( 
                    'id_anggota' => $id
                );
                $this->Kepalakeluarga_model->update_data($where,$data, 'anggota_keluarga');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Anggota Keluarga Berhasil Di UPDATE!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('administrator/Kepala_keluarga/jointable/'.$id_kep);
        
    
    }

    public function delete($id){
        $where= array(
            'id_anggota'=> $id
    );  
        $this->Kepalakeluarga_model->hapus_data($where, 'anggota_keluarga');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Anggota Keluarga Berhasil DIHAPUS!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/Kepala_keluarga');
    }
}
?>

