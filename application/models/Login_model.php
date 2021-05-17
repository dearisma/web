<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	
	public function cek($t, $w)
	{	
		$this->db->where($w);
		return $this->db->get($t);
	}	
	public function cek_client($t, $c)
	{	
		$this->db->where($c);
		return $this->db->get($t);
	}	
	

	public function petugas($t, $w){		
		
		// $this->db->join('petugas', 'petugas.id_petugas = user.id_petugas', 'left');
		$this->db->join('level', 'level.id_level = user.id_level', 'left');
		$this->db->where($w);
		return $this->db->get($t);

	}
	public function register($t, $data){
		
   		return $this->db->insert($t, $data);
	}
	
}
/* End of file Login_model.php */

