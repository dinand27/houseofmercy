<?php 
class Grup extends CI_Controller
{
    public function index(){
         $data['grup']= $this->grup_model->tampil_data('grup')->result();
         $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('administrator/grup', $data);
         $this->load->view('templates_administrator/footer');
    }
    public function tambah_grup(){
        $data['grup']= $this->grup_model->tampil_data('grup')->result();
        $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('administrator/grup_form', $data);
         $this->load->view('templates_administrator/footer');
    }

    public function tambah_grup_aksi(){
        $this->_rules();
        if($this->form_validation->run()== FALSE){
            $this->tambah_grup();
        } else {
            $nama_grup= $this->input->post('nama_grup');
            $area= $this->input->post('area');
            $data= array(
                'nama_grup'=> $nama_grup,
                'area'=> $area
            );
            $this->grup_model->insert_data($data, 'grup');
             $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Grup/KM Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('administrator/grup');
        }
    }

    public function _rules(){
        $this->form_validation->set_rules('nama_grup','nama_grup', 'required',['required'=> 'Nama grup Wajib diisi']);
        $this->form_validation->set_rules('area','wilayah', 'required',['required'=> 'Nama wilayah Wajib diisi']);
    }

    public function update($id)
    {
        $where= array('id_grup' => $id);
         $data['grup']= $this->grup_model->edit_data($where,'grup')->result();
       // $data['prodi']= $this->db->query("SELECT * FROM prodi prd,jurusan jrs WHERE prd.nama_jurusan = jrs.nama_jurusan AND prd.id_prodi='$id' ")->result();
       // $data['jurusan']= $this->grup_model->tampil_data('jurusan')->result();
        $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('administrator/grup_update', $data);
         $this->load->view('templates_administrator/footer');
    }

    public function update_aksi(){
        $id         = $this->input->post('id_grup');
        $nama_grup = $this->input->post('nama_grup');
        $area = $this->input->post('area');

        $data= array(
            'nama_grup' => $nama_grup,
            'area' => $area,
        );
        $where = array( 
            'id_grup' => $id
        );
        $this->grup_model->update_data($where, $data,'grup');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data GRUP Berhasil DIUPDATE!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/grup');
    }

    public function delete($id){
        $where= array('id_grup'=> $id);
        $this->grup_model->hapus_data($where, 'grup');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data GRUP Berhasil DIHAPUS!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/grup');
    }

    public function batal(){
        redirect('administrator/grup');
    }

    
}
?>
