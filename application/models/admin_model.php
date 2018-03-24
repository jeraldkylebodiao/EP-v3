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
	public function gtourist($tsId){
		$this->db->where('tsId',$tsId);
		$query=$this->db->get('tbl_blogs');
		return $query->result();

	}
	public function gtouristactivity($tsId){
		$this->db->where('tsId',$tsId);
		$query=$this->db->get('touristspot_activities');
		return $query->result();
	}
	public function getActivity(){
		$this->db->order_by('activity', 'ASC');
		$query=$this->db->get('touristspot_activities');
		return $query->result();
	}
	public function submitActivity(){
		$field = array(
			'tsId' =>$this->input->post('tsId') ,
			'activity' =>$this->input->post('activity') 
		);
		$query=$this->db->insert('touristspot_activities',$field);
		return $query;
	}
	public function deleteactivity($id){
		$this->db->where('id',$id);
		$this->db->delete('touristspot_activities');
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
		    'tsId'=>$this->input->post('tsId'),
		    'tourist_name'=>$this->input->post('txt_tourist_name'),
		    'desc_name'=>$this->input->post('txt_desc_name'),
		    'address'=>$this->input->post('txt_address'),
		    'ts_image' => $ts_image,
	    );
	    if($this->check_tripIdNumber($field['tsId'])){
	        	$var = rand();
		        for ($x = 1; $x <= 1; $x++) {
		          if($this->check_tripIdNumberExisting($var)){
		              $var = rand();
		            $x--;
		          }
		          else{
		            $field = array(
		                  	'tsId'=>$var,
						    'tourist_name'=>$this->input->post('txt_tourist_name'),
						    'desc_name'=>$this->input->post('txt_desc_name'),
						    'address'=>$this->input->post('txt_address'),
						    'ts_image' => $ts_image,

		            );
	        	}
	        }
	    }
	    $this->db->insert('tbl_blogs', $field);
	    if($this->db->affected_rows() > 0){
	    	return true;
	    }
	    else{
	    	return false;
	    }
	}

	 public function check_tripIdNumberExisting($var){
        $this->db->where('tsId',$var);
        $this->db->from('tbl_blogs');
        $query=$this->db->get(); 
	        return $query->result();    
	  }
	  public function check_tripIdNumber($tripIdNumber){
	        $this->db->where('tsId',$tripIdNumber);
	        $this->db->from('tbl_blogs');
	        $query=$this->db->get(); 
	        return $query->result();    
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
		      'address'=>$this->input->post('txt_address')
		     
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
  	public function verify(){
	    $this->db->order_by('id', 'desc');
	    $query = $this->db->get('accountverifier');
	    if($query->num_rows() > 0){
	      	return $query->result();
	    }
	    else{
	      	return false;
	    }
  	}
  	public function verifyTour(){
	    $this->db->order_by('id', 'desc');
	    $query = $this->db->get('usertrips');
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
  	public function verifyById($username){
  		$this->db->order_by('id', 'desc');
	    $this->db->select('*');
	    $this->db->from('accountverifier');
	    $this->db->where('username',$username);
	    $this->db->where('status','not verified');
	    $query=$this->db->get();
	    return $query->result();
  	}
  	public function verifyTourById($username){
  		$this->db->order_by('id', 'desc');
	    $this->db->select('*');
	    $this->db->from('usertrips');
	    $this->db->where('user',$username);
	    $this->db->where('tourstatus','not approved');
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