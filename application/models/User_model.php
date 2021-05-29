<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	
	public function getData($t)
	{
		return $this->db->get($t);
	}
	public function register($table, $data)
	{
    return $this->db->insert($table, $data);
	}
	public function getDataId($t, $u)
	{
		$this->db->join('level', 'level.id_level = ' . $t . '.id_level', 	'left');
		$this->db->where($u);
		return $this->db->get($t);
	}
	public function ins($t, $object)
	{
		$this->db->insert($t, $object);
	}

	public function ins_wali($t, $object)
	{
		$this->db->insert($t, $object);
	}

}

/* End of file Login_model.php */

