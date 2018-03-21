<?php  
 class Account_model extends CI_Model  
 {  
 	
 	public function submit(){

	 	 $check_session = array(
                    'request' => '1',
                    
     ); 
    $this->session->set_userdata($check_session);
		$field = array(
	          'username'=>$this->input->post('username'),
	          'status'=>$this->input->post('status'),
	          'first_name'=>$this->input->post('first_name'),
	          'last_name'=>$this->input->post('last_name'),
	          'middle_initial'=>$this->input->post('middle_initial'),
	          'full_address'=>$this->input->post('address'),
	          'contact_number'=>$this->input->post('cnumber'),
	          'email_address'=>$this->input->post('emailadd'),
	          'birthdate'=>$this->input->post('birthdate')
		);
	   	$this->db->insert('accountverifier', $field);
	   	$field2= array(
  			'verification' => 'not verified'
  		);
  		$username=$this->input->post('username');
  		$this->db->where('username',$username);
  		
  		$this->db->update('users',$field2);
      	return true;
    
  	}
    public function getSession($username){
        $this->db->where('username', $username);
        $this->db->where('verification', 'verified');
        $this->db->get('users');
        if($this->db->affected_rows() > 0){
          return true;
        }
        else{
          return false;
        }
    }
  	public function accept($username){
  		$field= array(
  			'status' => 'verified'
  		);
  		$this->db->where('username',$username);
  		$this->db->where('status','not verified');
  		$this->db->update('accountverifier',$field);
  		$field2= array(
  			'verification' => 'verified'
  		);
  		$this->db->where('username',$username);
  		$this->db->where('verification','not verified');
  		$this->db->update('users',$field2);
  		if($this->db->affected_rows() > 0){
	    	return true;
	    }
	    else{
	    	return false;
	    }
  	}
  	public function decline($username){
  		$field= array(
  			'status' => 'declined'
  		);
  		$this->db->where('username',$username);
  		$this->db->where('status','not verified');
  		$this->db->update('accountverifier',$field);
  		$field2= array(
  			'verification' => 'declined'
  		);
  		$this->db->where('username',$username);
  		//$this->db->where('verification','not verified');
  		$this->db->update('users',$field2);
  	
  		if($this->db->affected_rows() > 0){
	    	return true;
	    }
	    else{
	    	return false;
	    }
  	}

 }