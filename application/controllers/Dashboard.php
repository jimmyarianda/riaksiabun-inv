<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');
        $this->auth->restrict();
        $this->auth->not_admin();
	}

	public function index()
	{
		// Total Barang
        $data['barang'] = count($this->dashboard_model->get_barang());

        // Barang Masuk
        $data['jenis'] = count($this->dashboard_model->get_jenis());

        // Barang Keluar
        $data['satuan'] = count($this->dashboard_model->get_satuan());

        // Barang Keluar
        $data['user'] = count($this->dashboard_model->get_user());

		$data['title'] = 'Dashboard - SIDKO';
        $data['content'] = 'dashboard/home';
        $this->load->view('dashboard/index', $data);
	}
}