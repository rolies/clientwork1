<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		
		$data['page_title'] = "Permata - Perumahan Pekanbaru Berkualitas";
		$this->load->view('include/header', $data);
		$this->load->view('body');
		$this->load->view('include/footer');
	}

	public function about()
	{
		$data['page_title'] = "Permata - Tentang kami";
		$this->load->view('include/header', $data);
		$this->load->view('about');
		$this->load->view('include/footer');
	}
}
