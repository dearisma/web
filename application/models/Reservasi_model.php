<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi_model extends CI_Model {

	
	public function getData($t)
	{
		return $this->db->get($t);
	}
	public function getData_print($t)
	{
		return $this->db->get($t);
	}
	public function getDt($t, $w)
	{
		$this->db->where($w);
		
		return $this->db->get($t);
	}
	
	public function register($table, $data)
	{
    return $this->db->insert($table, $data);
	}
	public function ins($t , $object)
	{
		$this->db->insert($t, $object);
	}

	public function upd($t, $object, $w)
	{
		$this->db->update($t, $object, $w);
	}
	public function getDataId($t, $w)
	{
		$this->db->join('level', 'level.id_level = ' . $t . '.id_level', 	'left');
		$this->db->where($w);
		return $this->db->get($t);
	}
	
	public function getDataId_Reservasi($t, $w)
	{
	$this->db->join('wali_pasien', 'wali_pasien.id_wali = ' . $t . '.id_wali', 	'left');
		$this->db->where($w);
		return $this->db->get($t);
	}
	public function getDataId_grooming($t, $w)
	{
		$this->db->join('hewan', 'hewan.id_hewan = ' . $t . '.id_hewan', 'left');
		$this->db->join('wali_pasien', 'wali.id_wali = ' . $t . '.id_wali', 'left');
		$this->db->join('kategori', 'kategori.id_kategori = ' . $t . '.id_kategori', 	'left');
		$this->db->where($w);
		return $this->db->get($t);
	}
	public function getData_Reservasi($t)
	{
		return $this->db->get($t);
	}

	public function getDataId_penitipan($t, $w)
	{
		$this->db->join('hewan', 'hewan.id_hewan = ' . $t . '.id_hewan', 	'left');
		$this->db->join('wali_pasien', 'wali.id_wali = ' . $t . '.id_wali', 	'left');
		$this->db->where($w,$y);
		return $this->db->get($t);
	}

	public function getDataId_periksa($t, $w)
	{
		$this->db->join('hewan', 'hewan.id_hewan = ' . $t . '.id_hewan', 	'left');
		$this->db->join('wali_pasien', 'wali.id_wali = ' . $t . '.id_wali', 	'left');
		$this->db->where($w,$y);
		return $this->db->get($t);
	}
	
	public function getDataMaks($tgl) {
		
		return $this->db->get_where('grooming', ['tgl_grooming' => $tgl])->num_rows();
	}
	function edit_data($where,$table){                              
		return $this->db->get_where($table,$where);

	}
	
	public function updData($t, $object, $w)
	{
		$this->db->update($t, $object, $w);
	}

}

/* End of file Login_model.php */

