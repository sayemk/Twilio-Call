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
	}

	public function index()
	{
		$this->load->view('head');
		$this->load->view('call_file');
	}

	public function upload()
	{
		$config['upload_path']          = './uploads/voice/';
        $config['allowed_types']        = 'mp3|png';
        $config['max_size']             = 2048;
        $config['overwrite']			=TRUE;
        
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('head');
                $this->load->view('call_file', $error);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());

                print_r($data);
        }
	}
}
 ?>