<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

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
		
	}

	public function index()
	{
		if ($this->session->userdata('data_session') == NULL) {
			redirect('Welcome', 'refresh');
		}else{
			error_reporting(0);
			$cari = $_GET['keyword'];
			if ($cari != null) {
				$data['data_petugas'] = $this->pm->search($cari)->result();
			}else{
				$w = array ('petugas.id_level');
				$data['data_petugas'] = $this->pm->getDataId('petugas', $w)->result();
			}	
			$data['level'] = $this->pm->getData('level')->result();
			$this->load->view('template/header_petugas', $data);
			
			$this->load->view('template/topbar');
			$this->load->view('Admin/Petugas', $data);
		}
	}
	public function grooming()
	{
		error_reporting(0);
		$cari = $_GET['keyword'];
		if ($cari != null) {
			$data['data_grooming'] = $this->pm->search_Reservasi($cari)->result();
		}else{
			$w = array ('grooming.id_wali');
			$data['data_grooming'] = $this->pm->getDataId_Reservasi('grooming', $w)->result();
		}	
		$data['wali'] = $this->pm->getData_Reservasi('wali_pasien')->result();
		$this->load->view('template/header_petugas', $data);
		$this->load->view('template/topbar');
		$this->load->view('Admin/Petugas', $data);
	}
	public function penitipan()
	{
		error_reporting(0);
		$cari = $_GET['keyword'];
		if ($cari != null) {
			$data['data_penitipan'] = $this->pm->search_Reservasi($cari)->result();
		}else{
			$w = array ('penitipan.id_wali');
			$data['data_penitipan'] = $this->pm->getDataId_Reservasi('hotel', $w)->result();
		}	
		$data['wali'] = $this->pm->getData_Reservasi('wali_pasien')->result();
		$this->load->view('template/header_petugas', $data);
		$this->load->view('template/topbar');
		$this->load->view('Admin/Penitipan', $data);
	}
	public function pemeriksaan()
	{
		error_reporting(0);
		$cari = $_GET['keyword'];
		if ($cari != null) {
			$data['data_periksa'] = $this->pm->search_Reservasi($cari)->result();
		}else{
			$w = array ('periksa.id_wali');
			$data['data_periksa'] = $this->pm->getDataId_Reservasi('periksa', $w)->result();
		}	
		$data['wali'] = $this->pm->getData_Reservasi('wali_pasien')->result();
		$this->load->view('template/header_petugas', $data);
		$this->load->view('template/topbar');
		$this->load->view('Admin/Pemeriksaan', $data);
	}
	
	public function katalog()
	{	
		$this->load->view('template/header_petugas');
		$this->load->view('template/topbar');
		$this->load->view('admin/katalog');
	}
	
	

}
