<?php 
class Jemaat_model extends CI_Model
{
	   public function tampil_data($table)
    {
        return $this->db->get($table);
    }

    public function tampil_angkel(){
        $this->db->select('*');
        $this->db->from('anggota_keluarga');
        $this->db->order_by('id_kep');
        $query= $this->db->get();
        return($query);
    }

    

    public function search_by_id($keyword){
        $this->db->select('*');
        $this->db->from('data_perorangan');
        $this->db->like('nama',$keyword);
        $this->db->or_like('nama_lengkap',$keyword);
        return $this->db->get()->result();
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
        $hasil= $this->db->where('nomor_kaj',$id)->get('kepala_keluarga');
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
