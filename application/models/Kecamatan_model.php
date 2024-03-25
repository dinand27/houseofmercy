<?php
class Kecamatan_model extends CI_Model
{
    public function tampil_data($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data,$table){
        $this->db->insert($table, $data);

    }

    public function ambil_kmk($kmk){
        $res= $this->db->where('id_mk',$kmk)->get('matakuliah');
        if($res->num_rows() >0){
            return $res->result();
        }else {
            return FALSE;
        }
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