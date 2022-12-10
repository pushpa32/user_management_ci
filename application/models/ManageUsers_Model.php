<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ManageUsers_Model extends CI_Model
{
	public function getusersdetails()
	{
		$query = $this->db->select('id,username,email,status')
			->get('users');
		return $query->result();
	}
	//Getting particular user deatials on the basis of id	
	public function getuserdetail($id)
	{
		$ret = $this->db->select('id,username,email,status')
			->where('id', $id)
			->get('users');
		return $ret->row();
	}

	// Function for use deletion
	public function deleteuser($id)
	{
		$sql_query = $this->db->where('id', $id)
			->delete('users');
	}

	public function approvalFuntion($id, $stat)
	{
		$query = $this->db->query("UPDATE users SET status='$stat' WHERE id='$id'");
	}

}