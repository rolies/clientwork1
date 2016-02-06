 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mase extends CI_Controller {

	public function index() {
		$data['page_title'] = 'Administrator';
		$this->load->view('include/header_putih', $data);
		$this->load->view('admin/login');
	}
	public function dashboard() {

		$data['page_title'] = 'dashboard Management';
		$this->load->model('Perumnas_model');
		$data['perum_siap'] = $this->Perumnas_model->read_perum_siap();
		$data['perum_belum'] = $this->Perumnas_model->read_perum_belum();
		$this->load->view('include/header_putih', $data);
		$this->load->view('admin/dashboard');
		$this->load->view('include/dashboard-popup');
		$this->load->view('include/footer-admin');
	}
}