<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __Construct(){
  parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('PostModel'); // load model
	}
	public function index()
	{
		$this->load->view('includes/header');
		 $this->data['posts'] = $this->PostModel->getPosts(); // calling Post model method getPosts()
   $this->load->view('blog', $this->data); // load the view file , we are passing $data array to view file
		$this->load->view('includes/footer');
	}
}
?>