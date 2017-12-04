<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Barang extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        $this->load->helper(array('form'));
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $kode='all';
            $this->load->model('data_barang');
            $data['data_brg']=$this->data_barang->tampil_data($kode);
            $this->load->view('barang_view', $data);
        }
        else
        {
            redirect('login', 'refresh');
        }
    }
    
    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('barang', 'refresh');
    }
}
?>