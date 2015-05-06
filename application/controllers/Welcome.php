<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
     *
	 */


	public function index()
	{
        $twilo=new Services_Twilio('AC1345a7f970d4f15e818efe25373ffbf4','01b099f5226d436225c01251b0147bf6');

        $message = $twilo->account->messages->sendMessage(
		  '+15005550006', // From a Twilio number in your account
		  '+8801761662585', // Text any number
		  "Hello monkey!"
		);

		print $message->sid;
	}
}
