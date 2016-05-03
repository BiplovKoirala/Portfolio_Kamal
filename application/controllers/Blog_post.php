<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_post extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('blog_model');

    }
	public function index()
	{

		$this->load->view('post_blog');
		

	}
	public function blog()
	{
		 $data = array(
                'title' => $this->input->post('title'),
                'image' => $this->input->post('image'),
                'description' => $this->input->post('description'),
      
                
            );	
		 
		
					
	$config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '100';
    $config['max_width']  = '1024';
    $config['max_height']  = '768';
    $config['overwrite'] = TRUE;
    $config['encrypt_name'] = FALSE;
    $config['remove_spaces'] = TRUE;
    if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('userfile'))
    {
        echo 'error';
    }
    else
    {

        return array('upload_data' => $this->upload->data());
    }
		 echo "successfully posted";
     $this->blog_model->blog($data);
    $this->load->view('post_blog',$data);
	
	}

}
?>