    <?php 
class Warta extends CI_Controller
{
    public function index(){
        $data['warta']= $this->Controlpanel_model->tampil_data('warta')->result();
			$this->load->view('templates_administrator/header');
			$this->load->view('templates_administrator/sidebar');
			$this->load->view('administrator/warta', $data);
			$this->load->view('templates_administrator/footer');
    }

    public function tambah_warta(){
        $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('administrator/warta_form');
         $this->load->view('templates_administrator/footer');
     }

     public function tambah_warta_aksi()
    {
    	 $this->_rules();
        if($this->form_validation->run()== FALSE){
            $this->tambah_warta();
        } else {
            $tgl_posting			= $this->input->post('tgl_posting');
			$judul		        = $this->input->post('judul');
            $tema		        = $this->input->post('tema');
            $ayat		        = $this->input->post('ayat');
            $isi_ayat		        = $this->input->post('isi_ayat');
            $foto 				= $_FILES['foto'];
			if($foto= ''){ echo "tidak ada foto diupload";
				
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
                'tgl_posting'   => $tgl_posting,
                'judul'   		=> ucwords($judul),
                'tema'   		=> $tema,
                'ayat'   		=> $ayat,
                'isi_ayat'   	=> ucfirst($isi_ayat),
                'foto'          =>$foto
            
            );

            $this->Controlpanel_model->insert_data($data, 'warta');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Warta Jemaat Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('administrator/Warta');
        }
    }

    public function _rules(){
		$this->form_validation->set_rules('tgl_posting','tgl_posting', 'required',['required'=> 'Tanggal Belum diisi']);
      
       }

}
?>