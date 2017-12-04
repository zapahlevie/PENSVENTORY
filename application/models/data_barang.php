<?php
class Data_barang extends CI_Model
{
    public function tampil_data($kode)
    {
        if ($kode=='all')
        {
            $query = $this->db->select('*, barang.id bid')
                ->from('barang')
                ->join('users', 'barang.id_user = users.id')
                ->get();
        }
        else if($kode=='')
        {
            $query = $this->db->select('*, barang.id bid')
                ->from('barang')
                ->join('users', 'barang.id_user = users.id')
                ->get();
        }
        else
        {
            $query = $this->db->select('*, barang.id bid')
                ->from('barang')
                ->where('nama LIKE' . "'%" . $kode . "%'")
                ->join('users', 'barang.id_user = users.id')
                ->get();
        }
        return $query->result();
    }
    public function tampil_data_user($id)
    {
        $this -> db -> where('id_user =' . "'" . $id . "'"); 
        $hasil=$this->db->get('barang');
        return $hasil->result();
    }
    
    public function tampil_data_user_filter($id, $kode)
    {
        $this -> db -> where('id_user =' . "'" . $id . "'");
        $this -> db -> where('nama LIKE' . "'%" . $kode . "%'");
        $hasil=$this->db->get('barang');
        return $hasil->result();
    }
}
?>