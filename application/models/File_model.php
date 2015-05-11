<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*
*@author: Abu Sayem
*@email: sayem@asteriskbd.com
*
*Model for uploading voice file
*/
class File_model extends CI_Model {

	//Method for insert new file data to db 
	public function saveFile($data=array())
	{
		$this->db->insert('voice_file', $data);
	}

	//Method for get all data from db

	public function getFile()
	{
		$this->db->order_by('id', 'desc');
		return $this->db->get('voice_file');
	}

	public function find($id)
	{
		$this->db->where('id', $id);
		foreach ($this->db->get('voice_file')->result() as $row) {
			return $row;
		}
	}

	public function editFile($id)
	{
		$this->db->where('id', $id);
		$query=$this->db->get('voice_file');
		foreach ($query->result() as $row) {
			$description=&$row;
		}
		return $description;
	}

	public function updateFile(&$id,&$description)	
	{
		$this->db->where('id', $id);
		$this->db->update('voice_file', array('description' =>$description));
	}

	public function deleteFile($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('voice_file');
	}

	

}

/* End of file File_model.php */
/* Location: ./application/models/File_model.php */
?>