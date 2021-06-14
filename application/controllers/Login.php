<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->model('login_model', 'lm');
		date_default_timezone_set('Asia/Jakarta');
	}


	public function index()
	{
		if ($this->session->userdata('data_session') != null) {
			redirect('Welcome', 'refresh');
		} else {
			$this->load->view('user/v_login');
		}
		
	}
	
	public function register()
	{
			$this->load->view('user/v_register');
		
	}
	public function proses_register(){
		$this->load->library('form_validation');
		$this->load->library('session');
	
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_telp', 'No Telp', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
			$this->session->set_flashdata('errors', $errors);
			$this->session->set_flashdata('input', $this->input->post());
			redirect('login/register');
		} else {
			$kalimat = substr($this->input->post('no_telp'), 1);
			$hp = "62" . $kalimat;
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$alamat = $this->input->post('alamat');
			
			$pass = password_hash($password, PASSWORD_DEFAULT);
			$data = [
				'nama' => $nama,
				'username' => $username,
				'password' => $pass,
				'alamat' => $alamat,
				'no_telp' => $hp,
				'id_level' => 4,
			];
			$insert = $this->lm->register("wali_pasien", $data);
			if($insert){
				echo '<script>alert("Sukses! Anda berhasil melakukan register. Silahkan login untuk mengakses data.");window.location.href="'.base_url('login/index').'";</script>';
			}
		}
} 

	public function aksi_login()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required', array('required' => 'username harus diisi'));
		$this->form_validation->set_rules('password', 'password', 'trim|required', array('required' => 'Password harus diisi'));
		
		if ($this->form_validation->run() == TRUE) {
			$w = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);

			$password = $this->input->post('password');
			$hashed_password = password_hash($password, PASSWORD_DEFAULT);
			
			$c = array(
				'username' => $this->input->post('username'),
				password_verify('password' , $hashed_password)
			);
	
			
			$petugas = $this->lm->cek('user', $w)->row();
			$client = $this->lm->cek_client('wali_pasien', $c)->row();
			// $client=md5($this->input->post('password'));
			// print_r($client);die;
			if ($petugas != null) {

				$array = array(
					'username' => $petugas->username,
					'password' => $petugas->password,
					'login' => TRUE,
					'id_level' => $petugas->id_level,
					
				);
				if($petugas->id_level==1){

					$this->session->set_userdata('data_session', $array);
					redirect('Dokter/index', 'refresh');
				}else if($petugas->id_level==2){
					$this->session->set_userdata('data_session', $array);
					redirect('Petugas/index', 'refresh');
				}else if($petugas->id_level==3){
					$this->session->set_userdata('data_session', $array);
					redirect('Admin/index', 'refresh');
				}else {
					$this->session->set_userdata('data_session', $array);
					redirect('Welcome/index', 'refresh');
				}
			}else if($client != null){
				$array = array(
					'id_wali' => $client->id_wali,
					'nama' => $client->nama,
					'username' => $client->username,
					'password' => $client->password,
					'alamat' => $client->alamat,
					'no_telp' => $client->no_telp,		
					'login' => TRUE,
					'id_level' => $client->id_level,
					
				);
				// die (var_dump ($array));
				if($client->id_level==4)
					$this->session->set_userdata('data_session', $array);
					
					redirect('Reservasi/index', 'refresh');
				
			}else{
				redirect('Login', 'refresh');
			}
		}else {
			redirect('Login', 'refresh');
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Welcome');
	}
	
}

/* End of file Login.php */
