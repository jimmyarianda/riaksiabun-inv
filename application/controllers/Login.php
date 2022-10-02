<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
    
    private static $_title = 'Login - SIDKO';

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->auth->auth();
    }
    
    public function index() 
    {
        $data['title'] = self::$_title;
        $data['content'] = 'login';
        $this->load->view('index', $data);
    }

    public function process() 
    {
    	$usr_username = $this->input->post('usr_username', TRUE);
    	$usr_password = $this->input->post('usr_password', TRUE);
    	
    	$check = $this->login_model->check($usr_username);
    	
    	if ($check->num_rows() > 0) {
    		$data = $check->row();
    		if (password_verify($usr_password, $data->usr_password)) {
                $sess_data = [];
                $sess_data['usr_id'] = $data->usr_id;
                $sess_data['usr_username'] = $data->usr_username;
                $sess_data['usr_nama'] = $data->usr_nama;
                $sess_data['usr_level'] = $data->usr_level;
                $sess_data['usr_loggedin'] = TRUE;
                $this->session->set_userdata($sess_data);

                if ($data->usr_level === 'Admin') {
                    redirect('dashboard', 'refresh');
                } elseif ($data->usr_level === 'User') {
                    redirect('udashboard', 'refresh');
                } 
    		} else {
    			$this->session->set_flashdata('error', 'Username atau password yang Anda masukkan salah, silahkan coba lagi.');
    			redirect('login', 'refresh');
    		}
    	} else {
    		$this->session->set_flashdata('error', 'Username atau password yang Anda masukkan salah, silahkan coba lagi.');
    		redirect('login', 'refresh');
    	}
    }
}