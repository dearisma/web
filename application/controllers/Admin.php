<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->model('Admin_model', 'am');
		
	}

	public function index()
	{
		if ($this->session->userdata('data_session') == NULL) {
			redirect('Welcome', 'refresh');
		}else{
			error_reporting(0);
			$cari = $_GET['keyword'];
			if ($cari != null) {
				$data['data_petugas'] = $this->am->search($cari)->result();
			}else{
				$w = array ('petugas.id_level');
				$data['data_petugas'] = $this->am->getDataId('petugas', $w)->result();
			}
		}	
		$data['level'] = $this->am->getData('level')->result();
		$this->load->view('template/header_admin', $data);
		
		$this->load->view('template/topbar');
		$this->load->view('Admin/index', $data);
	}
	public function user()
	{
		error_reporting(0);
		$cari = $_GET['keyword'];
		if ($cari != null) {
			$data['data_user'] = $this->am->search($cari)->result();
		}else{
			$w = array ('user.id_level');
			$data['data_user'] = $this->am->getDataId('user', $w)->result();
		}	
		$data['lv'] = $this->am->getData('level')->result();
		$this->load->view('template/header_admin', $data);
		$this->load->view('template/topbar');
		$this->load->view('Admin/index', $data);
	}
	
	public function tambah(){
		
		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('pesan', $error['error']);
			redirect('Petugas','refresh');
		}
		else{
			$ins = array(
				'nama' => $this->input->post('nama'),
				'jabatan' => $this->input->post('jabatan'),
				'alumni' => $this->input->post('alumni'),
				'foto' => $this->upload->data('file_name'),
				'seminar' => $this->input->post('seminar'),
				'id_level' => $this->input->post('id_level'),
			);
			$this->am->ins('petugas', $ins);
			$this->session->set_flashdata('pesan', 'Data Berhasil ditambahkan!');
			redirect('Admin','refresh');
		}	
	}
	public function tambah_user()
	{
			$ins = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('alumni'),
				'id_level' => $this->input->post('id_level'),
			);
			$this->am->ins('user', $ins);
			$this->session->set_flashdata('pesan', 'Data Berhasil ditambahkan!');
			redirect('Admin','refresh');
			
		
	}
	
	
}
