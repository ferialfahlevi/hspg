<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

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
	    $this->load->model('master_model');
	}

	public function index() {
		
	}

	public function pendidik(){
		$this->load->view('template/header');
		$this->load->view('master/v_master_pendidik');
	}

	public function siswa(){
		$this->load->view('template/header');
		$this->load->view('master/v_master_siswa');
	}
	
	public function list_pendidik(){
		$data	= $this->master_model->list_pendidik();
		echo json_encode($data);
	}

	public function get_pendidik_detail(){
		$id_pendidik	= $this->input->get('id');
		$data		= $this->master_model->get_pendidik_detail($id_pendidik);
		echo json_encode($data);
	}

	public function list_siswa(){
		$data	= $this->master_model->list_siswa();
		echo json_encode($data);
	}

	public function get_siswa_detail(){
		$id_siswa	= $this->input->get('id');
		// $id_siswa = '3';
		$data		= $this->master_model->get_siswa_detail($id_siswa);
		echo json_encode($data);
	}

	public function update_siswa(){
		$data = array(
			'no_induk' => $this->input->post('no_induk'),
			'nama_siswa' => $this->input->post('nama_siswa'),
			'id_kelas' => $this->input->post('id_kelas'),
			'jk_siswa' => $this->input->post('jk_siswa'), 
			'agama' => $this->input->post('agama'),
			'gol_darah' => $this->input->post('gol_darah'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'alamat_siswa' => $this->input->post('alamat_siswa'),
			'wali' => $this->input->post('wali'),
			'telp' => $this->input->post('telp'),
			'email' => $this->input->post('email'),
			'jenis_pendidikan' => $this->input->post('jenis_pendidikan'),
			'status' => $this->input->post('status'));
		$data = $this->master_model->update_siswa($data);
		echo json_encode($data);
	}

	public function list_periode(){
		$data	= $this->master_model->list_periode();
		echo json_encode($data);
	}
}
