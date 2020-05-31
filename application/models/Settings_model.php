<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_model extends CI_Model {

	public function show_siswa($id = FALSE){
		if ($id === FALSE) {
			$hasil = $this->db->query("
			SELECT siswa.id_siswa AS ID, siswa.no_induk AS NO_INDUK, 
				siswa.nama_siswa AS NAMA, kelas.nama_kelas AS KELAS, status AS STATUS,
				siswa.jenis_pendidikan AS PENDIDIKAN
			FROM m_siswa siswa
			INNER JOIN m_kelas kelas ON siswa.id_kelas = kelas.id_kelas
			");
			return $hasil->result();
		} else {
			// $this->db->where('id_siswa', $id);
			// return $this->db->get('m_siswa');
			return $query = $this->db->select('m_siswa.*, m_agama.nama_agama')
			->from('m_siswa')
			->join('m_agama', 'm_siswa.agama = m_agama.id')
			->where('id_siswa', $id)->get();
		}
	}

	public function show_wali($id){
		/*$this->db->where('id_siswa', $id);
		return $this->db->get('m_wali');*/
		return $query = $this->db->select('m_wali.*, m_agama.nama_agama')
			->from('m_wali')
			->join('m_agama', 'm_wali.agama_wali = m_agama.id')
			->where('id_siswa', $id)->get();
	}

	public function update_siswa($id_siswa, $data){
		$query = $this->db->where('id_siswa', $id_siswa)
		->set($data)
		->update('m_siswa');
		return $query;
	}

	public function dropdown_agama(){
		$hasil = $this->db->query("SELECT * FROM m_agama WHERE NOT id = '0'");
			return $hasil->result();
	}
}