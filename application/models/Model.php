<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model extends CI_Model
{
    public function tampil($table)
    {
        return $this->db->get($table)->result_array();
    }

    public function login($table, $where)
    {
        return $this->db->get_where($table, $where)->result_array();
    }

    public function input($table, $data)
    {
        $this->db->insert($table, $data);
    }
}
