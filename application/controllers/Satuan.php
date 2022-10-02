<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Satuan extends CI_Controller
{
    private static $_table = 'satuan';
    private static $_primaryKey = 'id';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('satuan_model');
        $this->auth->restrict();
    }

    public function index()
    {
        $data['title'] = 'Satuan Barang - SIDKO';

        $data['content'] = 'dashboard/satuan';
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
                array('db' => 'nama_sat', 'dt' => 'nama_sat'),
                array('db' => 'deskripsi_sat', 'dt' => 'deskripsi_sat'),
                array(
                    'db' => 'id',
                    'dt' => 'action',
                    'formatter' => function ($id) {
                        return '<a href="' . site_url('satuan/edit/' . $id) . '" class="btn btn-success btn-sm mb-1"><i class="fas fa-edit"></i></a>
                                <a onclick="deleteConfirm(' . "'" . site_url('satuan/delete/' . $id) . "'" . ')" href="#!" class="btn btn-danger btn-sm mb-1"><i class="fas fa-trash"></i></a>';
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

            $nama_sat = $this->input->post('nama_sat', TRUE);
            $deskripsi_sat = $this->input->post('deskripsi_sat', TRUE);
            
            $data = [
                'nama_sat' => $nama_sat,
                'deskripsi_sat' => $deskripsi_sat,
            ];
            

            $this->satuan_model->insert($data);
            $this->session->set_flashdata('success', 'Satuan barang berhasil ditambahkan.');
            redirect('satuan');
        } else {
            $data['title'] = 'Tambah Satuan Barang - SIDKO';
            $data['form_title'] = 'Tambah Satuan Barang';
            $data['content'] = 'dashboard/satuan_form';
            $this->load->view('dashboard/index', $data);
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        $where = "id = $id";
        $data['satuan'] = $this->satuan_model->get_satuan($where);

        if (isset($_POST['simpan'])) {
            $data = [
                'nama_sat' => $this->input->post('nama_sat', TRUE),
                'deskripsi_sat' => $this->input->post('deskripsi_sat', TRUE)
            ];

            $this->satuan_model->update($data, $id);
            $this->session->set_flashdata('success', 'Satuan Barang berhasil diperbarui.');
            redirect('satuan');
        } else {
            $data['title'] = 'Edit Satuan Barang - SIDKO';
            $data['form_title'] = 'Edit Satuan Barang';
            $data['content'] = 'dashboard/satuan_edit_form';
            $data['action'] = site_url(uri_string()); // Mengambil URL yang aktif
            $this->load->view('dashboard/index', $data);
        }
    }

    public function delete($id = NULL)
    {
        $this->satuan_model->delete($id);
        $this->session->set_flashdata('success', 'Satuan Barang berhasil dihapus.');
        redirect('satuan');
    }
}
