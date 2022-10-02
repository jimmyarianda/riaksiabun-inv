<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model
{
	
	private static $_table = 'barang';
    private static $_pk = 'id';
    
    // public function is_exist($where)
	// {
	// 	return $this->db->where($where)->get(self::$_table)->row_array();
	// }

	public function get_barang($where)
	{
		$query = $this->db
			->select('barang.*, user.*, jenis.*, satuan.*')
			->from(self::$_table)
			->join('user', 'user.usr_id = barang.id_user', 'inner')
			->join('jenis', 'jenis.id = barang.id_jenis', 'inner')
			->join('satuan', 'satuan.id = barang.id_satuan', 'inner')
			->where($where)
			->get();

		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return NULL;
		}
	}

	public function get_all_barang($tgl,$tgl2)
	{
		$query = $this->db
			->select('barang.jumlah as jumlah, barang.status as status, jenis.nama_jen as nama_jen, satuan.nama_sat as nama_sat')
			->from(self::$_table)
			// ->join('user', 'user.usr_id = barang.id_user', 'inner')
			->join('jenis', 'jenis.id = barang.id_jenis', 'inner')
			->join('satuan', 'satuan.id = barang.id_satuan', 'inner')
			->where ("date(barang.created_at) BETWEEN '$tgl' AND '$tgl2'")
			->get();

		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return NULL;
		}
	}

	// public function get_all_barang()
	// {
	// 	return $this->db->get(self::$_table)->result_array();
	// 	// return $this->db->get(self::$_table)->row();
	// }

	public function get_jenis()
	{
		return $this->db->get('jenis')->result_array();
	}

	public function get_satuan()
	{
		return $this->db->get('satuan')->result_array();
	}

	public function get_user()
	{
		return $this->db->get('user')->result_array();
	}

	public function insert($data)
	{
		return $this->db->insert(self::$_table, $data);
	}

	public function update($data, $id)
	{
		return $this->db->set($data)->where(self::$_pk, $id)->update(self::$_table);
	}

	public function delete($id)
	{
		return $this->db->delete(self::$_table, array('id' => $id));
	}
}