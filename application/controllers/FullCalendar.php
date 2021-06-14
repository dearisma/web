<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fullcalendar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('fullcalendar_model');
    }

    public function index()
	 {
        error_reporting(0);
		$cari = $_GET['keyword'];
		if ($cari != null) {
			$data['wali_pasien'] = $this->fullcalendar_model->search_Reservasi($cari)->result();
		}else{
			$data['wali_pasien'] = $this->fullcalendar_model->getData('wali_pasien')->result();
		}	
		// $data['wali_pasien'] = $this->pm->getData_Reservasi('wali_pasien')->result();

		$this->load->view('template/header_petugas', $data);
		$this->load->view('template/topbar');
        $this->load->view('Admin/fullcalendar', $data);

		
    }

    function load()
    {
        $event_data = $this->fullcalendar_model->fetch_all_event();
        foreach($event_data->result_array() as $row)
        {
            $data[] = array(
                'id' => $row['id'],
                'title' => $row['title'],
                'start' => $row['start_event'],
                'end' => $row['end_event']
            );
        }
        echo json_encode($data);
    }

    function insert()
    {
        if($this->input->post('title'))
        {
            $data = array(
                'title'  => $this->input->post('title'),
                'start_event'=> $this->input->post('start'),
                'end_event' => $this->input->post('end')
            );
            $this->fullcalendar_model->insert_event($data);
        }
    }

    function update()
    {
        if($this->input->post('id'))
        {
            $data = array(
                'title'   => $this->input->post('title'),
                'start_event' => $this->input->post('start'),
                'end_event'  => $this->input->post('end')
            );

            $this->fullcalendar_model->update_event($data, $this->input->post('id'));
        }
    }
//
    function delete()
    {
        if($this->input->post('id'))
        {
            $this->fullcalendar_model->delete_event($this->input->post('id'));
        }
    }
    
		public function status_upd()
		{
			$w = array('id_wali' => $this->uri->segment(4)); 
			//0 : base url
			//1 controller
			//2 function
			//3 id
			//4 
			$x = $this->fullcalendar_model->getData('wali_pasien', $w)->row();

			if ($this->uri->segment(3) == "konfirmasi" ) {
				$updd = array('vaksin' => "Dikonfirmasi");
				$we = array('id_wali' => $x->id_wali);
				$this->fullcalendar_model->upd('wali_pasien', $updd, $we);
			} 
			 $sts = $this->uri->segment(3);
			
			$upd = array('vaksin' => 'Dikonfirmasi');
			$w = array('id_wali' => $this->uri->segment(4));
			$this->fullcalendar_model->upd('wali_pasien', $upd, $w);

			$data = $this->fullcalendar_model->getDataId('wali_pasien', $w)->row();
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
			 redirect('FullCalendar/index', 'refresh');
		}
		public function search(){
			$keyword = $this->input->post('keyword');
			$data['wali_pasien']=$this->fullcalendar_model->search($keyword);
			$this->load->view('template/header_petugas', $data);
		$this->load->view('template/topbar');
        $this->load->view('Admin/fullcalendar', $data);
		}
} ?>