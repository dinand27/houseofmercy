<?php 
class Notifikasi_model extends CI_Model
{
    public function tampil_data($table)
    {
        return $this->db->get($table);
    }

    
    public function ultah(){
        $current_month_day= date('m-d');
        $current_year= now('Y');
            $this->db->select('*');
            $this->db->from('kepala_keluarga');
            $this->db->where ('tgl_lahir',$current_month_day); 
            $query= $this->db->get();
            return($query);
    }

    public function edit_data($where, $table){
        return $this->db->get_where($table, $where);
    }
}
?>
