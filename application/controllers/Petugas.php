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
			$data['data_grooming'] = $this->pm->search_Reservasi($cari)->result();
		}else{
			$w = array ('grooming.id_wali');
			$data['data_grooming'] = $this->pm->getDataId_Reservasi('grooming', $w)->result();
		}	
		$data['wali'] = $this->pm->getData_Reservasi('wali_pasien')->result();
		$data['grooming'] = $this->pm->getData_Reservasi('grooming')->result();
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
		$data['kategori'] = $this->pm->getData_Reservasi('kategori')->result();
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
	
		error_reporting(0);
		$cari = $_GET['keyword'];
		if ($cari != null) {
			$data['data_katalog'] = $this->pm->search_Reservasi($cari)->result();
			
		}
		$data['katalog'] = $this->pm->getData_Reservasi('katalog')->result();
		// die (var_dump ($data));
		$this->load->view('template/header_petugas', $data);
		$this->load->view('template/topbar');
		$this->load->view('Admin/Katalog', $data);
	}
	public function ins_katalog()
	{
		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('pesan', $error['error']);
			redirect('Petugas','refresh');
		}
		else{
			$ins = array(
				'nama' => $this->input->post('nama'),
				'deskripsi' => $this->input->post('deskripsi'),
				'foto' => $this->upload->data('file_name')
			);
			$this->pm->ins('katalog', $ins);
			$this->session->set_flashdata('pesan', 'Data Berhasil ditambahkan!');
			redirect('Petugas/katalog','refresh');
		}
	}


		public function status_upd()
		{
			$w = array('id_grooming' => $this->uri->segment(4)); 
			//0 : base url
			//1 controller
			//2 function
			//3 id
			//4 
			$x = $this->pm->getData('grooming', $w)->row();

			if ($this->uri->segment(3) == "konfirmasi" ) {
				$updd = array('status' => "Dikonfirmasi");
				$we = array('id_grooming' => $x->id_grooming);
				$this->pm->upd('grooming', $updd, $we);
			} 
			 $sts = $this->uri->segment(3);
			
			$upd = array('status' => 'Dikonfirmasi');
			$w = array('id_grooming' => $this->uri->segment(4));
			$this->pm->upd('grooming', $upd, $w);

			$data = $this->pm->getDataId_Reservasi('grooming', $w)->row();
			$sts = $this->uri->segment(3);

			$this->session->set_flashdata('pesan', 'Pengajuan telah di Update!');
			// $link = "<script>window.open('', '_blank')</script>";
			if ( $this->uri->segment(3) == "konfirmasi") {
				$link = '<script>window.open("https://web.whatsapp.com/send?phone=' . $data->no_telp . 
				'&text=Kami dari Klinik Sekar Satwa ingin menginformasikan bahwa pengajuan reservasi barang Anda diterima. Silahkan datang ke klinik sebelum pukul 19.00")</script>';
			
			} elseif($this->uri->segment(3) == "Ditolak1") {
				$link = '<script>window.open("https://web.whatsapp.com/send?phone=' . $data->no_telp . '&text=Assalamaualaikum,Peminjaman barang yang anda ajukan ditolak.Mohon bersabar ini ujian","_blank")</script>';
			}

			if ($this->uri->segment(3) == "konfirmasi" ) {
				echo $link;
			}
			// header("location:https://web.whatsapp.com/send?phone='.$data->no_hp.'&text=Assalamaualaikum,Peminjaman barang yang anda ajukan diterima. Segera ambil barang di Diskominfotik");
			 redirect('Petugas/grooming', 'refresh');
		}
		
		public function upd_penitipan()
		{
			$w = array('id_hotel' => $this->uri->segment(4)); 
			//0 : base url
			//1 controller
			//2 function
			//3 id
			//4 
			$x = $this->pm->getData('hotel', $w)->row();

			if ($this->uri->segment(3) == "konfirmasi" ) {
				$updd = array('status' => "Dikonfirmasi");
				$we = array('id_hotel' => $x->id_hotel);
				$this->pm->upd('hotel', $updd, $we);
			} 
			 $sts = $this->uri->segment(3);
			
			$upd = array('status' => 'Dikonfirmasi');
			$w = array('id_hotel' => $this->uri->segment(4));
			$this->pm->upd('hotel', $upd, $w);

			$data = $this->pm->getDataId_Reservasi('hotel', $w)->row();
			$sts = $this->uri->segment(3);

			$this->session->set_flashdata('pesan', 'Pengajuan telah di Update!');
			// $link = "<script>window.open('', '_blank')</script>";
			if ( $this->uri->segment(3) == "konfirmasi") {
				$link = '<script>window.open("https://web.whatsapp.com/send?phone=' . $data->no_telp . 
				'&text=Kami dari Klinik Sekar Satwa ingin menginformasikan bahwa pengajuan reservasi barang Anda diterima. Silahkan datang ke klinik sebelum pukul 19.00")</script>';
			
			} elseif($this->uri->segment(3) == "Ditolak1") {
				$link = '<script>window.open("https://web.whatsapp.com/send?phone=' . $data->no_telp . '&text=Assalamaualaikum,Peminjaman barang yang anda ajukan ditolak.Mohon bersabar ini ujian","_blank")</script>';
			}

			if ($this->uri->segment(3) == "konfirmasi" ) {
				echo $link;
			}
			// header("location:https://web.whatsapp.com/send?phone='.$data->no_hp.'&text=Assalamaualaikum,Peminjaman barang yang anda ajukan diterima. Segera ambil barang di Diskominfotik");
			 redirect('Petugas/penitipan', 'refresh');
		}
		public function upd_periksa()
		{
			$w = array('id_periksa' => $this->uri->segment(4)); 
			//0 : base url
			//1 controller
			//2 function
			//3 id
			//4 
			$x = $this->pm->getData('periksa', $w)->row();

			if ($this->uri->segment(3) == "konfirmasi" ) {
				$updd = array('status' => "Dikonfirmasi");
				$we = array('id_periksa' => $x->id_periksa);
				$this->pm->upd('periksa', $updd, $we);
			} 
			 $sts = $this->uri->segment(3);
			
			$upd = array('status' => 'Dikonfirmasi');
			$w = array('id_periksa' => $this->uri->segment(4));
			$this->pm->upd('periksa', $upd, $w);

			$data = $this->pm->getDataId_Reservasi('periksa', $w)->row();
			$sts = $this->uri->segment(3);

			$this->session->set_flashdata('pesan', 'Pengajuan telah di Update!');
			// $link = "<script>window.open('', '_blank')</script>";
			if ( $this->uri->segment(3) == "konfirmasi") {
				$link = '<script>window.open("https://web.whatsapp.com/send?phone=' . $data->no_telp . 
				'&text=Kami dari Klinik Sekar Satwa ingin menginformasikan bahwa pengajuan reservasi barang Anda diterima. Silahkan datang ke klinik sebelum pukul 19.00")</script>';
			
			} elseif($this->uri->segment(3) == "Ditolak1") {
				$link = '<script>window.open("https://web.whatsapp.com/send?phone=' . $data->no_telp . '&text=Assalamaualaikum,Peminjaman barang yang anda ajukan ditolak.Mohon bersabar ini ujian","_blank")</script>';
			}

			if ($this->uri->segment(3) == "konfirmasi" ) {
				echo $link;
			}
			// header("location:https://web.whatsapp.com/send?phone='.$data->no_hp.'&text=Assalamaualaikum,Peminjaman barang yang anda ajukan diterima. Segera ambil barang di Diskominfotik");
			 redirect('Petugas/pemeriksaan', 'refresh');
		}
		public function print(){
		$w = array ('id_grooming' => $this->uri->segment(3));
			
			$data['data_grooming'] = $this->pm->getDataId_Reservasi('grooming', $w)->result();
		// $w = array('id_grooming' => $this->uri->segment(4)); 
	
		// $data = $this->pm->getDataId_Reservasi('grooming', $w)->row();
		$mpdf = new \Mpdf\Mpdf();
		$html = $this->load->view('Reservasi/print', $data, TRUE);

		$mpdf->WriteHTML($html);
		// $mpdf->Output();
		$mpdf->Output('Cetak Kartu.pdf', 'D');

	}
	public function print_periksa(){
		$w = array ('id_periksa' => $this->uri->segment(3));
			
			$data['data_periksa'] = $this->pm->getDataId_Reservasi('periksa', $w)->result();
		// $w = array('id_grooming' => $this->uri->segment(4)); 
	
		// $data = $this->pm->getDataId_Reservasi('grooming', $w)->row();
		$mpdf = new \Mpdf\Mpdf();
		$html = $this->load->view('Reservasi/print_periksa', $data, TRUE);

		$mpdf->WriteHTML($html);
		// $mpdf->Output();
		$mpdf->Output('Cetak Kartu.pdf', 'D');

	}
	public function print_penitipan(){
		$w = array ('id_hotel' => $this->uri->segment(3));
			
			$data['data_penitipan'] = $this->pm->getDataId_Reservasi('hotel', $w)->result();
		// $w = array('id_grooming' => $this->uri->segment(4)); 
	
		// $data = $this->pm->getDataId_Reservasi('grooming', $w)->row();
		$mpdf = new \Mpdf\Mpdf();
		$html = $this->load->view('Reservasi/print_penitipan', $data, TRUE);

		$mpdf->WriteHTML($html);
		// $mpdf->Output();
		$mpdf->Output('Cetak Kartu.pdf', 'D');

	}
		
	public function hapus()
	{
		$w = array ('id_katalog' => $this->uri->segment(3));
		$this->pm->del('katalog',$w);
		
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!');
		redirect('Petugas/Katalog','refresh');
	}

	public function update()
	{
		$w = array('id_katalog' => $this->uri->segment(3));
		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('foto')){
			$ins = array(
				'nama' => $this->input->post('nama'),
				'deskripsi' => $this->input->post('deskripsi'),
			);			
		}
		else{
			$ins = array(
				'nama' => $this->input->post('nama'),
				'deskripsi' => $this->input->post('deskripsi'),
				'foto' => $this->upload->data('file_name'),
			);
		}	
		$this->pm->updData('katalog', $ins, $w);
		$this->session->set_flashdata('pesan', 'Data Berhasil Diupdate!');
		redirect('Petugas/Katalog','refresh');
	}

}
