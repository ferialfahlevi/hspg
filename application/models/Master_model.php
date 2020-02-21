<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model {

	public function list_pendidik(){
		$this->db->select('*')
		->from('m_pendidik')
		->order_by("nama_pendidik", "asc");

		$query = $this->db->get();
		return $query->result();
	}

	public function get_pendidik_detail($id_pendidik){
		$query = $this->db->select('*')
		->from('m_pendidik')
		->where('id_pendidik', $id_pendidik)->get();

		if ($query->num_rows()>0) {
			foreach ($query->result() as $data) {
				$hasil = array(
					'id_pendidik' => $data->id_pendidik,
					'nik_pendidik' => $data->nik_pendidik,
					'nama_pendidik' => $data->nama_pendidik,
					'jk_pendidik' => $data->jk_pendidik,
					'mata_pelajaran' => $data->mata_pelajaran,
					'alamat_pendidik' => $data->alamat_pendidik,
					'telp_pendidik' => $data->telp_pendidik,
					'email_pendidik' => $data->email_pendidik
				);
			}
		}
		return $hasil;
	}

	public function list_siswa(){
		$this->db->select('m_siswa.id_siswa, m_siswa.nama_siswa, m_siswa.no_induk, m_siswa.status, m_siswa.jenis_pendidikan, m_kelas.nama_kelas')
		->from('m_siswa')
		->join('m_kelas', 'm_siswa.id_kelas = m_kelas.id_kelas')
		// ->order_by("m_siswa.nama_siswa", "asc")
		->order_by("m_siswa.nama_siswa", "asc");

		$query = $this->db->get();
		return $query->result();
	}

	public function get_siswa_detail($id_siswa){
		$query = $this->db->select('*')
		->from('m_siswa')
		->join('m_kelas', 'm_siswa.id_kelas = m_kelas.id_kelas')
		->where('id_siswa', $id_siswa)->get();

		if ($query->num_rows()>0) {
			foreach ($query->result() as $data) {
				$hasil = array(
					'id_siswa' => $data->id_siswa,
					'nama_siswa' => $data->nama_siswa,
					'no_induk' => $data->no_induk,
					'id_kelas' => $data->id_kelas,
					'nama_kelas' => $data->nama_kelas,
					'jk_siswa' => $data->jk_siswa,
					'agama' => $data->agama,
					'gol_darah' => $data->gol_darah,
					'tempat_lahir' => $data->tempat_lahir,
					'tanggal_lahir' => $data->tanggal_lahir,
					'alamat_siswa' => $data->alamat_siswa,
					'kota' => $data->kota,
					'kd_pos' => $data->kd_pos,
					'provinsi' => $data->provinsi,
					'kecamatan' => $data->kecamatan,
					'kelurahan' => $data->kelurahan,
					'nama_ayah' => $data->nama_ayah,
					'tempat_lahir_ayah' => $data->tempat_lahir_ayah,
					'tanggal_lahir_ayah' => $data->tanggal_lahir_ayah,
					'agama_ayah' => $data->agama_ayah,
					'no_hp_ayah' => $data->no_hp_ayah,
					'pekerjaan_ayah' => $data->pekerjaan_ayah,
					'nama_ibu' => $data->nama_ibu,
					'tempat_lahir_ibu' => $data->tempat_lahir_ibu,
					'tanggal_lahir_ibu' => $data->tanggal_lahir_ibu,
					'agama_ibu' => $data->agama_ibu,
					'no_hp_ibu' => $data->no_hp_ibu,
					'pekerjaan_ibu' => $data->pekerjaan_ibu,
					'telp' => $data->telp,
					'email' => $data->email,
					'status' => $data->status,
					'jenis_pendidikan' => $data->jenis_pendidikan,
					'tahun_masuk' => $data->tahun_masuk
				);
			}
		}
		return $hasil;
	}

	public function update_siswa($no_induk, $data){
		$query = $this->db->where('no_induk', $no_induk)
		->set($data)
		->update('m_siswa');
		return $query;
	}

	public function insert_siswa($data){
		$query = $this->db->insert('m_siswa', $data);
		return $query;
	}

	public function list_periode(){
		$this->db->select('*')
		->from('m_periode');

		$query = $this->db->get();
		return $query->result();
	}
}