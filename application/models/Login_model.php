<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function check_login($table, $user){
		return $this->db->get_where($table, $user);
	}

	function get_user_info($username){
		$this->db->select('id_user, username, nama_user, status, jenis_user, admin_user');
		$this->db->where('username', $username);
		return $this->db->get('m_user');
	}

}