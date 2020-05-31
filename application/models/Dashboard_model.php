<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function show_active_student($parameter){
		if ($parameter == 'active') {
			$hasil = $this->db->query("SELECT COUNT(*) AS JUMLAH FROM m_siswa WHERE status = '1'");
			return $hasil->result();
		} else if ($parameter == 'all') {
			$hasil = $this->db->query("SELECT COUNT(*) AS JUMLAH FROM m_siswa");
			return $hasil->result();
		}
	}

	public function show_active_teacher(){
		$hasil = $this->db->query("SELECT COUNT(*) AS JUMLAH FROM m_pendidik WHERE status = '1'");
			return $hasil->result();
	}

	public function show_semester(){
		$hasil = $this->db->query("SELECT keterangan2 AS SEMESTER, keterangan AS ANGKA_SEMESTER FROM m_settings WHERE settings = 'semester' AND aktif = '1' LIMIT 1");
		return $hasil->result();
	}
}