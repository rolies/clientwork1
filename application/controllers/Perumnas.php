<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perumnas extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index() {
		$data['page_title'] = 'Daftar Perumnas';
		$this->load->model('Perumnas_model');
		$data['all_perum'] = $this->Perumnas_model->read_perum();
		$this->load->view('include/header', $data);
		$this->load->view('daftar-perum');
		$this->load->view('include/footer');

	}

	public function tipe($id){
		$this->load->model('Perumnas_model');
		$data['all_perum'] = $this->Perumnas_model->read_perum_detail($id);
		$data['stu_perum'] = $this->Perumnas_model->read_perum_stu();
		if ($data['all_perum'] == "") {
			echo "Perumnas ndak ada";
		} else {
		$data['page_title'] = $data['all_perum']->name;
		$this->load->view('include/header', $data);
		$this->load->view('detail-perum');
		$this->load->view('include/footer');
	  }
	}
}