<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$this->load->model('Dashboard_model');
		if(!isset($_SESSION['logged_in']['username'])){								
			redirect('login');
		}
	}

	public function show_active_student(){
		$parameter = $this->input->post('parameter');
		$hasil = $this->Dashboard_model->show_active_student($parameter);
		echo json_encode($hasil);
	}

	public function show_active_teacher(){
		$hasil = $this->Dashboard_model->show_active_teacher();
		echo json_encode($hasil);
	}

	public function show_semester(){
		$hasil = $this->Dashboard_model->show_semester();
		echo json_encode($hasil);
	}
	
}
