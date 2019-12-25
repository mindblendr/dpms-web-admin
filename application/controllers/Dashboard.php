<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
	public function __construct()
	{
        parent::__construct();
		$this->data['scripts'][] = 'angular/main.js';
	}

	public function index()
	{
		$this->dashboard();
	}

	public function auth()
	{
		$this->data['scripts'][] = 'angular/auth.js';
		$this->load->view('auth_layout', $this->data);
	}

	public function dashboard()
	{
        $this->active_page = 'dashboard';
		$this->data['content'] = 'pages/dashboard';
		$this->data['scripts'][] = 'angular/dashboard.js';
		$this->load->view('main_layout', $this->data);
	}
}
