<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Calls_model extends CI_Model {

	
	//Save call status
	public function saveCall(&$calls=array())
	{
		$this->db->insert('colgtshirt_call', $calls);
	}
}