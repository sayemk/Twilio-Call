<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Twilio_call extends CI_Controller {

	
	public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
    }

	public function index()
	{
		$this->load->view('call_file');	
	}

	public function makeCall()
	{
		$this->config->load('twilio');
		$this->load->model('Twilio_call_model');

		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'mp3|png';
        $config['max_size']             = 2048;
        $config['overwrite']			=TRUE;
        
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('call_file', $error);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());

                $this->load->view('call_file', $data);
        }

		$phone=$this->Twilio_call_model->getNumbers();

		echo "<pre>";
		foreach ($phone->result() as $row) {
			
			$twilo=new Services_Twilio($this->config->item('A_SID'),$this->config->item('A_TOKEN'));
		
			$call = $twilo->account->calls->create(
				$this->config->item('TWILIO_NUMBER'), //Twilio number
				$row->phone, //To a number
				"http://demo.twilio.com/docs/voice.xml", 
				array());

			$calls=array('phone'=>$row->phone, 'SID'=>$call->sid, 'status'=>$call->status);
			
			$this->Twilio_call_model->saveCall($calls);
		}
	}

}
 ?>