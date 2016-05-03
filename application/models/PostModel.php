
<?php
class PostModel extends CI_Model {
 
function getPosts(){
  $this->db->select("id,title,image,description");
  $this->db->from('blog');
  $query = $this->db->get();
  return $query->result();
}
 
}
?>
