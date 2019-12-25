<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->data['site_title'] = 'DPMS';
		
		$this->data['scripts'][] = 'angular/angular.min.js';
		$this->data['scripts'][] = 'angular/angular-cookies.min.js';
		$this->data['scripts'][] = 'angular/init.js';

		if (isset($_COOKIE['session_user'])) {
			if ($_SERVER['REQUEST_URI'] == '/auth') {
				redirect('/', 'refresh');
			}
		} else {
			if ($_SERVER['REQUEST_URI'] != '/auth') {
				redirect('/auth', 'refresh');
			}
		}
	}
}