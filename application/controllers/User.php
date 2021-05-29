<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$this->load->model('User_model', 'um');
		
	}

	public function index()
	{
		error_reporting(0);
		$cari = $_GET['keyword'];
		if ($cari != null) {
			$data['data_user'] = $this->um->search($cari)->result();
		}else{
			$w = array ('data_user.id_level');
			$data['data_user'] = $this->um->getDataId('user', $w)->result();
		}	
		$data['level'] = $this->um->getData('level')->result();
		$this->load->view('template/header_admin', $data);
		
		$this->load->view('template/topbar');
		$this->load->view('Admin/Petugas', $data);
	}
	
	public function tambah_user()
	{
			$ins = array(
                'id_user' => $this->input->post('id_user'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),	
                'id_level' => $this->input->post('id_level')			
			);
			$this->um->ins('User', $ins);

			
			$this->session->set_flashdata('pesan', 'Akun User Berhasil ditambahkan!');
			redirect('User','refresh');
		
	}
	public function form(){
		if ($this->session->userdata('data_session') == NULL) {
			redirect('Login/index', 'refresh');

		} else {
			
			$ins = array(
                'id_hewan' => $this->input->post('id_user'),
                'nama' => $this->input->post('nama'),
                'jenis_kel' => $this->input->post('jenis_kel'),	
                'bb' => $this->input->post('bb'),	
				'tb' => $this->input->post('tb'),	
				'id_wali' => $this->input->post('id_wali')			
			);
			$this->um->ins('Hewan', $ins);

			
			$this->session->set_flashdata('pesan', 'Akun User Berhasil ditambahkan!');
			redirect('User','refresh');
		}
	}

}
