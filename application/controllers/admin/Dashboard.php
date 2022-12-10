<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('adminSession'))
            redirect('admin/login');
    }

    public function index()
    {
        $this->load->model('Admin_Dashboard_Model');
        $userCount = $this->Admin_Dashboard_Model->userCount();
        $this->load->view('admin/dashboard', ['userCount' => $userCount]);
    }
}