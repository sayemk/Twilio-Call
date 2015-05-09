<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
*@author: Abu Sayem
*@email: sayem@asteriskbd.com
*
*Model for Phone numbers
*/
class Number_model extends CI_Model {

	public function count($group=null)
	{
		if (!is_null($group)) {
			$this->db->where('group_id', $group);
			return $this->db->count_all_results('phone_group');
		}else {
			return $this->db->count_all_results('phone_number');
		}
	}

	public function get($group=null,$start=0,$limit=20)
	{
		
		if (!is_null($group)) {
			$this->db->select('phone_number.*');
			$this->db->from('phone_number');
			$this->db->where('phone_group.group_id', $group);
			$this->db->join('phone_group', 'phone_group.id = phone_number.id','right');
			$this->db->limit($limit, $start); 
			return $this->db->get();
		} else {
			return $this->db->get('phone_number', $limit, $start);
		}
		
	}

}

/* End of file Number_model.php */
/* Location: ./application/models/Number_model.php */