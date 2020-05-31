<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('Data_model');
		if(!isset($_SESSION['logged_in']['username'])){								
			redirect('login');
		}
	}

	public function siswa($id = FALSE) {
		if ($id === FALSE) {
			$this->load->view('template/source');
			$this->load->view('data_center/data_module/v_data_siswa');
		} else {
			$data['data_siswa'] = $this->Data_model->show_siswa($id);
			$data['wali_siswa'] = $this->Data_model->show_wali($id);
			$this->load->view('template/source');
			$this->load->view('data_center/data_module/v_detail_siswa', $data);
		}
	}

	public function generate_nik(){
		$kode_cabang 	= $this->input->post('kode_cabang');
		$jenjang 		= $this->input->post('jenjang');
		$current_year 	= $this->input->post('current_year');
		$data 			= $this->Data_model->generate_nik($kode_cabang, $jenjang, $current_year);
		echo json_encode($data);
	}

	public function update_data_siswa(){
		$id_siswa = $this->input->post('id_siswa');
		$data = array(
			'nama_siswa' => strtoupper($this->input->post('nama_siswa')),
			'no_induk' => strtoupper($this->input->post('no_induk')),
			'jk_siswa' => strtoupper($this->input->post('jk_siswa')),
			'gol_darah' => strtoupper($this->input->post('gol_darah')),
			'tempat_lahir' => strtoupper($this->input->post('tempat_lahir')), 
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'agama' => strtoupper($this->input->post('agama')),
			'telp' => $this->input->post('telp'),
			'email' => $this->input->post('email'),
			'date_updated' => date('Y-m-d H:i:s'));

		$data = $this->Data_model->update_siswa($id_siswa, $data);
		echo json_encode($data);
	}

	public function update_alamat_siswa(){
		$id_siswa = $this->input->post('id_siswa');
		$data = array(
			'alamat_siswa' => strtoupper($this->input->post('alamat_siswa')),
			'kota' => strtoupper($this->input->post('kota')),
			'kd_pos' => strtoupper($this->input->post('kd_pos')),
			'provinsi' => strtoupper($this->input->post('provinsi')),
			'kecamatan' => strtoupper($this->input->post('kecamatan')), 
			'kelurahan' => strtoupper($this->input->post('kelurahan')),
			'date_updated' =>  date('Y-m-d H:i:s'));

		$data = $this->Data_model->update_siswa($id_siswa, $data);
		echo json_encode($data);
	}

	public function update_other_siswa(){
		$id_siswa = $this->input->post('id_siswa');
		$data = array(
			'alamat_siswa' => strtoupper($this->input->post('alamat_siswa')),
			'kota' => strtoupper($this->input->post('kota')),
			'kd_pos' => strtoupper($this->input->post('kd_pos')),
			'provinsi' => strtoupper($this->input->post('provinsi')),
			'kecamatan' => strtoupper($this->input->post('kecamatan')), 
			'kelurahan' => strtoupper($this->input->post('kelurahan')),
			'date_updated' =>  date('Y-m-d H:i:s'));

		$data = $this->Data_model->update_siswa($id_siswa, $data);
		echo json_encode($data);
	}

	public function update_info_siswa(){
		$id_siswa = $this->input->post('id_siswa');
		$data = array(
			'status' => $this->input->post('status'),
			'jenis_pendidikan' => $this->input->post('jenis_pendidikan'),
			'date_updated' =>  date('Y-m-d H:i:s'));

		$data = $this->Data_model->update_siswa($id_siswa, $data);
		echo json_encode($data);
	}

	public function pengajar($id = FALSE) {
		if ($id === FALSE) {
			$this->load->view('template/source');
			$this->load->view('data_center/data_module/v_data_pengajar');
		}
	}

	public function user($id = FALSE) {
		if ($id === FALSE) {
			$this->load->view('template/source');
			$this->load->view('data_center/data_module/v_user');
		}
	}

	public function tambah_siswa(){
		$this->load->view('template/source');
		$this->load->view('data_center/v_tambah_siswa');
	}

	public function insert_siswa(){
		$no_induk = $this->input->post('nomor_induk_insert');
		$data1 = array(
			'no_induk' => $no_induk,
			'nama_siswa' => strtoupper($this->input->post('nama_lengkap_insert')),
			'agama' => $this->input->post('agama_insert'),
			'tempat_lahir' => strtoupper($this->input->post('tempat_lahir_insert')),
			'tanggal_lahir' => $this->input->post('tanggal_lahir_insert'),
			'jenis_pendidikan' => $this->input->post('jenis_pendidikan_insert'),
			'jk_siswa' => strtoupper($this->input->post('jk_kelamin_insert')),
			'kelas' => $this->input->post('kelas_insert'),
			'created_by' => $_SESSION['logged_in']['username']);
		// var_dump($data1);
		$data2 = array(
			'nama_panggilan' => strtoupper($this->input->post('nama_panggilan_insert')),
			'gol_darah' => $this->input->post('gol_darah_insert'),
			'hobi' => $this->input->post('hobi_insert'),
			'cita_cita' => $this->input->post('cita_cita_insert'),
			'alasan' => $this->input->post('alasan_insert'),
			'telp' => $this->input->post('telp_insert'),
			'email' => $this->input->post('email_insert'),
			'telp' => $this->input->post('telp_insert'),
			'status' => $this->input->post('status_insert'));
		$data3 = array(
			'alamat' => strtoupper($this->input->post('alamat_insert')),
			'kelurahan' => strtoupper($this->input->post('kelurahan_insert')),
			'kecamatan' => strtoupper($this->input->post('kecamatan_insert')),
			'kota' => strtoupper($this->input->post('kota_insert')),
			'provinsi' => strtoupper($this->input->post('provinsi_insert')),
			'kd_pos' => strtoupper($this->input->post('kd_pos_insert')));
		$this->Data_model->insert_siswa($data1);
		$this->Data_model->update_siswa2($no_induk, $data2);
		$this->Data_model->update_siswa2($no_induk, $data3);
		$this->Data_model->insert_kelas($no_induk);

		$this->session->set_flashdata('sukses', '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Sukses menambah data siswa, silahkan cek data siswa</div>');
		redirect('Routes/tambah_siswa');
	}

	// ARRAY
	public function show_siswa(){
		$hasil = $this->Data_model->show_siswa();
		echo json_encode($hasil);
	}

	public function show_payment_siswa(){
		$hasil = $this->Data_model->show_payment_siswa();
		echo json_encode($hasil);	
	}

	public function show_pendidik(){
		$hasil = $this->Data_model->show_pendidik();
		echo json_encode($hasil);
	}

	public function dropdown_agama(){
		$hasil = $this->Data_model->dropdown_agama();
		echo json_encode($hasil);
	}

	public function dropdown_kelas(){
		$hasil = $this->Data_model->dropdown_kelas();
		echo json_encode($hasil);
	}

	public function show_user($id_user = FALSE){
		if ($id_user === FALSE) {
			$hasil = $this->Data_model->show_user();
		} else {
			$hasil = $this->Data_model->show_user($id_user);
		}
		echo json_encode($hasil);
	}
}
