<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Calls_model extends CI_Model {

	/*
	*Get the phone numbers
	*/
	public function getNumbers()
	{
		return $this->db->select('phone')
			->get('colgtshirt_account_details');
	}

	//Save call status
	public function saveCall(&$calls=array())
	{
		$this->db->insert('colgtshirt_call', $calls);
	}
}