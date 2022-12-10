<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Signup extends CI_Controller
{

    public function index()
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
            $this->load->view('user/dashboard');
        } else {
            $this->load->view('user/signup');
        }
    }

}