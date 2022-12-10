<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('userSession'))
			redirect('user/login');
	}
	public function index()
	{
		$userid = $this->session->userdata('userSession');
		$this->load->view('user/dashboard');

	}

}