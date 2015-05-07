<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
*@author: Abu Sayem
*@email: sayem@asteriskbd.com
*
*Model for Group
*/
class Group_model extends CI_Model {

	public function save($data=array())
	{
		$this->db->insert('groups', $data);
	}	

	public function get()
	{
		$this->db->order_by('id', 'desc');
		return $this->db->get('groups');
	}

	public function find($id)
	{
		$this->db->where('id', $id);
		$query=$this->db->get('groups');
		foreach ($query->result() as $group) {
			return $group;
		}
	}

	public function update($id,$data=array())
	{
		$this->db->where('id', $id);
		$this->db->update('groups', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('groups');
	}

}

/* End of file Group_model.php */
/* Location: ./application/models/Group_model.php */