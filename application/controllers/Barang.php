<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    private static $_table = 'view_barang';
    private static $_primaryKey = 'id';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
        $this->auth->restrict();
    }

    public function index()
    {
        $data['title'] = 'Barang - SIDKO';

        $data['content'] = 'dashboard/barang';
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
                array('db' => 'usr_nama', 'dt' => 'usr_nama'),
                array('db' => 'nama_jen', 'dt' => 'nama_jen'),
                array('db' => 'nama_sat', 'dt' => 'nama_sat'),
                array('db' => 'jumlah', 'dt' => 'jumlah'),
                array('db' => 'status', 'dt' => 'status'),
                array(
                    'db' => 'id',
                    'dt' => 'action',
                    'formatter' => function ($id) {
                        return '<a href="' . site_url('barang/edit/' . $id) . '" class="btn btn-success btn-sm mb-1"><i class="fas fa-edit"></i></a>
                                <a onclick="deleteConfirm(' . "'" . site_url('barang/delete/' . $id) . "'" . ')" href="#!" class="btn btn-danger btn-sm mb-1"><i class="fas fa-trash"></i></a>';
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

            $usr_nama = $this->input->post('usr_nama', TRUE);
            $nama_jen = $this->input->post('nama_jen', TRUE);
            $nama_sat = $this->input->post('nama_sat', TRUE);
            $jumlah = $this->input->post('jumlah', TRUE);
            $status = $this->input->post('status', TRUE);
            $created_at = date('Y-m-d H:i:s');
            
            $data = [
                'id_user' => $usr_nama,
                'id_jenis' => $nama_jen,
                'id_satuan' => $nama_sat,
                'jumlah' => $jumlah,
                'status' => $status,
                'created_at' => $created_at,
            ];
            
            $this->barang_model->insert($data);
            $this->session->set_flashdata('success', 'Barang berhasil ditambahkan.');
            redirect('barang');
        } else {
            $data['user'] = $this->barang_model->get_user();
            $data['jenis'] = $this->barang_model->get_jenis();
            $data['satuan'] = $this->barang_model->get_satuan();
            $data['title'] = 'Tambah Barang - SIDKO';
            $data['form_title'] = 'Tambah Barang';
            $data['content'] = 'dashboard/barang_form';
            $this->load->view('dashboard/index', $data);
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        $where = "barang.id = $id";
        $data['barang'] = $this->barang_model->get_barang($where);

        if (isset($_POST['simpan'])) {
            $data = [
                'id_user' => $this->input->post('usr_nama', TRUE),
                'id_jenis' => $this->input->post('nama_jen', TRUE),
                'id_satuan' => $this->input->post('nama_sat', TRUE),
                'jumlah' => $this->input->post('jumlah', TRUE),
                'status' => $this->input->post('status', TRUE)
            ];

            $this->barang_model->update($data, $id);
            $this->session->set_flashdata('success', 'Barang berhasil diperbarui.');
            redirect('barang');
        } else {
            $data['user'] = $this->barang_model->get_user();
            $data['jenis'] = $this->barang_model->get_jenis();
            $data['satuan'] = $this->barang_model->get_satuan();
            $data['title'] = 'Edit Satuan Barang - SIDKO';
            $data['form_title'] = 'Edit Satuan Barang';
            $data['content'] = 'dashboard/barang_edit_form';
            $data['action'] = site_url(uri_string()); // Mengambil URL yang aktif
            $this->load->view('dashboard/index', $data);
        }
    }

    public function delete($id = NULL)
    {
        $this->barang_model->delete($id);
        $this->session->set_flashdata('success', 'Barang berhasil dihapus.');
        redirect('barang');
    }
}
