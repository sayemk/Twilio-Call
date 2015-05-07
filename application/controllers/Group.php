<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
*@author: Abu Sayem
*@email: sayem@asteriskbd.com
*
*Controller for group
*/
class Group extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url'));
		$this->load->model('group_model');

	}
	public function index()
	{
		$this->load->view('head');
		$this->load->view('group/show',array('groups' =>$this->group_model->get()));
	}

	public function create()
	{
		$this->load->view('head');
		$this->load->view('group/create');
	}

	public function save()
	{
		$data['name']=$this->input->post('name');
		$data['description']=$this->input->post('description');

		$this->group_model->save($data);

		redirect('group');
	}

	public function edit($id)
	{
		$data['group']=$this->group_model->find($id);

		$this->load->view('head');
		$this->load->view('group/edit', $data);
	}

	public function update()
	{
		$id=$this->input->post('id');
		$data['name']=$this->input->post('name');
		$data['description']=$this->input->post('description');
		$this->group_model->update($id,$data);
		redirect('group/edit/'.$id);
	}

	public function delete($id)
	{
		$this->group_model->delete($id);
		redirect('group');
	}

}

/* End of file Group.php */
/* Location: ./application/controllers/Group.php */