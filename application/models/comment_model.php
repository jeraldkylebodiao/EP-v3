<?php  
 class Comment_model extends CI_Model  
 { 

  public function addcomment(){
    	$field = array(
    		'tripIdNumber' => $this->input->post('tripIdNumber'),
    		'username' => $this->input->post('comment_name'),
    		'comment' => $this->input->post('comment'),
    	);
    	$this->db->insert('tourcomment',$field);
    }


 }