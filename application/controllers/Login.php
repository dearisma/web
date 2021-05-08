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
			$this->load->view('user/v_login');
		
	}
	
	public function register()
	{
			$this->load->view('user/v_register');
		
	}
	public function proses_register(){
    $this->load->library('form_validation');
    $this->load->library('session');

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[15]|is_unique[users.username]');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
    $this->form_validation->set_rules('no_telp', 'No Telp', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('id_level', 'Id Level', 'required');
    
    if ($this->form_validation->run() == FALSE) {
        $errors = $this->form_validation->error_array();
        $this->session->set_flashdata('errors', $errors);
        $this->session->set_flashdata('input', $this->input->post());
        redirect('login/register');
    } else {
		
        $nama = $this->input->post('name');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $no_telp = $this->input->post('no_telp');
        $alamat = $this->input->post('alamat');
		$id_level=$this->input->post('id_level');
        $pass = password_hash($password, PASSWORD_DEFAULT);
        $data = [
			
            'nama' => $nama,
            'username' => $username,
            'password' => $pass,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
            'id_level' => 2
		];
        $insert = $this->lm->register("wali_pasien", $data);
        if($insert){
            echo '<script>alert("Sukses! Anda berhasil melakukan register. Silahkan login untuk mengakses data.");window.location.href="'.base_url('index.php/auth/login').'";</script>';
        }else{
			echo 'eror';
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
	
			
			$petugas = $this->lm->cek('user', $w)->row();
			
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
				}else if($petugas->id_level==4){
					$this->session->set_userdata('data_session', $array);
					redirect('Welcome', 'refresh');
				}
			}else {
				redirect('Login', 'refresh');
			}
		}else {
			redirect('Login', 'refresh');
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}
	
}

/* End of file Login.php */
