<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

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
			$data['rekam_medis'] = $this->pm->search_Reservasi($cari)->result();
		}else{
			$w = array ('rekam_medis.id_wali');
			$data['rekam_medis'] = $this->pm->getDataId_Reservasi('rekam_medis', $w)->result();
		}	
		$data['wali'] = $this->pm->getData_Reservasi('wali_pasien')->result();
			$this->load->view('template/header_dokter', $data);
			$this->load->view('template/topbar');
			$this->load->view('Admin/Rekam_medis', $data);
		}
	}
	public function rekam_medis()
	{
		error_reporting(0);
		$cari = $_GET['keyword'];
		if ($cari != null) {
			$data['rekam_medis'] = $this->pm->search_Reservasi($cari)->result();
		}else{
			$w = array ('rekam_medis.id_wali');
			$data['rekam_medis'] = $this->pm->getDataId_Reservasi('rekam_medis', $w)->result();
		}	
		$data['wali'] = $this->pm->getData_Reservasi('wali_pasien')->result();
		
			$this->load->view('template/topbar');
			$this->load->view('Admin/Rekam_medis', $data);
	}
	
	public function ins_rm()
	{
		$ins = array(
			'hewan' => $this->input->post('hewan'),
			'anamnesa' => $this->input->post('anamnesa'),
			'lab' => $this->input->post('lab'),
			'diagnosa' => $this->input->post('diagnosa'),
			'terapi' => $this->input->post('terapi'),
			'keterangan' => $this->input->post('keterangan'),
			'tanggal' => date('Y-m-d'), 
			'id_wali' => $this->input->post('id_wali'),
		);

		$this->pm->ins('rekam_medis', $ins);

		$this->session->set_flashdata('pesan', 'Pengajuan berhasil ! Mohon tunggu konfrimasi selanjutnya via WA!');

		redirect('Dokter', 'refresh');
	}
	

}
