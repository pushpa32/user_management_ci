<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{

    public function index()
    {
        $this->load->view('user/login');
    }

    public function loginFunction()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $password = sha1($password);
            $stat = 1;

            $this->load->model('UserModel');
            $status = $this->UserModel->checkPassword($password, $email);
            if ($status != false) {
                $username = $status->username;
                $email = $status->email;

                $session_data = array(
                    'username' => $username,
                    'email' => $email,
                );
                $this->session->set_userdata('userSession', $session_data);
                return redirect(base_url('user/dashboard'));
            } else {
                $this->session->set_flashdata('error', 'Email or Password is Wrong');
                return redirect('user/login');
            }

        } else {
            $this->session->set_flashdata('error', 'Fill all the required fields');
            redirect(base_url('user/login'));
        }
    }


    //function for logout
    public function logout()
    {
        $this->session->unset_userdata('userSession');
        $this->session->sess_destroy();
        return redirect('user/login');
    }

}