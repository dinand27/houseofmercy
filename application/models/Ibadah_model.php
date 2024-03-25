<?php
class Ibadah_model extends CI_Model
{
    public function tampil_data($table)
    {
        return $this->db->get($table);
    }

    public function ambil_id_persembahan($id)
    {
        $hasil= $this->db->where('id_persembahan',$id)->get('persembahan');
        if($hasil->num_rows()> 0){
            return $hasil->result();
        }else {
            return FALSE;;
        }
    }

    public function ambil_data($keyword=null){
		$this->db->select('*');
		$this->db->from('persembahan');
		if(!empty($keyword)){
			$this->db->where('tgl_persembahan',$keyword);
		}
		return $this->db->get()->result_array();
	}




    public function insert_data($data,$table){
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
}
?> 