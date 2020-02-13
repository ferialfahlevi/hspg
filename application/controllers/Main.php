<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct() {
	    parent::__construct();
	    if(!isset($_SESSION['logged_in']['username'])){								
			redirect('login');
		}
	}

	public function index() {
		$this->load->view('template/header');
		$this->load->view('v_dashboard');
	}


}