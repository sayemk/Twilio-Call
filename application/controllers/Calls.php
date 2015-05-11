<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Calls extends CI_Controller {

	
	public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
    }

	public function index()
	{
		$this->load->view('head');
		$this->load->view('calls/index');	
	}

	public function makeCall()
	{
		$this->config->load('twilio');
		$this->load->model('Twilio_call_model');

		
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