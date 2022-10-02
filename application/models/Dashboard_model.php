<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model 
{

	private static $_table = 'barang';

	public function get_barang()
	{
		return $this->db->get(self::$_table)->result();
	}

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

	// public function masuk($mas)
	// {
	// 	return $this->db->where($mas)->get(self::$_table)->result();
	// }

	// public function keluar($kel)
	// {
	// 	return $this->db->where($kel)->get(self::$_table)->result();
	// }
}	
