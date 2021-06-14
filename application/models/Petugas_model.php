<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_model extends CI_Model {

	
	public function getData($t)
	{
		
		return $this->db->get($t);
	}

	public function register($table, $data)
	{
    return $this->db->insert($table, $data);
	}

	public function getDataId($t, $w)
	{
		$this->db->join('level', 'level.id_level = ' . $t . '.id_level', 	'left');
		$this->db->where($w);
		return $this->db->get($t);
	}
	
	public function getData_Reservasi($t)
	{
		return $this->db->get($t);
	}
	
	

	public function getDataId_Rm($t, $w)
	{
	
		$this->db->join('wali_pasien', 'wali_pasien.id_wali = ' . $t . '.id_wali', 	'left');
		$this->db->join('petugas', 'petugas.id_petugas = ' . $t . '.id_petugas', 	'left');
		$this->db->where($w);
		return $this->db->get($t);
	}
	public function getDataId_Reservasi($t, $w)
	{
	$this->db->join('wali_pasien', 'wali_pasien.id_wali = ' . $t . '.id_wali', 	'left');
		$this->db->where($w);
		return $this->db->get($t);
	}
	
	public function ins($t, $object)
	{
		$this->db->insert($t, $object);
	}
	public function upd($t, $object, $w)
	{
		$this->db->update($t, $object, $w);
	}
		
	public function updData($t, $object, $w)
	{
		$this->db->update($t, $object, $w);
	}
	public function del($t, $w)
	{
		$this->db->delete($t, $w);
	}

}

/* End of file Login_model.php */

