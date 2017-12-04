<?php
class insert_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    function form_insert($data){
       $this->db->insert('users', $data);  
    }
    function cek($username, $email)
	{
		$this -> db -> select('username, email');
		$this -> db -> from('users');
		$this -> db -> where('username = ' . "'" . $username . "'".'OR email= ' . "'" . $email . "'"); 
		$query = $this -> db -> get();
		if($query -> num_rows() == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>
