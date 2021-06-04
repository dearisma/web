<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller {

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
		$this->load->model('Reservasi_model', 'rm');
		if ($this->session->userdata('data_session') == NULL) {
			redirect('Login','refresh');
		}
	}

	public function index()
	{
		
		$this->load->view('template/header_user');
		$this->load->view('Reservasi/index');
		$this->load->view('template/footer');
	}

	//kenapa gabisa 

	public function grooming()
	{
		$data['log'] = $this->session->userdata('data_session');
		// die(var_dump($data));
		$this->load->view('Reservasi/grooming', $data);
	}

	public function penitipan()
	{
		
		$data['log'] = $this->session->userdata('data_session');
		$this->load->view('Reservasi/penitipan',$data);
	}

	public function pemeriksaan()
	{
		$data['log'] = $this->session->userdata('data_session');
		$this->load->view('Reservasi/pemeriksaan',$data);
	}

	public function tambah_grooming()
	{
		$ins = array(
			'tgl_grooming' => date('Y-m-d'), 
			'id_wali' => $this->input->post('id_wali'),
			'hewan' => $this->input->post('hewan'),
			'status' => 'mengajukan'
		);

		$this->rm->ins('grooming', $ins);

		$this->session->set_flashdata('pesan', 'Pengajuan berhasil ! Mohon tunggu konfrimasi selanjutnya via WA!');

		redirect('Reservasi', 'refresh');
	}
	public function tambah_periksa()
	{
		$ins = array(
			'tgl_periksa' => date('Y-m-d'), 
			'id_wali' => $this->input->post('id_wali'),
			'hewan' => $this->input->post('hewan'),
			'keluhan' => $this->input->post('keluhan'),
			'status' => 'mengajukan'
		);

		$this->rm->ins('periksa', $ins);

		$this->session->set_flashdata('pesan', 'Pengajuan berhasil ! Mohon tunggu konfrimasi selanjutnya via WA!');

		redirect('Reservasi', 'refresh');
	}
	public function tambah_penitipan()
	{
		$ins = array(
			'tgl_titip' => date('Y-m-d'), 
			'tgl_diambil' => date('Y-m-d'), 
			'id_wali' => $this->input->post('id_wali'),
			'hewan' => $this->input->post('hewan'),
			'status' => 'mengajukan'
		);

		$this->rm->ins('hotel', $ins);

		$this->session->set_flashdata('pesan', 'Pengajuan berhasil ! Mohon tunggu konfrimasi selanjutnya via WA!');

		redirect('Reservasi', 'refresh');
	}
	
	public function upd_grooming(){
		$w = array('id_grooming' => $this->uri->segment(4));
		$x = $this->rm->getData('grooming', $w)->row();

		if ($this->uri->segment(3) == "Dikonfirmasi" ) {
			$updd = array('status' => "Konfirmasi");
			$we = array('id_grooming' => $x->id_grooming);
			$this->rm->upd('grooming', $updd, $we);
		} 
		if ($this->uri->segment(3) == "Ditolak1") {
			$sts = "Ditolak";
		}else{
			$sts = $this->uri->segment(3);
		}
		$upd = array('status' => $sts);
		$w = array('id_grooming' => $this->uri->segment(4));
		$this->rm->upd('grooming', $upd, $w);

		$data = $this->rm->getData('grooming', $w)->row();
		

		$this->session->set_flashdata('pesan', 'Pengajuan telah di Update!');
		// $link = "<script>window.open('', '_blank')</script>";
		if ( $this->uri->segment(3) == "Dikonfirmasi") {
			$link = '<script>window.open("https://web.whatsapp.com/send?phone=' . $data->no_telp . 
			'&text=Kami dari Asetku ingin menginformasikan bahwa pengajuan peminjaman barang Anda diterima, dengan rincian sebagai berikut: %0a'.'Nama : '.$data->nama_peminjam.'%0a'.'Barang yang dipinjam : '.$data->nama_barang.'%0a'.'Segera ambil barang di : '.$data->nama_instansi.'%0a'.'Alamat Instansi : '.$data->alamat. '%0a'.'Dimohon untuk mengambil barang sebelum : '.$data->tgl_kembali. '%0a")</script>';
		} elseif($this->uri->segment(3) == "Ditolak1") {
			$link = '<script>window.open("https://web.whatsapp.com/send?phone=' . $data->no_telp . '&text=Assalamaualaikum,Peminjaman barang yang anda ajukan ditolak.Mohon bersabar ini ujian","_blank")</script>';
		}

		if ($this->uri->segment(3) == "Diambil" || $this->uri->segment(3) == "Ditolak1") {
			echo $link;
		}
		// header("location:https://web.whatsapp.com/send?phone='.$data->no_hp.'&text=Assalamaualaikum,Peminjaman barang yang anda ajukan diterima. Segera ambil barang di Diskominfotik");
		redirect('Petugas/grooming', 'refresh');
	}
	
}
