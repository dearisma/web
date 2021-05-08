<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

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
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Petugas_model', 'pm');
		// $this->load->model('Petugas_model', 'pm');
		
	}
	public function index()
	{
		error_reporting(0);
		$cari = $_GET['keyword'];
		$data['data_petugas'] = $this->pm->getData('petugas')->result();	
		$this->load->view('template/header', $data);
		$this->load->view('user/v_team', $data);
	}
}
