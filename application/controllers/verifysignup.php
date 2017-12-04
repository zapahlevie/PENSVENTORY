<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class VerifySignup extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('insert_model');
    }
    function index() {
        $this->load->library('form_validation');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $result = $this->insert_model->cek($username, $email);
        if($result)
        {
            $data['message'] = "Username or email already used.";
            $this->load->view('login_view', $data);
        }
        else
        {
            $data = array(
                'id' => 0,
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'hp' => $this->input->post('hp')
            );
            $this->insert_model->form_insert($data);
            $this->load->view('login_view');
        }
        
        
    }

}
?>