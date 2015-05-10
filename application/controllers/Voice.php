<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*
*@author: Abu Sayem
*@email: sayem@asteriskbd.com
*
*Controller for uploading voice file
*/

class Voice extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url'));
		$this->load->model('file_model');
	}

	public function index()
	{
		$data['files']=$this->file_model->getFile();
		$this->load->view('head');
		$this->load->view('voice/show',$data);
	}

	public function create()
	{
		$this->load->view('head');
		$this->load->view('voice/create');
	}

	public function edit($id)
	{
		//$file=$this->file_model->editFile($id);
		$data['id']=$id;
		$data['description']=$this->file_model->editFile($id)->description;

		$this->load->view('head');
		$this->load->view('voice/edit',$data);
	}

	//Method for update the voice file description
	public function update()
	{
		$id=$this->input->post('id');
		$description=$this->input->post('description');
		$this->file_model->updateFile($id,$description);

		redirect('voice/edit/'.$id);
	}

	//Method for delete voice file

	public function delete($id)
	{
		
		//Get file location with name
		$fileInfo=$this->file_model->editFile($id);

		$this->file_model->deleteFile($id);

		
		if (unlink($fileInfo->location)) {
			redirect('voice');	
		}
		
	}

	public function upload()
	{
		$config['upload_path']          = './uploads/voice/';
        $config['allowed_types']        = 'mp3|png';
        $config['max_size']             = 5120;
        $config['overwrite']			=False;
        $config['file_name']			=time().'_'.$_FILES["userfile"]['name'];
        
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('head');
                $this->load->view('voice/create', $error);
        }
        else
        {
                $file_data =$this->upload->data();
                $data['name']=$file_data['file_name'];
                $data['location']=$file_data['full_path'];
                $data['description']=$this->input->post('description');
                $this->load->model('file_model');
                $this->file_model->saveFile($data);

                redirect('voice');
               
        }
	}
}
 ?>