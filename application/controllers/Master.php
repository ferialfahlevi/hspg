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

	public function siswa($id_siswa = false){
		if ($id_siswa === FALSE) {
			$this->load->view('template/header');
			$this->load->view('master/v_master_siswa');
		} else {
			$this->load->view('template/header');
			$this->load->view('master/v_detail_siswa');
		}
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

	public function get_siswa_detail($id_siswa){
		// $id_siswa = '3';
		$data		= $this->master_model->get_siswa_detail($id_siswa);
		echo json_encode($data);
	}

	public function update_siswa(){
		$no_induk = $this->input->post('no_induk');
		$data = array(
			'nama_siswa' => strtoupper($this->input->post('nama_siswa')),
			'id_kelas' => $this->input->post('id_kelas'),
			'jk_siswa' => $this->input->post('jk_siswa'), 
			'agama' => $this->input->post('agama'),
			'gol_darah' => $this->input->post('gol_darah'),
			'tempat_lahir' => ucfirst($this->input->post('tempat_lahir')),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'alamat_siswa' => $this->input->post('alamat_siswa'),
			'kota' => ucfirst($this->input->post('kota')),
			'kd_pos' => $this->input->post('kd_pos'),
			'provinsi' => ucfirst($this->input->post('provinsi')),
			'kecamatan' => ucfirst($this->input->post('kecamatan')),
			'kelurahan' => ucfirst($this->input->post('kelurahan')),
			'nama_ayah' => strtoupper($this->input->post('nama_ayah')),
			'tempat_lahir_ayah' => ucfirst($this->input->post('tempat_lahir_ayah')),
			'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah'),
			'agama_ayah' => $this->input->post('agama_ayah'),
			'no_hp_ayah' => $this->input->post('no_hp_ayah'),
			'pekerjaan_ayah' => ucfirst($this->input->post('pekerjaan_ayah')),

			'nama_ibu' => strtoupper($this->input->post('nama_ibu')),
			'tempat_lahir_ibu' => ucfirst($this->input->post('tempat_lahir_ibu')),
			'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
			'agama_ibu' => $this->input->post('agama_ibu'),
			'no_hp_ibu' => $this->input->post('no_hp_ibu'),
			'pekerjaan_ibu' => ucfirst($this->input->post('pekerjaan_ibu')),

			'telp' => $this->input->post('telp'),
			'email' => $this->input->post('email'),
			'status' => $this->input->post('status'),
			'jenis_pendidikan' => $this->input->post('jenis_pendidikan'),
			'tahun_masuk' => $this->input->post('tahun_masuk'));

		$data = $this->master_model->update_siswa($no_induk, $data);
		echo json_encode($data);
	}

	/*public function update_siswa(){
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
			'kota' => $this->input->post('kota'),
			'kd_pos' => $this->input->post('kd_pos'),
			'provinsi' => $this->input->post('provinsi'),
			'kecamatan' => $this->input->post('kecamatan'),
			'kelurahan' => $this->input->post('kelurahan'),
			'nama_ayah' => $this->input->post('nama_ayah'),
			'tempat_lahir_ayah' => $this->input->post('tempat_lahir_ayah'),
			'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah'),
			'agama_ayah' => $this->input->post('agama_ayah'),
			'no_hp_ayah' => $this->input->post('no_hp_ayah'),
			'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),

			'nama_ibu' => $this->input->post('nama_ibu'),
			'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
			'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
			'agama_ibu' => $this->input->post('agama_ibu'),
			'no_hp_ibu' => $this->input->post('no_hp_ibu'),
			'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),

			'telp' => $this->input->post('telp'),
			'email' => $this->input->post('email'),
			'status' => $this->input->post('status'),
			'jenis_pendidikan' => $this->input->post('jenis_pendidikan'),
			'tahun_masuk' => $this->input->post('tahun_masuk'));

		$data = $this->master_model->update_siswa($data);
		echo json_encode($data);
	}*/

	public function add_siswa(){
		$this->load->view('template/header');
		$this->load->view('master/v_add_siswa');
	}

	public function insert_siswa(){
		$data = array(
			'no_induk' => $this->input->post('no_induk'),
			'nama_siswa' => strtoupper($this->input->post('nama_siswa')),
			'id_kelas' => $this->input->post('id_kelas'),
			'jk_siswa' => $this->input->post('jk_siswa'), 
			'agama' => $this->input->post('agama'),
			'gol_darah' => $this->input->post('gol_darah'),
			'tempat_lahir' => ucfirst($this->input->post('tempat_lahir')),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'alamat_siswa' => $this->input->post('alamat_siswa'),
			'kota' => ucfirst($this->input->post('kota')),
			'kd_pos' => $this->input->post('kd_pos'),
			'provinsi' => ucfirst($this->input->post('provinsi')),
			'kecamatan' => ucfirst($this->input->post('kecamatan')),
			'kelurahan' => ucfirst($this->input->post('kelurahan')),
			'nama_ayah' => strtoupper($this->input->post('nama_ayah')),
			'tempat_lahir_ayah' => ucfirst($this->input->post('tempat_lahir_ayah')),
			'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah'),
			'agama_ayah' => $this->input->post('agama_ayah'),
			'no_hp_ayah' => $this->input->post('no_hp_ayah'),
			'pekerjaan_ayah' => ucfirst($this->input->post('pekerjaan_ayah')),

			'nama_ibu' => strtoupper($this->input->post('nama_ibu')),
			'tempat_lahir_ibu' => ucfirst($this->input->post('tempat_lahir_ibu')),
			'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
			'agama_ibu' => $this->input->post('agama_ibu'),
			'no_hp_ibu' => $this->input->post('no_hp_ibu'),
			'pekerjaan_ibu' => ucfirst($this->input->post('pekerjaan_ibu')),

			'telp' => $this->input->post('telp'),
			'email' => $this->input->post('email'),
			'status' => $this->input->post('status'),
			'jenis_pendidikan' => $this->input->post('jenis_pendidikan'),
			'tahun_masuk' => $this->input->post('tahun_masuk'));

		$data = $this->master_model->insert_siswa($data);
		echo json_encode($data);
	}

	public function list_periode(){
		$data	= $this->master_model->list_periode();
		echo json_encode($data);
	}
}
