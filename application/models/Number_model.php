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
			$this->db->select('phone_number.*, phone_group.group_id, groups.name AS group_name');
			$this->db->from('phone_group');
			$this->db->where('phone_group.group_id', $group);
			$this->db->join('phone_number', 'phone_number.id = phone_group.number_id','left');
			$this->db->join('groups', 'groups.id = phone_group.group_id', 'right');
			$this->db->limit($limit, $start); 
			return $this->db->get();
		} else {
			$this->db->select('phone_number.*, phone_group.group_id, groups.name AS group_name');
			$this->db->from('phone_group');
			//$this->db->where('phone_group.group_id', $group);
			$this->db->join('phone_number', 'phone_number.id = phone_group.number_id','left');
			$this->db->join('groups', 'groups.id = phone_group.group_id', 'right');
			$this->db->limit($limit, $start); 
			return $this->db->get();
		}
		
	}

	public function find($id)
	{
			$this->db->select('phone_number.*,phone_group.group_id, phone_group.id AS pg_id');
			$this->db->from('phone_group');
			$this->db->where('number_id', $id);
			$this->db->join('phone_number', 'phone_number.id = phone_group.number_id', 'left');
			$this->db->join('groups', 'groups.id = phone_group.group_id', 'left');
			return $this->db->get();
	}

	public function save(&$group,&$data)
	{
		try {
			$this->db->trans_start();
			$this->db->insert('phone_number', $data);
			$insert_id=$this->db->insert_id();
			$this->db->insert('phone_group', array('number_id'=>$insert_id,
												'group_id'=>$group));
			$this->db->trans_complete();
			return true;
		} catch (Exception $e) {
			return false;
		}
		
	}

}

/* End of file Number_model.php */
/* Location: ./application/models/Number_model.php */