<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller
{
	public function __construct()
	{
        parent::__construct();
	}

	public function index()
	{
		$this->auth();
	}

	public function auth()
	{
		$this->data['scripts'][] = 'angular/auth.js';
		$this->load->view('auth_layout', $this->data);
	}
}
