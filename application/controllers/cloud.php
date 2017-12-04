<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Cloud extends CI_Controller {
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
            $data['id'] = $session_data['id'];
            $id=$data['id'];
            $this->load->model('data_barang');
            $data['data_brg']=$this->data_barang->tampil_data_user($id);
            $this->load->model('data_transaksi');
            $data['data_transaksi']=$this->data_transaksi->tampil($id);
            $this->load->view('cloud_view', $data);
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
        redirect('home', 'refresh');
    }
}
?>