<?php
defined('BASEPATH') OR exit ('No Direct Script Access Allowed!');

class Post_model extends CI_Model {

	function read($where="", $order=""){
		if( !empty($where) ) $this->db->where($where);
		if( !empty($order) ) $this->db->where($order);

		$id_resep = $this->input->get('id_resep');

		$this->db->select('*');
		$this->db->from('t_user');
		$this->db->join('t_resep', 't_user.username = t_resep.username');
		$this->db->where('t_resep.id_resep', $id_resep);
		$query = $this->db->get();
		if($query AND $query->num_rows() != 0){
			return $query->result();
		} else {
			return array();
		}
	}

	function create($data){
		$this->db->insert("t_resep", $data);
	}

}
