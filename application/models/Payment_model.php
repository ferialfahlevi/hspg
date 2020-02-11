<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_model extends CI_Model {

	public function control_list($periode = FALSE){
		// $hasil=$this->db->query("SELECT * FROM invoice_control_list");
		if ($periode === FALSE) {
			$this->db->select('invoice_control_list.*, m_siswa.nama_siswa')
			->from('invoice_control_list')
			->join('m_siswa', 'invoice_control_list.no_induk = m_siswa.no_induk')
			->order_by("invoice_control_list.periode_control_list", "asc");
		} else {
			$this->db->select('invoice_control_list.*, m_siswa.nama_siswa')
			->from('invoice_control_list')
			->join('m_siswa', 'invoice_control_list.no_induk = m_siswa.no_induk')
			->where('invoice_control_list.periode_control_list', $periode)
			->order_by("m_siswa.nama_siswa", "asc");
		}

		$query = $this->db->get();
		return $query->result();
	}

	public function get_payment_by_siswa($no_induk, $periode_control_list) {
		$query = $this->db->select('invoice_control_list.*, m_siswa.nama_siswa')
		->from('invoice_control_list')
		->join('m_siswa', 'invoice_control_list.no_induk = m_siswa.no_induk')
		->where('invoice_control_list.no_induk', $no_induk)
		->where('invoice_control_list.periode_control_list', $periode_control_list)->get();

		if ($query->num_rows()>0) {
			foreach ($query->result() as $data) {
				$hasil = array(
					'id_control_list' => $data->id_control_list,
					'periode_control_list' => $data->periode_control_list,
					'no_induk' => $data->no_induk,
					'nama_siswa' => $data->nama_siswa,
					'pendaftaran' => $data->pendaftaran,
					'pangkal' => $data->pangkal,
					'heregistrasi' => $data->heregistrasi,
					'ujian' => $data->ujian,
					'kegiatan_1' => $data->kegiatan_1,
					'kegiatan_2' => $data->kegiatan_2,
					'spp_juli' => $data->spp_juli,
					'spp_agustus' => $data->spp_agustus,
					'spp_september' => $data->spp_september,
					'spp_oktober' => $data->spp_oktober,
					'spp_november' => $data->spp_november,
					'spp_desember' => $data->spp_desember,
					'spp_januari' => $data->spp_januari,
					'spp_februari' => $data->spp_februari,
					'spp_maret' => $data->spp_maret,
					'spp_april' => $data->spp_april,
					'spp_mei' => $data->spp_mei,
					'spp_juni' => $data->spp_juni
				);
			}
		}
		return $hasil;
		
	}

	public function update_pembayaran($id_control_list, $data){
		$query = $this->db->where('id_control_list', $id_control_list)
		->set($data)
		->update('invoice_control_list');
		return $query;
	}

	public function approve_spp($id_control_list, $data){
		$query = $this->db->where('id_control_list', $id_control_list)
		->set($data)
		->update('invoice_control_list');
		return $query;
	}

	public function last_periode(){		
		$this->db->select('periode')
		->from('m_periode')
		->limit('1')
		->order_by('nama_periode', "DESC");

		$query = $this->db->get();
		return $query->result();
	}

	public function check($data){
		/*$this->db->select('*')
		->from('invoice_control_list')
		->where('no_induk', $no_induk)
		->where('periode_control_list', $periode_control_list);

		$query = $this->db->get();
		return $query->result();*/
		return $this->db->get_where('invoice_control_list', $data);
	}

	/*$this->db->select('username, nama_user, status, jenis_user, admin_user');
		$this->db->where('username', $username);
		return $this->db->get('m_user');*/
}