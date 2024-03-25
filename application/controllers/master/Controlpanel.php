<?php
class Controlpanel extends CI_Controller
{
    public function index()
    {
        $data['pekerjaan']= $this->Controlpanel_model->tampil_data_pekerjaan('pekerjaan')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('master/pekerjaan',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function tambah_profesi(){
        $data['profesi']= $this->Controlpanel_model->tampil_data_pekerjaan('pekerjaan')->result();
        $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('master/pekerjaan_form', $data);
         $this->load->view('templates_administrator/footer');
    }


    public function tambah_profesi_aksi(){
        $this->_rules();
        if($this->form_validation->run()== FALSE){
            $this->tambah_profesi()();
        } else {
            $profesi= $this->input->post('profesi');
            $data= array(
                'profesi'=> $profesi
            );
            $this->Controlpanel_model->insert_data($data, 'pekerjaan');
             $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pekerjaan Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('master/Controlpanel');
        }
    }

    public function _rules(){
        $this->form_validation->set_rules('profesi','profesi', 'required',['required'=> 'Nama profesi Wajib diisi']);
    }

    //batas PROFESI PEKERJAAN


    public function pekerjaan(){
        $data['pekerjaan']= $this->Controlpanel_model->tampil_data_pekerjaan('pekerjaan')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('master/pekerjaan',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function tambah_pekerjaan(){
        $data['pekerjaan']= $this->Controlpanel_model->tampil_data('pekerjaan')->result();
        $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('master/pekerjaan_form', $data);
         $this->load->view('templates_administrator/footer');
    }

    public function tambah_pekerjaan_aksi(){
        $this->_rules_Pekerjaan();
        if($this->form_validation->run()== FALSE){
            $this->tambah_pekerjaan();
        } else {
            $profesi= $this->input->post('pekerjaan');
            $data= array(
                'profesi'=> ucwords($profesi)
            );
            $this->Controlpanel_model->insert_data($data, 'pekerjaan');
             $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pekerjaan Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('master/Controlpanel/pekerjaan');
        }
    }

    public function _rules_Pekerjaan(){
        $this->form_validation->set_rules('profesi','profesi', 'required',['required'=> 'Nama Pekerjaan Wajib diisi']);
    }

    public function delete_pekerjaan($id){
        $where= array('id_pekerjaan'=> $id);
        $this->Kepalakeluarga_model->hapus_data($where, 'pekerjaan');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Pekerjaan Berhasil DIHAPUS!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('master/Controlpanel/pekerjaan');
    }

    //batas Kebaktian======================================================================
    public function kebaktian(){
        $data['jenis_ibadah']= $this->Controlpanel_model->tampil_data('jenis_ibadah')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('master/kebaktian',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function tambah_kebaktian(){
        $data['jenis_ibadah']= $this->Controlpanel_model->tampil_data('jenis_ibadah')->result();
        $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('master/kebaktian_form', $data);
         $this->load->view('templates_administrator/footer');
    }

    public function tambah_kebaktian_aksi(){
        $this->_rules_kebaktian();
        if($this->form_validation->run()== FALSE){
            $this->tambah_kebaktian();
        } else {
            $nama_kebaktian= $this->input->post('nama_kebaktian');
            $keterangan= $this->input->post('keterangan');
            $data= array(
                'nama_ibadah'=> ucwords($nama_kebaktian),
                'keterangan' => $keterangan
            );
            $this->Controlpanel_model->insert_data($data, 'jenis_ibadah');
             $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Kebaktian Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('master/Controlpanel/kebaktian');
        }
    }

    public function _rules_kebaktian(){
        $this->form_validation->set_rules('nama_kebaktian','nama_kebaktian', 'required',['required'=> 'Nama Kebaktian Wajib diisi']);
    }

    public function delete_kebaktian($id){
        $where= array('id'=> $id);
        $this->Kepalakeluarga_model->hapus_data($where, 'jenis_ibadah');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Kebaktian Berhasil DIHAPUS!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('master/Controlpanel/kebaktian');
    }
    //batas hobi============================================================

    public function hobi(){
        $data['hobi']= $this->Controlpanel_model->tampil_data('hobi')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('master/hobi',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function tambah_hobi(){
        $data['hobi']= $this->Controlpanel_model->tampil_data('hobi')->result();
        $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('master/hobi_form', $data);
         $this->load->view('templates_administrator/footer');
    }

    public function tambah_hobi_aksi(){
        $this->_rules_hobi();
        if($this->form_validation->run()== FALSE){
            $this->tambah_hobi();
        } else {
            $hobi= $this->input->post('hobi');

            $data= array(
                'hobi'=> ucwords($hobi)
            );
            $this->Controlpanel_model->insert_data($data, 'hobi');
             $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Hobi Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('master/Controlpanel/hobi');
        }
    }

    public function _rules_hobi(){
        $this->form_validation->set_rules('hobi','hobi', 'required',['required'=> 'hobi Wajib diisi']);
    }

    public function delete_hobi($id){
        $where= array('id'=> $id);
        $this->Kepalakeluarga_model->hapus_data($where, 'hobi');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data hobi Berhasil DIHAPUS!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('master/Controlpanel/hobi');
    }

    // batas sektor============================================================
    public function sektor(){
        $data['sektor']= $this->Controlpanel_model->tampil_data('km_wilayah')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('master/sektor',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function tambah_sektor(){
        $data['sektor']= $this->Controlpanel_model->tampil_data('km_wilayah')->result();
        $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('master/sektor_form', $data);
         $this->load->view('templates_administrator/footer');
    }

    public function tambah_sektor_aksi(){
        $this->_rules_sektor();
        if($this->form_validation->run()== FALSE){
            $this->tambah_sektor();
        } else {
            $nama_kmwilayah = $this->input->post('nama_kmwilayah');
            $kord_wil        = $this->input->post('kord_wil');
            $yangbuat       = $this->input->post('yangbuat');

            $data= array(
                'nama_kmwilayah'=> strtoupper($nama_kmwilayah),
                'kord_wil'=> strtoupper($kord_wil),
                'yangbuat'  => $yangbuat
            );
            $this->Controlpanel_model->insert_data($data, 'km_wilayah');
             $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data KM Wilayah Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('master/Controlpanel/sektor');
        }
    }

    public function _rules_sektor(){
        $this->form_validation->set_rules('nama_kmwilayah','nama_kmwilayah', 'required',['required'=> 'Nama wilayah Wajib diisi']);
        $this->form_validation->set_rules('kord_wil','kord_wil', 'required',['required'=> 'Nama Ketua Wajib diisi']);
    }

    public function delete_sektor($id){
        $where= array('id'=> $id);
        $this->Kepalakeluarga_model->hapus_data($where, 'sektor');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data sektor Berhasil DIHAPUS!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('master/Controlpanel/sektor');
    }


// batas komsel////////////////
        public function komsel()
    {
        $data['komsel']= $this->Controlpanel_model->tampil_data('komsel')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('master/komsel',$data);
        $this->load->view('templates_administrator/footer');
    }



    public function tambah_komsel(){
        $data['wilayah']= $this->Controlpanel_model->tampil_data('km_wilayah')->result();
        $data['komsel']= $this->Controlpanel_model->tampil_data('komsel')->result();
        $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('master/komsel_form', $data);
         $this->load->view('templates_administrator/footer');
    }

    public function tambah_komsel_aksi(){
        $this->_rules_komsel();
        if($this->form_validation->run()== FALSE){
            $this->tambah_komsel();
        } else {
            $nama_komsel = $this->input->post('nama_komsel');
            $gkm        = $this->input->post('gkm');
            $id_wilayah        = $this->input->post('id_wilayah');
            $yangbuat       = $this->input->post('yangbuat');

            $data= array(
                'nama_komsel'=> strtoupper($nama_komsel),
                'gkm'=> strtoupper($gkm),
                'id_wilayah' => $id_wilayah,
                'yangbuat'  => $yangbuat
            );
            $this->Controlpanel_model->insert_data($data, 'komsel');
             $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data KOMSEL Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('master/Controlpanel/komsel');
        }
    }

    public function _rules_komsel(){
        $this->form_validation->set_rules('nama_komsel','nama_komsel', 'required',['required'=> 'Nama Komsel Wajib diisi']);
        $this->form_validation->set_rules('gkm','gkm', 'required',['required'=> 'Nama Kordinator/ GKM Wajib diisi']);
    }

    public function delete_komsel($id){
        $where= array('id'=> $id);
        $this->Controlpanel_model->hapus_data($where, 'komsel');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data KOMSEL Berhasil DIHAPUS!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('master/Controlpanel/komsel');
    }

    // batas korpel//////////////////////////////////////

    public function korpel()
    {
        $data['korpel']= $this->Komsel_model->tampil_data('korpel')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('master/korpel', $data);
        $this->load->view('templates_administrator/footer');
    }


    public function tambah_korpel(){
        $data['korpel']= $this->Controlpanel_model->tampil_data('korpel')->result();
        $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('master/korpel_form', $data);
         $this->load->view('templates_administrator/footer');
    }

    public function tambah_korpel_aksi(){
        $this->_rules_korpel();
        if($this->form_validation->run()== FALSE){
            $this->tambah_korpel();
        } else {
            $pelayanan = $this->input->post('pelayanan');
            $kordinator        = $this->input->post('kordinator');
            $yangbuat       = $this->input->post('yangbuat');

            $data= array(
                'pelayanan'=> strtoupper($pelayanan),
                'kordinator'=> strtoupper($kordinator),
                'yangbuat'  => $yangbuat
            );
            $this->Controlpanel_model->insert_data($data, 'korpel');
             $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Kordinator Pelayanan Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('master/Controlpanel/korpel');
        }
    }

    public function _rules_korpel(){
        $this->form_validation->set_rules('pelayanan','pelayanan', 'required',['required'=> 'Jenis Pelayanan Wajib diisi']);
        $this->form_validation->set_rules('kordinator','kordinator', 'required',['required'=> 'Nama Kordinator/ GKM Wajib diisi']);
    }

    public function delete_korpel($id){
        $where= array('id'=> $id);
        $this->Controlpanel_model->hapus_data($where, 'korpel');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Kordinator Pelayanan Berhasil DIHAPUS!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('master/Controlpanel/korpel');
    }


    // batas korpel
// data KOTA
    public function kota(){
        $data['kota']= $this->Controlpanel_model->tampil_data('kota')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('master/kota',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function tambah_kota(){
        $data['kota']= $this->Controlpanel_model->tampil_data('kota')->result();
        $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('master/kota_form', $data);
         $this->load->view('templates_administrator/footer');
    }

    public function tambah_kota_aksi(){
        $this->_rules_kota();
        if($this->form_validation->run()== FALSE){
            $this->tambah_kota();
        } else {
            $namaKota= $this->input->post('namaKota');

            $data= array(
                'namaKota'=> ucwords($namaKota)
            );
            $this->Controlpanel_model->insert_data($data, 'kota');
             $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Nama Kota Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('master/Controlpanel/kota');
        }
    }

    public function _rules_kota(){
        $this->form_validation->set_rules('namaKota','namaKota', 'required',['required'=> 'Nama Kota Wajib diisi']);
    }

    public function delete_kota($id){
        $where= array('id'=> $id);
        $this->Controlpanel_model->hapus_data($where, 'kota');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Nama Kota Berhasil DIHAPUS!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('master/Controlpanel/kota');
    }



}
?>
