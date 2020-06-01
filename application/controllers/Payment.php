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
		$this->load->model('Payment_model');
		if(!isset($_SESSION['logged_in']['username'])){								
			redirect('login');
		}
	}

	public function payment($id = FALSE, $periode = FALSE) {
		if ($id === FALSE) {
			$this->load->view('template/source');
			$this->load->view('payment/payment_module/v_all_payment');
		} else {
			$data['nama_siswa'] = $this->Payment_model->show_nama_siswa($id);
			$data['spp'] = $this->Payment_model->show_spp($id, $periode);
			$data['non_spp'] = $this->Payment_model->show_non_spp($id, $periode);
			$data['periode'] = $this->Payment_model->show_periode($id, $periode);
			$this->load->view('template/source');
			$this->load->view('payment/payment_module/v_detail_payment', $data);
		}
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

	public function sum_payment(){
		$this->load->view('template/source');
		$this->load->view('payment/v_sum_payment');
	}

	public function pendaftaran(){
		$data['title'] = 'Pendaftaran dan Pangkal';
		$data['menu'] = 'payment';
		$data['submenu'] = 'pendaftaran';
		$data['submenu2'] = '';
		$data['data_center'] = '';
		$this->load->view('template/v_header2', $data);
		$this->load->view('payment/v_pendaftaran');
		$this->load->view('template/v_footer');	
	}

	// Payment Action
	public function set_lunas(){
		$id = $this->input->post('id');
		// $id = '1083';
		$hasil = $this->Payment_model->set_lunas($id);
		echo json_encode($hasil);
	}

	public function update_payment(){
		$id = $this->input->post('id');
		$dibayar = $this->input->post('dibayar');
		$hasil = $this->Payment_model->update_payment($id, $dibayar);
		echo json_encode($hasil);
	}

	public function edit_payment(){
		$id = $this->input->post('id');
		$jumlah = $this->input->post('jumlah');
		$hasil = $this->Payment_model->edit_payment($id, $jumlah);
		echo json_encode($hasil);
	}

	public function reset_payment(){
		$id = $this->input->post('id');
		$hasil = $this->Payment_model->reset_payment($id);
		echo json_encode($hasil);
	}

	public function delete_payment(){
		$id = $this->input->post('id');
		$hasil = $this->Payment_model->delete_payment($id);
		echo json_encode($hasil);
	}

	public function update_log_payment(){
		$data = array(
			'id_payment' => $this->input->post('id_payment'),
			'nominal' => $this->input->post('nominal'),
			'jenis_log' => $this->input->post('jenis_log'),
			'user' => $_SESSION['logged_in']['username']);
		$hasil = $this->Payment_model->update_log_payment($data);
		echo json_encode($hasil);
	}

	public function delete_log_payment(){
		$id = $this->input->post('id');
		$hasil = $this->Payment_model->delete_log_payment($id);
		echo json_encode($hasil);
	}

	public function get_log_payment(){
		$id_payment = $this->input->post('id_payment');
		$hasil = $this->Payment_model->get_log_payment($id_payment);
		echo json_encode($hasil);
	}

	//ARRAY
	public function get_payment(){
		$id = $this->input->post('id');
		$hasil = $this->Payment_model->get_payment($id);
		echo json_encode($hasil);
	}

	public function dropdown_periode(){
		$hasil = $this->Payment_model->dropdown_periode();
		echo json_encode($hasil);
	}

	public function check_periode(){
		$id_siswa = $this->input->post('id_siswa');
		$id_periode = $this->input->post('id_periode');
		$hasil = $this->Payment_model->check_periode($id_siswa, $id_periode);
		echo json_encode($hasil);	
	}

	public function generate_periode(){
		$id_siswa = $this->input->post('id_siswa');
		$id_periode = $this->input->post('id_periode');
		$hasil = $this->Payment_model->generate_periode($id_siswa, $id_periode);
		echo json_encode($hasil);
	}

	public function latest_periode(){
		$hasil = $this->Payment_model->latest_periode();
		echo json_encode($hasil);
	}

	public function show_heregistrasi(){
		$id_periode = $this->input->post('id_periode');
		$hasil = $this->Payment_model->show_heregistrasi($id_periode);
		echo json_encode($hasil);
	}

	public function show_pendaftaran(){
		$id_periode = $this->input->post('id_periode');
		$hasil = $this->Payment_model->show_pendaftaran($id_periode);
		echo json_encode($hasil);
	}

	public function show_sum_heregistrasi(){
		$id_periode = $this->input->post('id_periode');
		$hasil = $this->Payment_model->show_sum_heregistrasi($id_periode);
		echo json_encode($hasil);
	}

	public function show_sum_pendaftaran(){
		$id_periode = $this->input->post('id_periode');
		$hasil = $this->Payment_model->show_sum_pendaftaran($id_periode);
		echo json_encode($hasil);
	}

	public function data_spp(){
		$id = $this->input->post('id');
		$periode = $this->input->post('periode');
		$hasil = $this->Payment_model->data_spp($id, $periode);
		echo json_encode($hasil);
	}

	public function data_non_spp(){
		$id = $this->input->post('id');
		$periode = $this->input->post('periode');
		$hasil = $this->Payment_model->data_non_spp($id, $periode);
		echo json_encode($hasil);
	}

	public function show_unpaid(){
		$id = $this->input->post('id');
		$id_periode = $this->input->post('id_periode');
		$hasil = $this->Payment_model->show_unpaid($id, $id_periode);
		echo json_encode($hasil);
	}
}
