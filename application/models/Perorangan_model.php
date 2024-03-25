<?php
class Perorangan_model extends CI_Model
{
	   public function tampil_data($table)
    {
        return $this->db->get($table);
    }

    public function ambil_data($keyword=null){
		$this->db->select('*');
		$this->db->from('perorangan');
		if(!empty($keyword)){
			$this->db->like('nama',$keyword);
		}
		return $this->db->get()->result_array();
	}

	    public function ambil_data_komsel($keyword=null){
		$this->db->select('*');
		$this->db->from('perorangan');
		if(!empty($keyword)){
			$this->db->where('komsel',$keyword);
		}
		return $this->db->get()->result_array();
	}

	public function ambil_data_goldarah(){
			$cari= $this->input->get('keyword',true);
			$data= $this->db->query("SELECT * from perorangan where gol_darah='$cari' ");
			return $data->result();
	}

    public function tampil_data_pekerjaan($table){
        return $this->db->get($table);
    }

    public function tampil_data_hobi($table){
        return $this->db->get($table);
    }
    public function tampil_data_komsel($table){
        return $this->db->get($table);
    }




    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
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


    public function ambil_id_orang($id)
    {
        $hasil= $this->db->where('id',$id)->get('perorangan');
        if($hasil->num_rows()> 0){
            return $hasil->result();
        }else {
            return FALSE;;
        }
    }

    public $table ='perorangan';
    public $id ='id';

    public function get_by_id($id)
    {
        $this->db->where($this->id,$id);
        return $this->db->get($this->table)->row();

    }

		//pencarian Rentang tanggal lahir
		    public function getDate(){
		        $tgl_akhir= $this->input->get('tgl_akhir',true);
		        $tgl_awal= $this->input->get('tgl_awal',true);
		        $range= $this->db->query("SELECT * from perorangan where tgl_lahir between '$tgl_awal' and '$tgl_akhir' ");
		        return $range->result();
		    }

		    public function getDate_nikah(){
		        $tgl_akhir= $this->input->get('tgl_akhir',true);
		        $tgl_awal= $this->input->get('tgl_awal',true);
		        $new_akhir= date("d-m", strtotime($tgl_akhir));
		        $new_awal= date("d-m", strtotime($tgl_awal));
		        // list($thn_ak, $bln_ak, $tgl_ak)= explode("-", $tgl_akhir);
		        // list($thn_aw, $bln_aw, $tgl_aw)= explode("-", $tgl_awal);


		        $range= $this->db->query("SELECT * from perorangan where tgl_menikah between '$new_awal' and '$new_akhir' ");
		        return $range->result();
		        var_dump($range);
		    }



}
?>
