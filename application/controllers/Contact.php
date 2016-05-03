<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('contact_model');

    }
	public function index()
	{

		$this->load->view('contact');

	}
	public function contact()
	{
		 $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'message' => $this->input->post('message'),
      
                
            );	
		 
		 $this->contact_model->contact($data);
redirect('', 'refresh');

	
		//  $subject = "Message Delivery";
		// if(mail('forlantamang@gmail.com',$subject,$message)) {
		// 	echo "your mail has been sent";


		// }

		// $ack_msg = 'we will contact after 2 days';
		// $ack_subject = 'Thank you';

		// //acknowdedgement
		// if(mail($email,$ack_subject,$ack_msg)) {
			


		// }
	}
}
