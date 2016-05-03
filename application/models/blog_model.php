<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class blog_model extends CI_Model {
public function __construct()
{
parent::__construct();
}
public function blog() {


$data=array(
'title'=>$this->input->post('title'),
'image'=>($this->input->post('image')),
'description'=>$this->input->post('description'),
);
$this->db->insert('blog',$data);
}

}