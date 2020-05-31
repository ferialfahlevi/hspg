<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {

	public function show_siswa($id = FALSE){
		if ($id === FALSE) {
			$hasil = $this->db->query("
			SELECT m_siswa.id_siswa AS ID, m_siswa.no_induk AS NO_INDUK, 
				m_siswa.nama_siswa AS NAMA, m_siswa.status AS STATUS,
				m_siswa.jenis_pendidikan AS PENDIDIKAN, m_kelas.kelas as KELAS
			FROM m_siswa
			INNER JOIN kelas ON m_siswa.id_siswa = kelas.id_siswa
			INNER JOIN m_kelas ON kelas.kode_kelas = m_kelas.id_kelas
			");
			return $hasil->result();
		} else {
			// $this->db->where('id_siswa', $id);
			// return $this->db->get('m_siswa');
			return $query = $this->db->select('m_siswa.*, m_agama.nama_agama, SUBSTRING(m_siswa.no_induk, 4, 2) as tahun_masuk, kelas.kode_kelas as kode_kelas, m_periode.periode as periode, kelas.semester as semester, m_kelas.nama_kelas as nama_kelas, m_kelas.sekolah as jenjang')
			->from('m_siswa')
			->join('kelas', 'm_siswa.id_siswa = kelas.id_siswa')
			->join('m_kelas', 'kelas.kode_kelas = m_kelas.id_kelas')
			->join('m_agama', 'm_siswa.agama = m_agama.id')
			->join('m_periode', 'kelas.periode = m_periode.id')
			->where('m_siswa.id_siswa', $id)->get();

			/*$this->db->select('*');
$this->db->from('blogs');
$this->db->join('comments', 'comments.id = blogs.id');
$this->db->join('authors', 'authors.id = comments.author_id');
			$hasil = $this->db->query("
			SELECT m_siswa.*, m_agama.nama_agama, SUBSTRING(m_siswa.no_induk, 4, 2) as tahun_masuk, kelas.kode_kelas as kode, m_kelas.nama_kelas as nama_kelas
			FROM m_siswa
			INNER JOIN m_agama ON m_siswa.agama = m_agama.id
			INNER JOIN kelas ON m_siswa.id_siswa = kelas.id_siswa
			INNER JOIN m_kelas ON kelas.kode_kelas = m_kelas.id_kelas
			WHERE m_siswa.id_siswa = '".$id."'
			");
			return $hasil->get();*/
		}
	}
	public function insert_kelas($no_induk){
		$hasil = $this->db->query("
			INSERT INTO kelas (id_siswa, kode_kelas, periode, semester) 
			SELECT id_siswa, kelas, 
			(SELECT id FROM m_periode ORDER BY id DESC LIMIT 1), 
			(SELECT keterangan FROM m_settings WHERE settings = 'semester' AND aktif = '1' LIMIT 1) 
			FROM m_siswa WHERE no_induk = '".$no_induk."'
			");
		return $hasil;
	}

	public function show_payment_siswa(){
		$hasil = $this->db->query("
			SELECT m_siswa.id_siswa AS ID, m_siswa.no_induk AS NO_INDUK, 
				m_siswa.nama_siswa AS NAMA, m_siswa.status AS STATUS,
				m_siswa.jenis_pendidikan AS PENDIDIKAN, m_kelas.kelas as KELAS
			FROM m_siswa
			INNER JOIN kelas ON m_siswa.id_siswa = kelas.id_siswa
			INNER JOIN m_kelas ON kelas.kode_kelas = m_kelas.id_kelas
			WHERE status = '1'
			");
			return $hasil->result();
	}

	public function show_pendidik($id_pendidik = FALSE){
		if ($id_pendidik === FALSE) {
			$hasil = $this->db->query("
			SELECT id_pendidik as ID, nik_pendidik as NIK, nama_pendidik as NAMA, status as STATUS
			FROM m_pendidik
			");
			return $hasil->result();
		} else {
			// $this->db->where('id_siswa', $id);
			// return $this->db->get('m_siswa');
			return $query = $this->db->select('m_siswa.*, m_agama.nama_agama')
			->from('m_siswa')
			->join('m_agama', 'm_siswa.agama = m_agama.id')
			->where('m_siswa.id_siswa', $id_pendidik)->get();
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

	public function dropdown_kelas(){
		$hasil = $this->db->query("SELECT id_kelas as ID_KELAS, nama_kelas as NAMA_KELAS FROM m_kelas WHERE NOT id = '0' ORDER BY id ASC");
		return $hasil->result();
	}

	public function generate_nik($kode_cabang, $jenjang, $current_year){
		$hasil = $this->db->query("
			SELECT CONCAT(SUBSTRING(s.no_induk, 10, 12)) AS LAST, 
			CONCAT('".$kode_cabang.".".$current_year.".".$jenjang.".') AS NIK, CONCAT(SUBSTRING(s.no_induk, 10, 12))+1 AS TOTAL
			FROM m_siswa s
			WHERE no_induk like '%.".$current_year.".%' and no_induk like '%.".$jenjang.".%' ORDER BY no_induk DESC LIMIT 1
			");
			// INNER JOIN m_kelas k ON s.id_kelas = k.id_kelas
		return $hasil->result();
	}

	public function insert_siswa($data){
		$query = $this->db->insert('m_siswa', $data);
		return $query;
	}

	public function update_siswa2($no_induk, $data){
		$query = $this->db->where('no_induk', $no_induk)
		->set($data)
		->update('m_siswa');
		return $query;
	}
}