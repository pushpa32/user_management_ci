<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('adminSession'))
            redirect('admin/login');
    }

    public function index()
    {
        $this->load->model('ManageUsers_Model');
        $user = $this->ManageUsers_Model->getusersdetails();
        $this->load->view('admin/users', ['userdetails' => $user]);
    }

}