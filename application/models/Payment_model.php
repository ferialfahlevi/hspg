<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_model extends CI_Model {

	public function show_spp($id, $periode){
		return $query = $this->db->query("
			SELECT p.id as ID, m_bulan.nama_bulan as BULAN2, m_bulan.singkat as SINGKAT,  m_payment.nama_payment as PEMBAYARAN, 
			FORMAT(p.jumlah, 0) as JUMLAH, FORMAT((p.jumlah - p.dibayar), 0) as KEKURANGAN, p.jumlah as JUMLAH2, p.status as STATUS, p.catatan as CATATAN, p.tanggal_dibayar as TANGGAL_DIBAYAR, 
			p.tanggal_dibuat as TANGGAL_DIBUAT
			FROM payment p
			INNER JOIN m_payment ON p.jenis_payment = m_payment.id
			INNER JOIN m_bulan ON p.bulan = m_bulan.id
			INNER JOIN m_periode ON p.id_periode = m_periode.id
			WHERE id_siswa = '".$id."' AND jenis_payment = '7' AND id_periode = '".$periode."'
			ORDER BY m_bulan.urutan ASC");
	}

	public function show_nama_siswa($id){
		return $query = $this->db->query("
			SELECT nama_siswa, id_siswa, status FROM m_siswa WHERE id_siswa = '".$id."'");
	}

	public function show_non_spp($id, $periode){
		return $query = $this->db->query("
			SELECT p.id as ID, m_payment.nama_payment as PEMBAYARAN, 
			FORMAT(p.jumlah, 0) as JUMLAH, FORMAT((p.jumlah - p.dibayar), 0) as KEKURANGAN, p.jumlah as JUMLAH2, p.status as STATUS, p.catatan as CATATAN, p.tanggal_dibayar as TANGGAL_DIBAYAR,
			p.tanggal_dibuat as TANGGAL_DIBUAT
			FROM payment p
			INNER JOIN m_payment ON p.jenis_payment = m_payment.id
			INNER JOIN m_bulan ON p.bulan = m_bulan.id
			INNER JOIN m_periode ON p.id_periode = m_periode.id
			WHERE id_siswa = '".$id."' AND NOT jenis_payment = '7' AND id_periode = '".$periode."'
			ORDER BY periode ASC, jenis_payment ASC");
	}

	public function show_periode($id, $periode){
		return $query = $this->db->query("
			SELECT m_periode.periode as PERIODE
			FROM payment p
			INNER JOIN m_payment ON p.jenis_payment = m_payment.id
			INNER JOIN m_bulan ON p.bulan = m_bulan.id
			INNER JOIN m_periode ON p.id_periode = m_periode.id
			WHERE id_siswa = '".$id."' AND jenis_payment = '7' AND id_periode = '".$periode."' LIMIT 1");
	}

	//PAYMENT ACTION
	public function set_lunas($id){
		$this->db->trans_start();
		$this->db->query("UPDATE payment set dibayar = jumlah, catatan = 'Sudah dibayar', status = '1', tanggal_dibayar = NOW() WHERE id = '".$id."'");
		$this->db->trans_complete();
		if ($this->db->affected_rows() == '1') {
			return true;
		} else {
    		// any trans error?
			if ($this->db->trans_status() === FALSE) {
				return false;
			}
			return true;
		}
		// return $hasil->result();
	}

	public function update_payment($id, $amount){
		$this->db->trans_start();
		$this->db->query("UPDATE payment set dibayar = dibayar+'".$amount."', catatan = 'Belum lunas' WHERE id = '".$id."'");
		$this->db->trans_complete();
		if ($this->db->affected_rows() == '1') {
			return true;
		} else {
    		// any trans error?
			if ($this->db->trans_status() === FALSE) {
				return false;
			}
			return true;
		}
	}

	public function reset_payment($id){
		$this->db->trans_start();
		$this->db->query("UPDATE payment SET dibayar = '0', catatan = 'Belum dibayar', status = '0', tanggal_dibayar = '0000-00-00' WHERE id = '".$id."'");
		$this->db->trans_complete();
		if ($this->db->affected_rows() == '1') {
			return true;
		} else {
    		// any trans error?
			if ($this->db->trans_status() === FALSE) {
				return false;
			}
			return true;
		}
	}

	public function delete_payment($id){
		/*$hasil = $this->db->query("
			DELETE FROM payment where id = '".$id."'");
		return $hasil->result();*/
	}

	public function delete_log_payment($id){
		$this->db->trans_start();
		$this->db->query("DELETE FROM log_payment where id_payment = '".$id."'");
		$this->db->trans_complete();
		if ($this->db->affected_rows() == '1') {
			return true;
		} else {
    		// any trans error?
			if ($this->db->trans_status() === FALSE) {
				return false;
			}
			return true;
		}
	}

	public function edit_payment($id, $jumlah){
		$this->db->trans_start();
		$this->db->query("UPDATE payment set jumlah = '".$jumlah."', tanggal_dibayar = NOW() WHERE id = '".$id."'");
		$this->db->trans_complete();
		if ($this->db->affected_rows() == '1') {
			return true;
		} else {
    		// any trans error?
			if ($this->db->trans_status() === FALSE) {
				return false;
			}
			return true;
		}
	}

	public function update_log_payment($data){
		$query = $this->db->insert('log_payment', $data);
		return $query;
	}

	//ARRAY
	public function get_payment($id){
		$hasil = $this->db->query("
			SELECT p.id_siswa as ID_SISWA, p.id as ID, m_periode.periode as PERIODE, m_payment.nama_payment as PEMBAYARAN, p.bulan as BULAN, m_bulan.nama_bulan as NAMA_BULAN, FORMAT(p.jumlah, 0) as JUMLAH, p.jumlah as JUMLAH2, FORMAT((p.jumlah - p.dibayar), 0) as KEKURANGAN, (p.jumlah - p.dibayar) as KEKURANGAN2, p.status as STATUS, p.catatan as CATATAN
			FROM payment p
			INNER JOIN m_payment ON p.jenis_payment = m_payment.id
			INNER JOIN m_bulan ON p.bulan = m_bulan.id
			INNER JOIN m_periode ON p.id_periode = m_periode.id
			WHERE p.id = '".$id."'");
		return $hasil->result();
	}	

	public function data_spp($id, $periode){
		$hasil = $this->db->query("
			SELECT p.id as ID, m_bulan.nama_bulan as BULAN2, m_bulan.singkat as SINGKAT,  m_payment.nama_payment as PEMBAYARAN, 
			FORMAT(p.jumlah, 0) as JUMLAH, FORMAT((p.jumlah - p.dibayar), 0) as KEKURANGAN, p.jumlah as JUMLAH2, p.status as STATUS, p.catatan as CATATAN, p.tanggal_dibayar as TANGGAL_DIBAYAR, 
			p.tanggal_dibuat as TANGGAL_DIBUAT
			FROM payment p
			INNER JOIN m_payment ON p.jenis_payment = m_payment.id
			INNER JOIN m_bulan ON p.bulan = m_bulan.id
			INNER JOIN m_periode ON p.id_periode = m_periode.id
			WHERE id_siswa = '".$id."' AND jenis_payment = '7' AND id_periode = '".$periode."'
			ORDER BY m_bulan.urutan ASC");
		return $hasil->result();
	}

	public function data_non_spp($id, $periode){
		$hasil = $this->db->query("
			SELECT p.id as ID, m_payment.nama_payment as PEMBAYARAN, 
			FORMAT(p.jumlah, 0) as JUMLAH, FORMAT((p.jumlah - p.dibayar), 0) as KEKURANGAN, p.jumlah as JUMLAH2, p.status as STATUS, p.catatan as CATATAN, p.tanggal_dibayar as TANGGAL_DIBAYAR,
			p.tanggal_dibuat as TANGGAL_DIBUAT
			FROM payment p
			INNER JOIN m_payment ON p.jenis_payment = m_payment.id
			INNER JOIN m_bulan ON p.bulan = m_bulan.id
			INNER JOIN m_periode ON p.id_periode = m_periode.id
			WHERE id_siswa = '".$id."' AND NOT jenis_payment = '7' AND id_periode = '".$periode."'
			ORDER BY periode ASC, jenis_payment ASC");
		return $hasil->result();
	}

	public function dropdown_periode(){
		$hasil = $this->db->query("SELECT * FROM m_periode ORDER BY id DESC");
		return $hasil->result();
	}
	public function latest_periode(){
		$hasil = $this->db->query("SELECT * FROM m_periode ORDER BY id DESC LIMIT 1");
		return $hasil->result();
	}

	public function get_log_payment($id_payment){
		$hasil = $this->db->query("SELECT id as ID, jenis_log as JENIS_LOG, FORMAT(nominal, 0) as NOMINAL, tanggal_log as TANGGAL_LOG, user as USER FROM  log_payment WHERE id_payment = '".$id_payment."' ORDER BY tanggal_log ASC");
		return $hasil->result();
	}

	//CHECK
	function check_periode($id_siswa, $id_periode)
	{
		$this->db->where('id_siswa', $id_siswa);
		$this->db->where('id_periode', $id_periode);
		$query = $this->db->get('payment');
		if ($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}

	//EXECUTE
	public function generate_periode($id_siswa, $id_periode){
		$this->db->query("INSERT INTO payment (id_siswa, id_periode, bulan, jenis_payment, dibuat_oleh) VALUES ('".$id_siswa."', '".$id_periode."', '0', '1', '".$_SESSION['logged_in']['username']."')");
		$this->db->query("INSERT INTO payment (id_siswa, id_periode, bulan, jenis_payment, dibuat_oleh) VALUES ('".$id_siswa."', '".$id_periode."', '0', '2', '".$_SESSION['logged_in']['username']."')");
		$this->db->query("INSERT INTO payment (id_siswa, id_periode, bulan, jenis_payment, dibuat_oleh) VALUES ('".$id_siswa."', '".$id_periode."', '0', '3', '".$_SESSION['logged_in']['username']."')");
		$this->db->query("INSERT INTO payment (id_siswa, id_periode, bulan, jenis_payment, jumlah, dibuat_oleh) VALUES ('".$id_siswa."', '".$id_periode."', '0', '4', '5000000', '".$_SESSION['logged_in']['username']."')");
		$this->db->query("INSERT INTO payment (id_siswa, id_periode, bulan, jenis_payment, jumlah, dibuat_oleh) VALUES ('".$id_siswa."', '".$id_periode."', '0', '5', '2500000', '".$_SESSION['logged_in']['username']."')");
		$this->db->query("INSERT INTO payment (id_siswa, id_periode, bulan, jenis_payment, jumlah, dibuat_oleh) VALUES ('".$id_siswa."', '".$id_periode."', '0', '6', '2500000', '".$_SESSION['logged_in']['username']."')");

		$this->db->query("INSERT INTO payment (id_siswa, id_periode, bulan, jenis_payment, dibuat_oleh) VALUES ('".$id_siswa."', '".$id_periode."', '1', '7', '".$_SESSION['logged_in']['username']."')");
		$this->db->query("INSERT INTO payment (id_siswa, id_periode, bulan, jenis_payment, dibuat_oleh) VALUES ('".$id_siswa."', '".$id_periode."', '2', '7', '".$_SESSION['logged_in']['username']."')");
		$this->db->query("INSERT INTO payment (id_siswa, id_periode, bulan, jenis_payment, dibuat_oleh) VALUES ('".$id_siswa."', '".$id_periode."', '3', '7', '".$_SESSION['logged_in']['username']."')");
		$this->db->query("INSERT INTO payment (id_siswa, id_periode, bulan, jenis_payment, dibuat_oleh) VALUES ('".$id_siswa."', '".$id_periode."', '4', '7', '".$_SESSION['logged_in']['username']."')");
		$this->db->query("INSERT INTO payment (id_siswa, id_periode, bulan, jenis_payment, dibuat_oleh) VALUES ('".$id_siswa."', '".$id_periode."', '5', '7', '".$_SESSION['logged_in']['username']."')");
		$this->db->query("INSERT INTO payment (id_siswa, id_periode, bulan, jenis_payment, dibuat_oleh) VALUES ('".$id_siswa."', '".$id_periode."', '6', '7', '".$_SESSION['logged_in']['username']."')");
		$this->db->query("INSERT INTO payment (id_siswa, id_periode, bulan, jenis_payment, dibuat_oleh) VALUES ('".$id_siswa."', '".$id_periode."', '7', '7', '".$_SESSION['logged_in']['username']."')");
		$this->db->query("INSERT INTO payment (id_siswa, id_periode, bulan, jenis_payment, dibuat_oleh) VALUES ('".$id_siswa."', '".$id_periode."', '8', '7', '".$_SESSION['logged_in']['username']."')");
		$this->db->query("INSERT INTO payment (id_siswa, id_periode, bulan, jenis_payment, dibuat_oleh) VALUES ('".$id_siswa."', '".$id_periode."', '9', '7', '".$_SESSION['logged_in']['username']."')");
		$this->db->query("INSERT INTO payment (id_siswa, id_periode, bulan, jenis_payment, dibuat_oleh) VALUES ('".$id_siswa."', '".$id_periode."', '10', '7', '".$_SESSION['logged_in']['username']."')");
		$this->db->query("INSERT INTO payment (id_siswa, id_periode, bulan, jenis_payment, dibuat_oleh) VALUES ('".$id_siswa."', '".$id_periode."', '11', '7', '".$_SESSION['logged_in']['username']."')");
		$this->db->query("INSERT INTO payment (id_siswa, id_periode, bulan, jenis_payment, dibuat_oleh) VALUES ('".$id_siswa."', '".$id_periode."', '12', '7', '".$_SESSION['logged_in']['username']."')");
	}

	public function show_heregistrasi($id_periode){
		$hasil = $this->db->query("
			SELECT p.id as ID, p.id_siswa as ID_SISWA, m_siswa.nama_siswa as NAMA, m_siswa.no_induk as NIS, 
			FORMAT(p.jumlah, 0) as HEREGISTRASI, FORMAT(p.dibayar, 0) as DIBAYAR, FORMAT((p.jumlah - p.dibayar), 0) as KEKURANGAN, m_siswa.jenis_pendidikan as JENIS_PENDIDIKAN
			from payment p
			inner join m_siswa on p.id_siswa = m_siswa.id_siswa
			where p.jenis_payment = '3' and p.id_periode = '".$id_periode."' order by nama_siswa ASC");
		return $hasil->result();
	}

	public function show_pendaftaran($id_periode){
		$hasil = $this->db->query("
			SELECT (SELECT id FROM payment f WHERE f.jenis_payment = '2' and f.id_periode = '".$id_periode."' and f.id_siswa = p.id_siswa LIMIT 1) as ID, m_siswa.nama_siswa as NAMA, m_siswa.no_induk as NIS, p.id_siswa as ID_SISWA,
			m_siswa.jenis_pendidikan as JENIS_PENDIDIKAN, FORMAT(p.dibayar, 0) as PENDAFTARAN, 
			(SELECT FORMAT(f.jumlah, 0) as PENDAFTARAN FROM payment f WHERE f.jenis_payment = '2' and f.id_periode = '".$id_periode."' and f.id_siswa = p.id_siswa LIMIT 1) as TOTAL_PANGKAL,
			(SELECT FORMAT(f.dibayar, 0) as PENDAFTARAN FROM payment f WHERE f.jenis_payment = '2' and f.id_periode = '".$id_periode."' and f.id_siswa = p.id_siswa LIMIT 1) as DIBAYAR_PANGKAL,
			(SELECT FORMAT(f.jumlah - f.dibayar, 0) as PENDAFTARAN FROM payment f WHERE f.jenis_payment = '2' and f.id_periode = '".$id_periode."' and f.id_siswa = p.id_siswa LIMIT 1) as KEKURANGAN_PANGKAL,
			(SELECT f.status FROM payment f WHERE f.jenis_payment = '2' and f.id_periode = '".$id_periode."' and f.id_siswa = p.id_siswa LIMIT 1) as STATUS
			from payment p
			inner join m_siswa on p.id_siswa = m_siswa.id_siswa
			where p.jenis_payment = '1' and p.id_periode = '".$id_periode."' order by nama_siswa ASC");
		return $hasil->result();
	}

	public function show_sum_heregistrasi($id_periode){
		$hasil = $this->db->query("
			SELECT 
			FORMAT(SUM(dibayar),0) AS TOTAL,
			FORMAT(SUM(jumlah - dibayar),0) AS KEKURANGAN, 
			FORMAT(SUM(jumlah),0) AS JUMLAH_HARUS_DIBAYAR 
			from payment where id_periode = '".$id_periode."' and jenis_payment = '3'");
		return $hasil->result();
	}

	public function show_sum_pendaftaran($id_periode){
		$hasil = $this->db->query("
			SELECT 
			(SELECT FORMAT(SUM(jumlah),0) from payment where id_periode = '5' and jenis_payment = '1') as TOTAL_PENDAFTARAN,
			(SELECT FORMAT(SUM(jumlah),0) from payment where id_periode = '5' and jenis_payment = '2') as TOTAL_PANGKAL,
			(SELECT FORMAT(SUM(jumlah - dibayar), 0) as PENDAFTARAN from payment where id_periode = '5' and jenis_payment = '2') as KEKURANGAN_PANGKAL
			from payment where id_periode = '".$id_periode."' and jenis_payment = '1' LIMIT 1");
		return $hasil->result();
	}

	public function show_unpaid($id_siswa, $id_periode){
		$hasil = $this->db->query("
			SELECT p.id as ID, p.id_periode as ID_PERIODE, m_periode.periode as PERIODE, 
			p.jenis_payment, m_payment.nama_payment as PEMBAYARAN, p.bulan as BULAN, m_bulan.nama_bulan as NAMA_BULAN,
			FORMAT(p.jumlah, 0) as JUMLAH, FORMAT((p.jumlah - p.dibayar), 0) as KEKURANGAN, p.catatan as CATATAN
			FROM payment p
			INNER JOIN m_payment ON p.jenis_payment = m_payment.id
			INNER JOIN m_bulan ON p.bulan = m_bulan.id
			INNER JOIN m_periode ON p.id_periode = m_periode.id
			WHERE p.id_siswa = '".$id_siswa."' and p.status = '0' and p.id_periode = '".$id_periode."' and p.jumlah > 0
			ORDER BY ID ASC
			");
		return $hasil->result();
	}

	public function selected_invoice($kondisi){
		return $query = $this->db->query("
			SELECT p.id as ID, p.id_periode as ID_PERIODE,
			p.jenis_payment, m_payment.nama_payment as PEMBAYARAN, p.bulan as BULAN, m_bulan.nama_bulan as NAMA_BULAN, FORMAT((p.jumlah - p.dibayar), 0) as KEKURANGAN, (p.jumlah - p.dibayar) as KEKURANGAN2
			FROM payment p
			INNER JOIN m_payment ON p.jenis_payment = m_payment.id
			INNER JOIN m_bulan ON p.bulan = m_bulan.id
			INNER JOIN m_periode ON p.id_periode = m_periode.id
			WHERE ".$kondisi."
			ORDER BY ID ASC");
	}

	public function edit_nominal($kondisi, $nominal){
		$this->db->trans_start();
		$this->db->query("UPDATE payment set jumlah = '".$nominal."', tanggal_dibayar = NOW() WHERE ".$kondisi);
		$this->db->trans_complete();
		if ($this->db->affected_rows() == '1') {
			return true;
		} else {
    		// any trans error?
			if ($this->db->trans_status() === FALSE) {
				return false;
			}
			return true;
		}
	}

}