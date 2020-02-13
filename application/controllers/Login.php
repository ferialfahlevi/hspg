<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	    $this->load->model('Login_model');
	}

	public function index() {
		$this->load->view('v_login');
	}

	public function do_login(){
		$username = $this->input->post('username');
		
		$data = array(
			'username' => $username,
			'password' => md5($this->input->post('password')));

		$pengguna = $this->Login_model->get_user_info($username);
		$row1 = $pengguna->row_array();

		$cek = $this->Login_model->check_login("m_user", $data)->num_rows();
		
		if ($cek > 0) {
			$data_session = array(
				'username' => $row1['username'],
				'nama_user' => $row1['nama_user'],
				'status' => $row1['status'],
				'jenis_user' => $row1['admin_user']);
			$this->session->set_userdata('logged_in', $data_session);
			redirect();
		} 
		else
		{
			echo "Salah";
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
	
}
