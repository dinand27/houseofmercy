<?php 
class Kepalakeluarga_model extends CI_Model
{
	   public function tampil_data($table)
    {
        return $this->db->get($table);
    }

    public function tampil_data_instansi($table)
    {
        return $this->db->get($table);
    }

// batas-------------------------------
public function tampil_kepala($idk){
    $query = $this->db->query("SELECT * from kepala_keluarga where status_kel = 'Kepala Keluarga' and nik= '$idk' ");
    return $query->result();
}

public function tampil_keluarga($idk){
    $query = $this->db->query("SELECT * from kepala_keluarga where status_kel != 'Kepala Keluarga' and nik_asal= '$idk' ");
    return $query->result();
}







    public function tampil_kkel(){
        $this->db->select('*');
        $this->db->from('kepala_keluarga');
        $this->db->order_by('id_kepkel');
        $query= $this->db->get();
        return($query);
    }
    public function tampil_anggotakeluarga(){
        $this->db->select('*');
        $this->db->from('anggota_keluarga');
        $this->db->order_by('id_anggota');
        $query= $this->db->get();
        return($query);
    }

    
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

// blok Pencarian data	$this->db->select('kk.nomor_kaj,kk.nama,kk.status_jemaat,kk.sektor,kk.tgl_lahir,kk.gol_darah, ak.nomor_kaj, ak.nama,
       // ak.status_jemaat,ak.sektor, ak.tgl_lahir, ak.gol_darah');
	
    public function ambil_data($keyword=null){
		$this->db->select('*');
		$this->db->from('kepala_keluarga kk');
		if(!empty($keyword)){
			$this->db->like('kk.nama',$keyword);
		}
		return $this->db->get()->result_array();
	}

    public function ambil_data_goldarah(){
        $cari= $this->input->get('keyword',true);
        $data= $this->db->query("SELECT * from data_perorangan where gol_darah='$cari' ");
        return $data->result();
    }

    public function ambil_data_sektor($keyword=null){
		$this->db->select('*');
		$this->db->from('data_perorangan');
		if(!empty($keyword)){
			$this->db->where('sektor',$keyword);
		}
		return $this->db->get()->result_array();
	}
//pencarian Rentang tanggal lahir
    public function getDate(){
        $tgl_akhir= $this->input->get('tgl_akhir',true);
        $tgl_awal= $this->input->get('tgl_awal',true);
        $range= $this->db->query("SELECT * from kepala_keluarga where tgl_lahir between '$tgl_awal' and '$tgl_akhir' ");
        return $range->result();
    }

    public function getDate_nikah(){
        $tgl_akhir= $this->input->get('tgl_akhir',true);
        $tgl_awal= $this->input->get('tgl_awal',true);
        $new_akhir= date("d-m", strtotime($tgl_akhir));
        $new_awal= date("d-m", strtotime($tgl_awal));
        // list($thn_ak, $bln_ak, $tgl_ak)= explode("-", $tgl_akhir);
        // list($thn_aw, $bln_aw, $tgl_aw)= explode("-", $tgl_awal);


        $range= $this->db->query("SELECT * from kepala_keluarga where tgl_menikah between '$new_awal' and '$new_akhir' ");
        return $range->result();
        var_dump($range);
    }

    // public function ultah(){

    //     $bln_tgl_skrg= date("m-d");
    //     $range= $this->db->query("SELECT * from kepala_keluarga where date_format(tgl_lahir,'%m-%d')= '{$bln_tgl_skrg}' ");
    //     if(!empty()){
    //         return $range->result();
    //     }
    // }







    public function tampil_data_pekerjaan($table){
        return $this->db->get($table);
    }

    public function tampil_data_hobi($table){
        return $this->db->get($table);
    }
    public function tampil_data_sektor($table){
        return $this->db->get($table);
    }



    public function edit_data($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    
    }

    public function tampil_angkel($idk){
        $this->db->select('*');
        $this->db->from('kepala_keluarga kk');
        $this->db->where('kk.kepala_keluarga',$idk);
        $query= $this->db->get();
        return $query->result();
    }
    
    public function ambil_id_orang($idk)
    {
        $hasil= $this->db->where('id_kepkel',$idk)->get('kepala_keluarga');
        if($hasil->num_rows()> 0){
            return $hasil->result();
        }else {
            return FALSE;;
        }
    }

    public $table ='data_perorangan';
    public $id ='id_perorangan';
    
    public function get_by_id($id)
    {
        $this->db->where($this->id,$id);
        return $this->db->get($this->table)->row();

    }



}
?>
