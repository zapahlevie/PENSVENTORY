<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class proses extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('insert_transaksi');
    }
    function index() {
            $session_data = $this->session->userdata('logged_in');
            $id_user = $session_data['id'];
            $data = array(
                'id' => 0,
                'id_peminjam' => $id_user,
                'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
                'tanggal_kembali' => $this->input->post('tanggal_kembali'),
                'jumlah' => $this->input->post('jumlah'),
                'id_user' => $this->input->post('id_user'),
                'id_barang' => $this->input->post('id_barang')
            );
            $this->insert_transaksi->form_insert($data);
            redirect('barang', 'refresh');
    }

}
?>