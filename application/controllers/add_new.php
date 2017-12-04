<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Add_new extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('add_model');
    }
    function index() {
        $session_data = $this->session->userdata('logged_in');
        $this->load->library('upload');
        
        $nmfile = "file_".time();
        $config['upload_path'] = './img/barang';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size'] = '10000';
        $config['max_width']  = '2048';
        $config['max_height']  = '1024';
        $config['file_name'] = $nmfile;
 
        $this->upload->initialize($config);
        $_FILES['gambar']['name'];
        $this->upload->do_upload('gambar');
        $gbr = $this->upload->data();
        
        $nama = $this->input->post('nama');
        $jumlah = $this->input->post('jumlah');
        $harga = $this->input->post('harga');
        $deskripsi = $this->input->post('deskripsi');
        $gambar = $gbr['file_name'];
        $id_user = $session_data['id'];
        $data = array(
            'id' => 0,
            'nama' => $nama,
            'jumlah' => $jumlah,
            'harga' => $harga,
            'gambar' => $gambar,
            'deskripsi' => $deskripsi,
            'id_user' => $id_user
        );
        $this->add_model->form_add($data);
        redirect('cloud', 'refresh');
    }   
}
?>