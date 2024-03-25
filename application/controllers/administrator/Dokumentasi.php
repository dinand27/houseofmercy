<?php 
class Dokumentasi extends CI_Controller
{
    public function index(){
        $data['dokumentasi']= $this->Controlpanel_model->tampil_data('dokumentasi')->result();
			$this->load->view('templates_administrator/header');
			$this->load->view('templates_administrator/sidebar');
			$this->load->view('administrator/dokumentasi', $data);
			$this->load->view('templates_administrator/footer');
    }

    public function tambah_dokumentasi(){
        $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('administrator/dokumentasi_form');
         $this->load->view('templates_administrator/footer');
     }

     public function tambah_dokumentasi_aksi()
    {
    	 $this->_rules();
        if($this->form_validation->run()== FALSE){
            $this->tambah_dokumentasi();
        } else {
            $tgl_posting			= $this->input->post('tgl_posting');
			$title		        = $this->input->post('title');
            $berita		        = $this->input->post('berita');
            $foto 				= $_FILES['foto'];
			if($foto= ''){ echo "tidak ada foto diupload";
				
			} else {
            	$config['upload_path']= './gambar/dokumentasi/';
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
                'title'   		=> ucwords($title),
                'berita'   		=> ucfirst($berita),
                'foto'          =>$foto
            
            );

            $this->Controlpanel_model->insert_data($data, 'dokumentasi');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Dokumentasi Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('administrator/Dokumentasi');
        }
    }

    public function _rules(){
		$this->form_validation->set_rules('title','title', 'required',['required'=> 'Judul Belum diisi']);
        
      
       }

       public function delete($id){
        $where= array('id'=> $id);
        $this->Controlpanel_model->hapus_data($where, 'dokumentasi');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Do Berhasil DIHAPUS!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/prodi');
    }

    
    public function update($id)
    {
        $where= array('id' => $id);
         $data['dokumentasi']= $this->Controlpanel_model->edit_data($where,'dokumentasi')->result();
        $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('administrator/dokumentasi_update', $data);
         $this->load->view('templates_administrator/footer');
    }

    public function update_aksi(){
        $id                 =  $this->input->post('id');
        $tgl_posting			= $this->input->post('tgl_posting');
        $title		        = $this->input->post('title');
        $berita		        = $this->input->post('berita');
        $foto 				= $_FILES['foto'];
        if($foto= ''){ echo "tidak ada foto diupload";
            
        } else {
            $config['upload_path']= './gambar/dokumentasi/';
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
            'title'   		=> ucwords($title),
            'berita'   		=> ucfirst($berita),
            'foto'          =>$foto
        
        );
                $where = array( 
			   'id' => $id
		   );
		   $this->Controlpanel_model->update_data($where, $data,'dokumentasi');
		   $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			   Dokumentasi Berhasil DIUPDATE!
			   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			   <span aria-hidden="true">&times;</span>
			   </button>
		   </div>');
		   redirect('administrator/Dokumentasi');
	   }







}
?>