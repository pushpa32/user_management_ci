<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Manage_Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('adminSession'))
            redirect('admin/login');
    }

    public function index()
    {
        // $this->load->model('ManageUsers_Model');
        // $user = $this->ManageUsers_Model->getusersdetails();
        // $this->load->view('admin/manage_users', ['userdetails' => $user]);
        $this->load->view('admin/users');
    }

    // For particular Record
    public function getuserdetail($id)
    {
        $this->load->model('ManageUsers_Model');
        $udetail = $this->ManageUsers_Model->getuserdetail($id);
        $this->load->view('admin/getuserdetails', ['udetail' => $udetail]);
    }

    public function deleteuser($id)
    {
        $this->load->model('ManageUsers_Model');
        $this->ManageUsers_Model->deleteuser($id);
        $this->session->set_flashdata('success', 'User data deleted');
        redirect('admin/Users');
    }

    public function giveapproval($id)
    {
        $this->load->model('ManageUsers_Model');
        $this->ManageUsers_Model->approvalFuntion($id, '1');
        $this->session->set_flashdata('success', 'Approved');
        redirect('admin/Users');
    }


    public function loadregisterpage()
    {
        $this->load->view('admin/registration');
    }

    public function registeruser()
    {
        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $data = array(
                'username' => $username,
                'email' => $email,
                'password' => sha1($password),
                'status' => '0'
            );

            $this->load->model('UserModel');
            $this->UserModel->insertuser($data);
            $this->session->set_flashdata('success', 'Successfully User Created');
            $this->load->view('admin/registration');
        } else {
            $this->load->view('admin/registration');
        }
    }


}