<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
*@author: Abu Sayem
*@email: sayem@asteriskbd.com
*
*Controller for Phone numbers
*/
class Number extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper(array('form', 'url'));
		$this->load->model('number_model', 'nm');
		$this->load->model('group_model','gm');
		$this->load->library('session');
	}

	public function index($start=0)
	{
		$group=$this->input->get('group');
		if (!is_null($group) && $group !='') {
			$this->session->set_userdata('group', $group);
		}elseif ($group =='' && isset($group)) {
			$group=null;
			$this->session->unset_userdata('group');
		}else {
			$group=$this->session->userdata('group');
		}

		$config['total_rows'] = $this->nm->count($group);
		$config['per_page'] = 5;
		$config['num_links'] = 5;

		

		//Load pagination library
		$this->load->library('pagination');	
		$this->pagination->initialize($config);
		
		//Get the phone numbers
		$data['numbers']=$this->nm->get($group,$start,$config['per_page']);
		
		//Get all groups fr filtering
		$data['groups']=$this->gm->get();
		$data['selected_group']=$group;

		$this->load->view('head');
		$this->load->view('number/show',$data);
	}

}

/* End of file Number.php */
/* Location: ./application/controllers/Number.php */