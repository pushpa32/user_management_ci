<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{


    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run()) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $this->load->model('AdminModel');
            $validate = $this->AdminModel->validatelogin($email, $password);
            if ($validate) {
                $this->session->set_userdata('adminSession', $validate);
                return redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Invalid details. Please try again with valid details');
                redirect('admin/Dashboard');
            }

        } else {
            $this->load->view('admin/login');
        }
    }

    //function for logout
    public function logout()
    {
        $this->session->unset_userdata('adminSession');
        $this->session->sess_destroy();
        return redirect('admin/login');
    }

}