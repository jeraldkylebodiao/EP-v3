<?php  
 class Admin_model extends CI_Model  
 {  
 	public function getBlog(){
	    $this->db->order_by('tourist_name', 'asc');
	    $query = $this->db->get('tbl_blogs');
	    if($query->num_rows() > 0){
	      return $query->result();
	    }else{
	      return false;
	    }
	}

	public function submit(){
	    $config['upload_path'] = './assets/upload';
	    $config['allowed_types'] = 'gif|jpg|png|jfif|jpeg';
	    $this->load->library('upload' , $config);
	    if(!$this->upload->do_upload()){
	    	$error = array('error' => $this->upload->display_errors());
	    	$ts_image = $_FILES['userfile']['name'];
	    }
	    else{
		    $field = array('upload_data' => $this->upload->data());
		    $ts_image = $_FILES['userfile']['name'];
	    }
	    $field = array(
		    'tourist_name'=>$this->input->post('txt_tourist_name'),
		    'desc_name'=>$this->input->post('txt_desc_name'),
		    'address'=>$this->input->post('txt_address'),
		    'price'=>$this->input->post('txt_price'),
		    'ts_image' => $ts_image,
	    );
	    $this->db->insert('tbl_blogs', $field);
	    if($this->db->affected_rows() > 0){
	    	return true;
	    }
	    else{
	    	return false;
	    }
	}

	public function getImage($ts_image){
		$this->db->where('ts_image', $ts_image);
	    $query = $this->db->get('tbl_blogs');
	    if($query->num_rows() > 0){
	      	return $query->row();
	    }
	    else{
	      	return false;
	    }
	}
	public function updateImage(){
		 $config['upload_path'] = './assets/upload';
	    $config['allowed_types'] = 'gif|jpg|png|jfif|jpeg';
	    $this->load->library('upload' , $config);
	    if(!$this->upload->do_upload()){
	    	$error = array('error' => $this->upload->display_errors());
	    	$ts_image = $_FILES['userfile']['name'];
	    }
	    else{
		    $field = array('upload_data' => $this->upload->data());
		    $ts_image = $_FILES['userfile']['name'];
	    }
	     $id = $this->input->post('id_hidden');
	    $field = array(
		    'ts_image' => $ts_image,
	    );
	    $this->db->where('id', $id);
	    $this->db->update('tbl_blogs', $field);
	    if($this->db->affected_rows() > 0){
	    	return true;
	    }
	    else{
	    	return false;
	    }
	}
	public function update(){
	   
	    $id = $this->input->post('txt_hidden');
	    $field = array(
		      'tourist_name'=>$this->input->post('txt_tourist_name'),
		      'desc_name'=>$this->input->post('txt_desc_name'),
		      'address'=>$this->input->post('txt_address'),
		      'price'=>$this->input->post('txt_price'),
		     
	    );
	    $this->db->where('id', $id);
	    $this->db->update('tbl_blogs', $field);
	    if($this->db->affected_rows() > 0){
	      	return true;
	    }
	    else{
	      	return false;
	    }
 	}

 	public function delete($id){
	    $this->db->where('id', $id);
	    $this->db->delete('tbl_blogs');
	    if($this->db->affected_rows() > 0){
	      	return true;
	    }
	    else{
	     	 return false;
	    }
  	}

  	public function viewprof(){
	    $this->db->order_by('id', 'desc');
	    $this->db->select('*');
	    $this->db->from('users');
	    $this->db->where('user_role_id', '2');
	    $query = $this->db->get();
	    if($query->num_rows() > 0){
	      	return $query->result();
	    }
	    else{
	     	return false;
	    }
  	}

  	public function info($username){
  		$this->db->order_by('id', 'desc');
	    $this->db->select('*');
	    $this->db->from('user_posts');
	    $this->db->where('post_name',$username);
	    $query=$this->db->get();
	    return $query->result();
  	}
  	public function trips($username){
  		$this->db->order_by('id', 'desc');
	    $this->db->select('*');
	    $this->db->from('usertrips');
	    $this->db->where('user',$username);
	    $query=$this->db->get();
	    return $query->result();
  	}
  	public function getTouristSpot(){
	    $this->db->order_by('tourist_name', 'asc');
	    $query = $this->db->get('tbl_blogs');
	    if($query->num_rows() > 0){
	      	return $query->result();
	    }
	    else{
	      	return false;
	    }
  	}
  	public function getPosts(){
  		$this->db->order_by('id', 'desc');
	    $this->db->select('*');
	    $this->db->from('user_posts');
	    $query=$this->db->get();
	    return $query->result();
  	}
  	 	public function getEditors(){
  		$this->db->order_by('id', 'desc');
	    $this->db->select('*');
	    $this->db->from('user_posts');
	   	$this->db->where('editors', 2);
	    $query=$this->db->get();
	    return $query->result();
  	}

  	public function deletepost($id){
	    $this->db->where('id', $id);
	    $this->db->delete('user_posts');
	    if($this->db->affected_rows() > 0){
	      	return true;
	    }
	    else{
	     	return false;
	    }
  	}

  	public function getBlogById($id){
	    $this->db->where('id', $id);
	    $query = $this->db->get('tbl_blogs');
	    if($query->num_rows() > 0){
	      return $query->row();
	    }
	    else{
	      return false;
	    }
	}


 }