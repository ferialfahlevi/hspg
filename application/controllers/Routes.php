<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Routes extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// $this->load->model('Main_model');
		if(!isset($_SESSION['logged_in']['username'])){								
			redirect('login');
		}
	}

	public function index() {
		$data['title'] = 'Dashboard';
		$data['menu'] = 'dashboard';
		$data['submenu'] = '';
		$data['submenu2'] = '';
		$this->load->view('template/v_header2', $data);
		$this->load->view('dashboard/v_dashboard');
		$this->load->view('template/v_footer');
	}

	public function siswa() {
		$data['title'] = 'Data Siswa';
		$data['menu'] = 'data';
		$data['submenu'] = 'siswa';
		$data['submenu2'] = 'data_siswa';
		$data['data_center'] = "Data/siswa/";
		$this->load->view('template/v_header2', $data);
		$this->load->view('data_center/v_data');
		$this->load->view('template/v_footer');
	}

	public function tambah_siswa() {
		$data['title'] = 'Tambah Siswa';
		$data['menu'] = 'data';
		$data['submenu'] = 'siswa';
		$data['submenu2'] = 'tambah_siswa';
		$data['data_center'] = "Data/siswa/";
		$this->load->view('template/v_header2', $data);
		$this->load->view('data_center/v_tambah_siswa');
		$this->load->view('template/v_footer');
	}

	public function pengajar() {
		$data['title'] = 'Data Pengajar';
		$data['menu'] = 'data';
		$data['submenu'] = 'data_pengajar';
		$data['submenu2'] = '';
		$data['data_center'] = "Data/pengajar/";
		$this->load->view('template/v_header2', $data);
		$this->load->view('data_center/v_data');
		$this->load->view('template/v_footer');
	}

	public function user(){
		$data['title'] = 'Data User';
		$data['menu'] = 'data';
		$data['submenu'] = 'data_user';
		$data['submenu2'] = '';
		$data['data_center'] = "Data/user/";
		$this->load->view('template/v_header2', $data);
		$this->load->view('data_center/v_data');
		$this->load->view('template/v_footer');
	}

	public function payment(){
		$data['title'] = 'Payment Siswa';
		$data['menu'] = 'payment';
		$data['submenu'] = 'all_payment';
		$data['submenu2'] = '';
		$data['data_center'] = "Payment/payment/";
		$this->load->view('template/v_header2', $data);
		$this->load->view('payment/v_payment');
		$this->load->view('template/v_footer');
	}

	public function heregistrasi(){
		$data['title'] = 'Heregistrasi';
		$data['menu'] = 'payment';
		$data['submenu'] = 'heregistrasi';
		$data['submenu2'] = '';
		$data['data_center'] = '';
		$this->load->view('template/v_header2', $data);
		$this->load->view('payment/v_heregistrasi');
		$this->load->view('template/v_footer');	
	}

	public function settings(){
		$data['title'] = 'Pengaturan';
		$data['menu'] = 'settings';
		$data['submenu'] = '';
		$data['submenu2'] = '';
		$data['data_center'] = "Settings/settings/";
		$this->load->view('template/v_header2', $data);
		$this->load->view('settings/v_settings');
		$this->load->view('template/v_footer');
	}
}
