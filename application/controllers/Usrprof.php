<?php
defined('BASEPATH') OR exit('No direct scriptm access allowed');

class Usrprof extends CI_Controller {
	// Constructor
	function __construct() {
		parent::__construct();
        $this->load->helper(array('form', 'url'));
        
		// Cek apakah ada session username
		$username = $this->session->userdata('username');
		
		
		// Jika tidak ada atau kosong, arahkan ke halaman login
		if (empty($username)) redirect("login");
    //    <!----->
/*        if($this->input->post("usrprof")){
            $this->model_get->do_upload();

            $this->adminPic();
        }else{
            $this->insertPicture();
        } */
		
		
        
	}
	
	function index() {
		// Ambil feedback success dan error
		$data['success'] = $this->session->flashdata("success");
		$data['error'] = $this->session->flashdata("error");
		
		$this->load->model("usrprof_model");
		$data['result'] = $this->usrprof_model->read("username = '".$this->session->userdata('username')."' ");
	
		$data['level'] = $this->session->userdata('level');
        
        $this->db->where("username = '".$this->session->userdata('username')."' ");
        $usr_tmp = $this->db->get("t_user");
        $usr_tmp1 = $usr_tmp->result();
        $usr_tmp2 = $usr_tmp1[0]->fullname;
        $id_user = $usr_tmp1[0]->id_user;
        
        $data['usr']  = $usr_tmp2;
        $data['foto_profile']  = $usr_tmp1[0]->foto_profile;
        $data['id_user']  = $id_user;
		
		
        //$this->load->view('v_usrprof', array('error' => ' ' ));
        
        $this->gallery_path = realpath(APPPATH . '../upload');
		$this->gallery_path_url = base_url() . '../upload';
		$this->load->helper(array('url', 'html', 'form'));
		//Cek session username
		$username = $this->session->userdata('username');
		
        $data['view'] = "usrprof/v_usrprof";
		$this->load->view("index", $data);
        
	}
    
/*    public function do_upload() {
                $config['upload_path'] = FCPATH . '../assets/images/'; 
                $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
                $config['max_size'] = '2048'; 
                $config['max_width']  = '1024';
                $config['max_height']  = '768'; 
                $config['overwrite'] = TRUE;

                $this->load->library("upload", $config);
                $this->upload->do_upload();
        
                
//                $config['upload_path']          = './upload/';
  //              $config['allowed_types']        = 'gif|jpg|png';
    //            $config['max_size']             = 10000;
      //          $config['max_width']            = 1900;
        //        $config['max_height']           = 1080;

          //      $this->load->library('upload', $config);

            //    if ( ! $this->upload->do_upload('usrprof')) {
              //          $error = array('error' => $this->upload->display_errors());
//
  //                      $this->load->view('v_form', $error);
    //            }
      //          else
        //        {
          //              $data = array('upload_data' => $this->upload->data());

//                        $this->load->view('upload_success', $data);
        redirect("usrprof");
                }
        } */
	
	function tambah() {
		$data['view'] = "usrprof/v_form";
		$this->load->view("index", $data);
        
/*        @mkdir('Upload');
        error_reporting(0);
        include "connection.php";
        $nama_file = $_FILES['dokumen']['name'];
        $sumber = $_FILES['dokumen']['tmp_name'];
        $target = "Upload/$nama_file";
        move_uploaded_file($sumber, $target.$nama_file); */
    }
	
/*	function do_tambah() {
		$post = $this->input->post(NULL, TRUE);
		$this->load->model("usrprof_model");
            $this->flight_model->create($post);
            $this->session->set_flashdata("success", "Berhasil menambahkan data");
		      //Mengarahkan ke suatu halaman
		      redirect("usrprof");   
        
        $get    = $this->input->get(NULL, TRUE);
        $foto   = $_FILES['foto']['name'];
        $path   = 'upload' . $foto;
        $get['foto'] = $path;
        $this->load->model("usrprof_model");
        $this->usrprof_model->create($get);
        
        $foto_temp = $_FILES['foto']['tmp_name'];
        move_uploaded_file(foto_temp, $path);
        $this->session->set_flashdata("success", "Data berhasil ditambahkan");
        redirect("usrprof");
        
        
        $post = $this->input->post(NULL, TRUE);
		$foto = $_FILES['foto']['name'];//nama foto
		$path = 'upload/' . $foto;//alamat foto
		$post['foto'] = $path;//gabung data 
		$this->load->model("usrprof_model");
		$this->usrprof_model->create($post);
		//folder
		$foto_temp = $_FILES['foto']['tmp_name'];
		move_uploaded_file(foto_temp, $path);
		$this->session->set_flashdata("success", "Data Berhasil Ditambahkan");
		redirect("usrprof"); 
	} */
    
