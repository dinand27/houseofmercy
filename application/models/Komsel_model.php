<?php 
class Komsel_model extends CI_Model
{
    public function tampil_data($table)
    {
        return $this->db->get($table);
    }

    public function ambil_id($id)
    {
        $hasil= $this->db->where('id_wilayah',$id)->get('komsel');
        if($hasil->num_rows()> 0){
            return $hasil->result();
        }else {

            return $hasil->result('');

            
        }
    }

    public function ambil_id_anggota($id)
    {
        $hasil= $this->db->where('komsel_id',$id)->get('perorangan');
        if($hasil->num_rows()> 0){
            return $hasil->result();
        }else {

            return $hasil->result('');

            
        }

    }

}
?>