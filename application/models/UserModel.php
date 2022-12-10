<?php

class UserModel extends CI_Model
{

	function insertuser($data)
	{
		$this->db->insert('users', $data);
	}

	function checkPassword($password, $email)
	{
		$query = $this->db->query("SELECT * FROM users WHERE password='$password' AND email='$email' AND status='1'");
		if ($query->num_rows() == 1) {
			return $query->row();
		} else {
			return false;
		}

	}

	public function validateloginUser($email, $password, $status)
	{

		$query = $this->db->where(['email' => $email, 'password' => $password]);
		$account = $this->db->get('users')->row();
		if ($account != NULL) {
			$dbstatus = $account->status;

			//verifying status
			if ($dbstatus == $status) {
				return $account->id;
			} else {
				return NULL;
				// $this->session->set_flashdata('error', 'Your accounis is not active contact admin');
				// redirect('user/login');
			}
		}
		return NULL;
	}

}