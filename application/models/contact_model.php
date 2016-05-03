<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class contact_model extends CI_Model {
public function __construct()
{
parent::__construct();
}
public function contact() {


$data=array(
'name'=>$this->input->post('name'),
'email'=>($this->input->post('email')),
'message'=>$this->input->post('message'),
);
$this->db->insert('contact',$data);
}
}