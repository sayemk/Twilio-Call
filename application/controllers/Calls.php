<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Calls extends CI_Controller {

	
	public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('form', 'url'));

            $this->load->model('group_model','gm');
            $this->load->model('file_model','fm');
            $this->load->model('Calls_model','cm');
    }

	public function index()
	{

		$data['groups'] = $this->gm->get();

		$data['files'] = $this->fm->getFile();

		$this->load->view('head');
		$this->load->view('calls/index',$data);	
	}

	public function makeCall()
	{
		
		
		$file = $this->input->post('file');
		$group = $this->input->post('group');



		print_r($this->generateVoiceFile($file, $group));

		exit();

		$this->config->load('twilio');
		
		
		$phone=$this->Twilio_call_model->getNumbers();

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

	/*
	*Input: voice file id
	*output: twilio xml file link
	*/
	private function generateVoiceFile(&$file_id, &$group_id)
	{
		$file = $this->fm->find($file_id)->name;
		$group = $this->gm->find($group_id)->name;
		$url=base_url().'uploads/voice/'.$file;
		$response = new Services_Twilio_Twiml();
		$response->say('Hello');
		$response->play($url, array("loop" => 0));
		
		//generated file
		$twiML = 'uploads/xml/'.$group.'_'.time().'.xml';

		$xml=fopen($twiML, 'w');
		fwrite($xml, $response);
		fclose($xml);

		return base_url().$twiML;
	}

}
 ?>