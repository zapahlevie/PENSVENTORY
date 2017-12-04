<?php
class insert_transaksi extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    function form_insert($data){
       $this->db->insert('peminjaman', $data);  
    }
}
?>
