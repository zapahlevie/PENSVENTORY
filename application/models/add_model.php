<?php
class add_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    function form_add($data){
       $this->db->insert('barang', $data);  
    }
}
?>
