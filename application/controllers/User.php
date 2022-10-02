<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	
	private static $_title = 'Data User - Inventaris';
    private static $_table = 'user';
    private static $_primaryKey = 'usr_id';

	public function __construct()
	{
		parent::__construct();
        $this->load->model('user_model');
        $this->auth->restrict();
	}

	public function index()
	{
		$data['title'] = self::$_title;
        $data['content'] = 'dashboard/user';
        $this->load->view('dashboard/index', $data);
	}

    public function get_data()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $this->load->library('datatables_ssp');

            $columns = array(
                array('db' => 'usr_id', 'dt' => 'usr_id'),
                array('db' => 'usr_username', 'dt' => 'usr_username'),
                array('db' => 'usr_nama', 'dt' => 'usr_nama'),
                array('db' => 'usr_level', 'dt' => 'usr_level'),
                array(
                    'db' => 'usr_id',
                    'dt' => 'action',
                    'formatter' => function ($usr_id) {
                        return '<a href="' . site_url('user/edit/' . $usr_id) . '" class="btn btn-success btn-sm mb-1"><i class="fas fa-edit"></i></a>';
                    }
                )
            );

            $sql_details = [
                'user' => $this->db->username,
                'pass' => $this->db->password,
                'db' => $this->db->database,
                'host' => $this->db->hostname
            ];

            echo json_encode(
                Datatables_ssp::simple($_GET, $sql_details, self::$_table, self::$_primaryKey, $columns)
            );
        }
    }

	public function add()
	{
		if (isset($_POST['simpan'])) {
            $usr_username = $this->input->post('usr_username', TRUE);
            $where = "usr_username = '$usr_username'";

            $data = $this->user_model->is_exist($where);
            if (strtolower($data['usr_username']) === strtolower($this->input->post('usr_username', TRUE))) {
                $this->session->set_flashdata('error', 'Username sudah pernah disimpan.');
                $data['title'] = 'Tambah '.self::$_title;
                $data['form_title'] = 'Tambah Data User';
                $data['action'] = site_url(uri_string());
                $data['content'] = 'dashboard/user_form';
                $this->load->view('dashboard/index', $data);
            }else {
                $this->load->helper('string');

                $data = [
                    'usr_username' => $this->input->post('usr_username', TRUE),
                    'usr_password' => password_hash($this->input->post('usr_password', TRUE), PASSWORD_DEFAULT, ['cost' => 10]),
                    'usr_nama' => $this->input->post('usr_nama', TRUE),
                    'usr_level' => $this->input->post('usr_level', TRUE)
                ];

                $this->user_model->insert($data);
                $this->session->set_flashdata('success', 'Data User berhasil ditambahkan.');
                redirect('user');
            }
		} else {
            $data['title'] = 'Tambah '.self::$_title;
            $data['form_title'] = 'Tambah Data User';
            $data['action'] = site_url(uri_string());
            $data['content'] = 'dashboard/user_form';
            $this->load->view('dashboard/index', $data);
		}
	}

	public function edit()
	{
		$usr_id = $this->uri->segment(3);
        $where = "usr_id = $usr_id";
        $data['user'] = $this->user_model->get_user($where);

        if (isset($_POST['simpan'])) {
            $data = [
                'usr_username' => $this->input->post('usr_username', TRUE),
                'usr_password' => password_hash($this->input->post('usr_password', TRUE), PASSWORD_DEFAULT, ['cost' => 10]),
                'usr_nama' => $this->input->post('usr_nama', TRUE),
                'usr_level' => $this->input->post('usr_level', TRUE)
            ];

            $this->user_model->update($data, $usr_id);
            $this->session->set_flashdata('success', 'Data Kegiatan berhasil diperbarui.');
            redirect('user');
        } else {
            $data['title'] = 'Edit Data User';
            $data['form_title'] = 'Edit Data User';
            $data['content'] = 'dashboard/user_edit_form';
            $data['action'] = site_url(uri_string()); // Mengambil URL yang aktif
            $this->load->view('dashboard/index', $data);
        }
	}
}