<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Calls extends CI_Controller {

	
	public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('form', 'url'));

            $this->load->model('group_model','gm');
            $this->load->model('file_model','fm');
            $this->load->model('Calls_model','cm');

            $this->load->model('number_model', 'nm');
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


		//Get the voice file url for call
		$voiceXML = $this->generateVoiceFile($file, $group);

		//Load the twilio config file
		$this->config->load('twilio');
		//Create API Connection
		$twilo=new Services_Twilio($this->config->item('A_SID'),$this->config->item('A_TOKEN'));

		$totalNumbers = $this->nm->count($group);

		for ($i=0; $i < $totalNumbers; $i +=20) { 
			
			foreach ($this->nm->get($group,$i)->result() as $number) {

				//Make call
				$call = $twilo->account->calls->create(
					$this->config->item('TWILIO_NUMBER'), //Twilio number
					$number->phone, //To a number
					$voiceXML, 
					array()
				);

				$calls=array('phone'=>$number->phone, 'SID'=>$call->sid, 'status'=>$call->status);
				
				$this->cm->saveCall($calls);
				echo "<pre>";
				print_r($calls);

			}

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