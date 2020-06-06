<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_model extends CI_Model {
	public function insert_log($data){
		$query = $this->db->insert('log_activities', $data);
		return $query;
	}
}