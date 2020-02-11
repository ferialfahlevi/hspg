<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

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
	    if(!isset($_SESSION['logged_in']['username'])){								
			redirect('login');
		}
		$this->load->model('payment_model');
	}

	public function index() {
		$this->load->view('template/header');
		$this->load->view('payment/v_payment');
	}

	public function list_control($periode = FALSE){
		if ($periode == 'all') {
			$data	= $this->payment_model->control_list();
		} else {
			$data	= $this->payment_model->control_list($periode);
		}
		echo json_encode($data);
	}

	public function periodic($periodic){
		$this->load->view('template/header');
		$this->load->view('payment/v_periodic');
	}

	public function get_siswa_detail(){
		$id_siswa	= $this->input->get('id');
		$periode_control_list	= $this->input->get('periode');
		$data		= $this->payment_model->get_payment_by_siswa($id_siswa, $periode_control_list);
		// print_r($data);
		echo json_encode($data);
	}

	public function update_pembayaran(){
		$id_control_list = $this->input->post('id_control_list');
		$data = array(
			'pendaftaran' => $this->input->post('pendaftaran'),
			'pangkal' => $this->input->post('pangkal'),
			'heregistrasi' => $this->input->post('heregistrasi'),
			'ujian' => $this->input->post('ujian'),
			'kegiatan_1' => $this->input->post('kegiatan_1'),
			'kegiatan_2' => $this->input->post('kegiatan_2'),
		);
		$hasil = $this->payment_model->update_pembayaran($id_control_list, $data);
		echo json_encode($hasil);
	}

	public function approve_spp(){
		$field = 'spp_'.$this->input->post('id');
		$data = array(
			$field => '1');
		$id_control_list = $this->input->post('id_control_list');
		$hasil = $this->payment_model->approve_spp($id_control_list, $data);
		echo json_encode($hasil);
	}

	public function approve_pembayaran(){
		$field = $this->input->post('id');
		$data = array(
			$field => '1');
		$id_control_list = $this->input->post('id_control_list');
		$hasil = $this->payment_model->approve_spp($id_control_list, $data);
		echo json_encode($hasil);
	}

	public function last_periode(){
		$hasil = $this->payment_model->last_periode();
		echo json_encode($hasil);
	}

	public function check(){
		$no_induk = '09.16.01.001';
		$periode_control_list = '2019-2020';
		$data = array(
			'no_induk' => $no_induk,
			'periode_control_list' => $periode_control_list);
		$hasil = $this->payment_model->check($data)->num_rows();
		if ($hasil > 1) {
			echo "banyak";
		} else {
			echo "dikit";
		}
		// print_r($hasil);
	}

	public function invoice(){
		
	}

}