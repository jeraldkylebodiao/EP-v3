<?php  
 class Editorspick_model extends CI_Model  
 {  


 	public function getEp(){
 		$this->db->order_by('id', 'desc');
	    $this->db->select('*');
	    $this->db->from('user_posts');
	    $this->db->where('editors',2);
	    $query=$this->db->get();
	    return $query->result();
  	}

  	public function rmvEP($id){
	    $this->db->where('id', $id);
	    $query = $this->db->get('user_posts');
	    if($query->num_rows() > 0){
	      	return $query->row();
	    }
	    else{
	     	return false;
	    }
  	}

  	public function rmvEditors(){
	    $id = $this->input->post('id_hidden');
	    $field = array(
	      	'editors'=>$this->input->post('editors'),
	    );
	    $this->db->where('id', $id);
	    $this->db->update('user_posts', $field);
	    echo $this->db->last_query();extit;
	    if($this->db->affected_rows() > 0){
	      	return true;
	    }
	    else{
	      	return false;
	    }
  	}

  	public function addEP($id){
	    $this->db->where('id', $id);
	    $query = $this->db->get('user_posts');
	    if($query->num_rows() > 0){
	      	return $query->row();
	    }
	    else{
	      	return false;
	    }
	}

	public function addEditors(){
	    $id = $this->input->post('id_hidden');
	    $field = array(
	      	'editors'=>$this->input->post('editors'),
	    );
	    $this->db->where('id', $id);
	    $this->db->update('user_posts', $field);
	    echo $this->db->last_query();extit;
	    if($this->db->affected_rows() > 0){
	      	return true;
	    }
	    else{
	      	return false;
	    }
 	}


 }
