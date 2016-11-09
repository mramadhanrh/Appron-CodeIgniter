<?php
	defined('BASEPATH') OR exit ('No direct script access allowed');

	class Post extends CI_Controller
	{
		function index(){
			$this->load->model("Post_model");
			$data['result'] = $this->Post_model->read();
			$data['view'] = "v_post";
			$this->load->view("index", $data);
			$this->load->model("post_model");
		}
	}