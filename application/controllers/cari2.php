<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cari2 extends CI_Controller
{
    function index()
    {
        $session_data = $this->session->userdata('logged_in');
        $this->load->model('data_barang','',TRUE);
        $this->load->helper(array('form'));
        $kode = $this->input->post('cari');
        $data['id'] = $session_data['id'];
        $data['username'] = $session_data['username'];
        $data['data_brg']=$this->data_barang->tampil_data_user_filter($data['id'], $kode); 
        $this->load->view('cloud_view', $data);
    }
}
?>