    function do_tambah() {
    //untuk ke db
    $post = $this->input->post(NULL, TRUE);
    $foto_profile = $_FILES['foto_profile']['name'];
    $path = 'upload/'.$foto_profile;
    $post['foto_profile'] = $path;
    $this->load->model("usrprof_model");
    if (!empty($this->usrprof_model->read("username'".$post['username']."'"))) {
        $this->session->set_flashdata("error", "Username '".$post['username']."' Sudah ada");
    } else {
        $this->usrprof_model->create($post);
        $this->session->set_flashdata("success", "Data berhasil ditambahkan");
    //untuk ke folder
    $tmp_foto_profile = $_FILES['foto_profile']['tmp_name'];
    move_uploaded_file($tmp_foto_profile, $path);
    }
    redirect("usrprof");
}
	
	function edit($id_user) {
		$this->load->model("usrprof_model");
		 
		
		// Mengambil data berdasarkan id (WHERE id=xxx)
		$result = $this->usrprof_model->read("id_user = '$id_user'");
		$data['form_edit']=TRUE;
		$data['result'] = @$result[0];
        
		$data['form_edit'] = TRUE;
		$data['view'] = "usrprof/v_form";
        
        $this->db->where("username = '".$this->session->userdata('username')."' ");
        $usr_tmp = $this->db->get("t_user");
        $usr_tmp1 = $usr_tmp->result();
        $usr_tmp2 = $usr_tmp1[0]->fullname;
        $id_user = $usr_tmp1[0]->id_user;
        
        $data['usr']  = $usr_tmp2;
        $data['foto_profile']  = $usr_tmp1[0]->foto_profile;
        $data['id_user']  = $id_user;
        
        $data['usr']  = $usr_tmp2;
        $data['id_user']  = $id_user;
        $data['usr']  = $usr_tmp2;
		
		$this->load->view("index",$data);
	}
	
	function do_edit($id_user) {
        $post = $this->input->post(NULL, TRUE);
        $foto_profile = $_FILES ['foto_profile']['name'];
        if(!empty($foto_profile)) {
            $path = 'upload/'.$foto_profile;
            $post['foto_profile'] = $path;
        }
		$this->load->model("usrprof_model");
		$this->usrprof_model->update("id_user ='$id_user'", $post);
        $tmp_foto_profile = $_FILES['foto_profile']['tmp_name'];
        move_uploaded_file($tmp_foto_profile, $path);
        
        
		$this->session->set_flashdata("success", "Berhasil mengubah data");
        
        redirect("usrprof");
	}
	
	function delete($id) {
		$this->load->model("usrprof_model");
		$this->flight_model->delete("id ='$id'");
		$this->session->set_flashdata("success", "Berhasil menghapus data");
		redirect("usrprof");
	}
    
    function profile($id) {
		$this->load->model("usrprof_model");
        
		$result = $this->usrprof_model->read("id = '$id'");

		$data['result'] = $result;

		$data['view'] = "usrprof/v_usrprof";
		$this->load->view("index",$data);
 	}
}