<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AdminModel extends CI_Model
{
    public function validatelogin($email, $password)
    {
        $query = $this->db->where(['email' => $email, 'password' => $password]);
        $account = $this->db->get('admins')->row();
        if ($account != NULL) {

            return $account->id;
        }
        return NULL;
    }
}