<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis extends CI_Controller
{
    private static $_table = 'jenis';
    private static $_primaryKey = 'id';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('jenis_model');
        $this->auth->restrict();
    }

    public function index()
    {
        $data['title'] = 'Jenis Barang - SIDKO';

        $data['content'] = 'dashboard/jenis';
        $this->load->view('dashboard/index', $data);
    }

    public function get_data()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $this->load->library('datatables_ssp');

            $columns = array(
                array('db' => 'id', 'dt' => 'id'),
                array('db' => 'nama_jen', 'dt' => 'nama_jen'),
                array('db' => 'deskripsi_jen', 'dt' => 'deskripsi_jen'),
                array(
                    'db' => 'id',
                    'dt' => 'action',
                    'formatter' => function ($id) {
                        return '<a href="' . site_url('jenis/edit/' . $id) . '" class="btn btn-success btn-sm mb-1"><i class="fas fa-edit"></i></a>
                                <a onclick="deleteConfirm(' . "'" . site_url('jenis/delete/' . $id) . "'" . ')" href="#!" class="btn btn-danger btn-sm mb-1"><i class="fas fa-trash"></i></a>';
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

            $nama_jen = $this->input->post('nama_jen', TRUE);
            $deskripsi_jen = $this->input->post('deskripsi_jen', TRUE);
            
            $data = [
                'nama_jen' => $nama_jen,
                'deskripsi_jen' => $deskripsi_jen,
            ];
            

            $this->jenis_model->insert($data);
            $this->session->set_flashdata('success', 'Jenis barang berhasil ditambahkan.');
            redirect('jenis');
        } else {
            $data['title'] = 'Tambah Jenis Barang - SIDKO';
            $data['form_title'] = 'Tambah Jenis Barang';
            $data['content'] = 'dashboard/jenis_form';
            $this->load->view('dashboard/index', $data);
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        $where = "id = $id";
        $data['jenis'] = $this->jenis_model->get_jenis($where);

        if (isset($_POST['simpan'])) {
            $data = [
                'nama_jen' => $this->input->post('nama_jen', TRUE),
                'deskripsi_jen' => $this->input->post('deskripsi_jen', TRUE)
            ];

            $this->jenis_model->update($data, $id);
            $this->session->set_flashdata('success', 'Jenis Barang berhasil diperbarui.');
            redirect('jenis');
        } else {
            $data['title'] = 'Edit Jenis Barang - SIDKO';
            $data['form_title'] = 'Edit Jenis Barang';
            $data['content'] = 'dashboard/jenis_edit_form';
            $data['action'] = site_url(uri_string()); // Mengambil URL yang aktif
            $this->load->view('dashboard/index', $data);
        }
    }

    public function delete($id = NULL)
    {
        $this->jenis_model->delete($id);
        $this->session->set_flashdata('success', 'Jenis Barang berhasil dihapus.');
        redirect('jenis');
    }
}
