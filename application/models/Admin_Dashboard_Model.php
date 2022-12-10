<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_Dashboard_Model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('adminSession'))
            redirect('admin/login');
    }

    public function userCount()
    {
        $query = $this->db->select('id')
            ->get('users');
        return $query->num_rows();
    }
}