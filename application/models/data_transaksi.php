<?php
class data_transaksi extends CI_Model
{
    public function tampil($id)
    {
        $query = $this->db->select('*, peminjaman.jumlah jml')
                ->from('peminjaman')
                ->where('peminjaman.id_user =' . "'" . $id . "'")
                ->join('users', 'peminjaman.id_peminjam = users.id')
                ->join('barang', 'peminjaman.id_barang = barang.id')
                ->get();
        return $query->result();
    }
}
?>