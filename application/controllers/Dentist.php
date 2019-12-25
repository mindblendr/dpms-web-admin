<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dentist extends MY_Controller
{
	public function __construct()
	{
        parent::__construct();
		$this->data['scripts'][] = 'angular/main.js';
	}

	public function index()
	{
		$this->dentist();
	}

	public function dentist()
	{
        $this->active_page = 'dentist';
		$this->data['content'] = 'pages/dentist';
		$this->data['modals'][] = 'includes/modals/dentist_form';
		$this->data['scripts'][] = 'angular/controllers/dentist.js';
		$this->load->view('main_layout', $this->data);
	}
}
