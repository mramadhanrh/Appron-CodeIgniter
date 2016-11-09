	<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

	class Login extends CI_Controller
	{
		function index(){
			//Ambil feedback success dan error
			$data['success'] = $this->session->flashdata("success");
			$data['error'] = $this->session->flashdata("error");
			
			$this->load->view("v_login", $data);
		}

		function do_login(){
			//Ambil post dengan nama username dan password
			$username = $this->input->post("username");
			$password = $this->input->post("password");

			//Ambil data berdasarkan WHERE username = 'xxx' dan password = md5('xxx')
			$where = array(
				"username" => $username,
				"password" => sha1($password)
			);

			$this->load->model("login_model");
			$result = $this->login_model->read($where);

			//jika data di temukan (jumlah data tidak sama dengan nol)
			if (count($result) != 0) {
				//Login Berhasil
				//Set session untuk user yang login
				//Set session yang menggunakan syntax di bawah ini
				//$this->session->set_userdata("nama_session", $value)

				$this->session->set_userdata("username", $username);
				$this->session->set_userdata("isLogin", true);
				$level = $result[0]->level;
				$foto = $result[0]->foto_profile;
				$this->session->set_userdata("level", $level);
				$this->session->set_userdata("foto", $foto);

				//Jika login berhasil, arahkan ke controller home
				redirect("home");

			}else{
				//Feedback, informasi login gagal karena username/password salah
				$this->session->set_flashdata("error", "Username atau password salah");

				//Jika login gagal, arahkan ke controller login
				redirect("login");
			}

					
		}
		function logout(){
				$this->session->sess_destroy();
				redirect("login");
			}			
	}