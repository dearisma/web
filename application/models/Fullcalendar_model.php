<?php

class Fullcalendar_model extends CI_Model
{
 function fetch_all_event(){
  $this->db->order_by('id');
  return $this->db->get('events');
 }

 function insert_event($data)
 {
  $this->db->insert('events', $data);
 }

 function update_event($data, $id)
 {
  $this->db->where('id', $id);
  $this->db->update('events', $data);
 }

 function delete_event($id)
 {
  $this->db->where('id', $id);
  $this->db->delete('events');
 }
 public function getDataId($t, $w)
	{
		$this->db->join('level', 'level.id_level = ' . $t . '.id_level', 	'left');
		$this->db->where($w);
		return $this->db->get($t);
	}
    public function getData($t)
	{
		return $this->db->get($t);
	}
    public function upd($t, $object, $w)
	{
		$this->db->update($t, $object, $w);
	}
    public function getData_Reservasi($t)
	{
		return $this->db->get($t);
	}
    public function search($keyword){
        $this->db->select('*');
        $this->db->from('wali_pasien');
        $this->db->like('nama',$keyword);
        return $this->db->get()->result();
    }
	
		
}
//
?>
