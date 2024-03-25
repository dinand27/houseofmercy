<?php
class User_model extends CI_Model
{
    public function ambil_data($id)
    {
        $this->db->where('username', $id);
        return $this->db->get('user')->row();

    }

    public function tampil_anggota($id)
    {
      $this->db->select('*');
      $this->db->from('perorangan p');
      $this->db->where('p.komsel_id',$id);
      $query= $this->db->get();
      return $query->result();
    }

    public function tampil_absensi($id){
      $this->db
      ->select('*')
      ->from('absensi a')
      ->where('a.id_komsel',$id);
      $query= $this->db->get();
      return $query->result();
    }

}
?>
