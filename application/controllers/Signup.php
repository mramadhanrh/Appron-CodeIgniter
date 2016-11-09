<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Signup extends CI_Controller
	{
		
		function index() {
			$data['view'] = "v_signup";
			$this->load->view("index", $data);
		}
	}
