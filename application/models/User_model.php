<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    
    private static $_table = 'user';
    private static $_pk = 'usr_id';
    
    public function is_exist($where)
    {
        return $this->db->where($where)->get(self::$_table)->row_array();
    }

    public function get_user($where) 
    {
        return $this->db->where($where)->get(self::$_table)->row_array();
    }

    // public function get_userdosen($where) 
    // {
    //     $query = $this->db
    //                   ->select('user.*, fakultas.*, jurusan.*, dosen.*')
    //                   ->from(self::$_table)
    //                   ->join('dosen', 'dosen.d_id = user.usr_did', 'left')
    //                   ->join('fakultas', 'fakultas.f_id = dosen.d_fid', 'left')
    //                   ->join('jurusan', 'jurusan.j_id = dosen.d_jid', 'left')
    //           ->where($where)
    //           ->get();
        
    //     if ($query->num_rows() > 0) {
    //         return $query->row_array();
    //     } else {
    //         return NULL;
    //     }
    // }

    // public function check_user($usr_id)
    // {
    //     $this->db->where(self::$_pk, $usr_id);
    //     return $this->db->get(self::$_table);
    // }

    public function insert($data) 
    {
        return $this->db->insert(self::$_table, $data);
    }
    
    public function update($data, $usr_id) 
    {
        return $this->db->set($data)->where(self::$_pk, $usr_id)->update(self::$_table);
    }
}