<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

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
		$this->load->model('Settings_model');
		if(!isset($_SESSION['logged_in']['username'])){								
			redirect('login');
		}
	}

	public function settings() {
		$this->load->view('template/source');
		$this->load->view('settings/settings_module/v_central_settings');
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

	public function pengajar() {
		$this->load->view('template/source');
		$this->load->view('data_center/data_module/v_data_pengajar');
		// $this->load->view('template/v_footer');
	}

	// ARRAY
	public function show_siswa(){
		$hasil = $this->Data_model->show_siswa();
		echo json_encode($hasil);
	}

	public function dropdown_agama(){
		$hasil = $this->Data_model->dropdown_agama();
		echo json_encode($hasil);
	}
}
