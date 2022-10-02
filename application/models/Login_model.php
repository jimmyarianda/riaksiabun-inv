<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model 
{
    
    private static $_table = 'user';

    public function check($usr_username) 
    {
        $this->db->where('usr_username', $usr_username);
        return $this->db->get(self::$_table);
    }
}