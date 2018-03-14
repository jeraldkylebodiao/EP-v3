 <?php  
 class User_model extends CI_Model  
 {

 	public function getPost(){
	    $this->db->order_by('id', 'desc');
	    $query = $this->db->get('user_posts');
	    if($query->num_rows() > 0){
	      	return $query->result();
	    }
	    else{
	      	return false;
	    }
  	}
  	public function getEp(){
 		$this->db->order_by('id', 'desc');
	    $this->db->select('*');
	    $this->db->from('user_posts');
	    $this->db->where('editors',2);
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
  		public function account(){
	    $this->db->order_by('id', 'desc');
	    $query = $this->db->get('users');
	    if($query->num_rows() > 0){
	      	return $query->result();
	    }
	    else{
	      	return false;
	    }
  	}
 

  	public function create_post(){
	    $config['upload_path'] = './assets/uploadposts';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
	    $this->load->library('upload' , $config);
	    if(!$this->upload->do_upload()){
		      $error = array('error' => $this->upload->display_errors());
		      $post_image = $_FILES['userfile']['name'];
		      echo "wakaranai";
	    }
	    else{
		      $field = array('upload_data' => $this->upload->data());
		      $post_image = $_FILES['userfile']['name'];
	    }
		$field = array(
	          'title'=>$this->input->post('title'),
	          'body'=>$this->input->post('body'),
	          'post_name'=>$this->input->post('post_name'),
	          'post_image' => $post_image,
	          'editors'=>$this->input->post('editors'),
		);
	   	$this->db->insert('user_posts', $field);
      	if($this->db->affected_rows() > 0){
        	return true;
    	}
      	else{
       	 	return false;
      	}
  	}

  	public function getBlogByIdp($id){
	    $this->db->where('id', $id);
	    $query = $this->db->get('user_posts');
	    if($query->num_rows() > 0){
	      	return $query->row();
	    }
	    else{
	      	return false;
	    }
  	}

  	public function editaccount($username){
	    $this->db->where('username', $username);
	    $query = $this->db->get('users');
	    if($query->num_rows() > 0){
	      	return $query->row();
	    }
	    else{
	      	return false;
	    }
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

  	public function updatepost(){
	    $config['upload_path'] = './assets/uploadposts';
	    $config['allowed_types'] = 'gif|jpg|png|jfif|jpeg|JPG';
	    $this->load->library('upload' , $config);
	    if(!$this->upload->do_upload()){
	      $error = array('error' => $this->upload->display_errors());
	      echo "wakaranai";
	    }
	    else{
	      $field = array('upload_data' => $this->upload->data());
	      $post_image = $_FILES['userfile']['name'];
	    }
	    $id = $this->input->post('id_hidden');
	    $field = array(
	      'title'=>$this->input->post('txt_title'),
	      'body'=>$this->input->post('txt_body'),
	      'post_image' => $post_image,
	      );
	    $this->db->where('id', $id);
	    $this->db->update('user_posts', $field);
	    echo $this->db->last_query();extit;
	    if($this->db->affected_rows() > 0){
	      return true;
	    }else{
	      return false;
	    }
	}
	public function updateposts(){
	   
	    $id = $this->input->post('id_hidden');
	    $field = array(
	      'title'=>$this->input->post('txt_title'),
	      'body'=>$this->input->post('txt_body'),
	     
	      );
	    $this->db->where('id', $id);
	    $this->db->update('user_posts', $field);
	    echo $this->db->last_query();extit;
	    if($this->db->affected_rows() > 0){
	      return true;
	    }else{
	      return false;
	    }
	}
	public function updateaccount(){
	    $id = $this->input->post('id_hidden');
	   	$username = $this->input->post('username_hidden');	
	    $field = array(
	      'full_name'=>$this->input->post('txt_fname'),
	      'username'=>$this->input->post('txt_username')
	     );
	     if($this->check_username($field['username'])){
              $this->session->set_flashdata('error', 'USERNAME already taken');
              redirect(base_url('dashboard/editaccount/') .$username );
         }
         else{  
         	$postname = array(
         		'post_name'=>$this->input->post('txt_username')
         	);
         	$this->db->where('post_name', $username);
		    $this->db->update('user_posts', $postname);
		    $user = array(
         		'user'=>$this->input->post('txt_username')
         	);
         	$this->db->where('user', $username);
		    $this->db->update('usertrips', $user);

         	$check_session = array(
                    'post_name' => $field['username']
            ); 
            $this->session->set_userdata($check_session);
         	$this->db->where('id', $id);
		    $this->db->update('users', $field);
		    if($this->db->affected_rows() > 0){
		      return true;
		    }else{
		      return false;
		    }
         }
	    
	}

	public function check_username($username){
		$id = $this->input->post('id_hidden');
		$this->db->where('id !=',$id);
		$this->db->where('username',$username);
        $this->db->from('users');
        $query=$this->db->get();

        if($query->num_rows() > 0)  
           {  
                return $query->result();  
           }  
           else  
           {  
                return $query->result();       
           }  
      }
	
	public function getPassword($username){
	    $this->db->where('username', $username);
	    $query = $this->db->get('users');
	    if($query->num_rows() > 0){
	      	return $query->row();
	    }
	    else{
	      	return false;
	    }
  	}

  	public function updatePassword(){
		$id = $this->input->post('id_hidden');
		$username = $this->input->post('username_hidden');		
		$oldpassword=md5($this->input->post('oldpassword'));
		$newpassword=md5($this->input->post('newpassword'));
		$confirmpassword=md5($this->input->post('confirmpassword'));
	    $field = array(
		      'oldpassword'=>$oldpassword,
		      'newpassword'=>$newpassword,
		      'confirmpassword'=>$confirmpassword
	    );
	    $username = $this->input->post('username_hidden');
	    if($this->check_password($field['oldpassword'])){
	    	if ($field['oldpassword']!=$field['newpassword']) {
	    		if ($field['newpassword']==$field['confirmpassword']) {
	        	 	$pass = array(
	        	 		'username' =>$username,
	        	 		'password' =>$newpassword
	        	 	);
	    	 	 	$this->db->where('id', $id);
				    $this->db->update('users', $pass);
				    if($this->db->affected_rows() > 0){
				      	return true;
				    }
				    else{
				      	return false;
				    }
				    $this->session->set_flashdata('success', 'Password Updated');
				    redirect(base_url('dashboard/editaccount/'.$username));
				}
				else{
					$this->session->set_flashdata('error', 'Password do not Match');
	              	redirect(base_url('dashboard/editpassword/'.$username));
				}
	    	}
	    	else{
	    		$this->session->set_flashdata('error', 'Old Password and New Password are Identical');
	              	redirect(base_url('dashboard/editpassword/'.$username));
	    	}
	        	
        }
        else{
        	$this->session->set_flashdata('error', 'Incorrect Old Password');
        	redirect(base_url('dashboard/editpassword/'.$username));
        }

	   
 	}

 	 public function check_password($oldpassword){
 	 	$id = $this->input->post('id_hidden');
        $this->db->where('id',$id);
		$this->db->where('password',$oldpassword);
        $this->db->from('users');
        $query=$this->db->get();
        if($query->num_rows() > 0)  
           {  
                return $query->result();  
           }  
           else  
           {  
                return $query->result();       
           }  
      }
      public function getImage($post_image){
		$this->db->where('post_image', $post_image);
	    $query = $this->db->get('user_posts');
	    if($query->num_rows() > 0){
	      	return $query->row();
	    }
	    else{
	      	return false;
	    }
	}
	public function updateImage(){
		 $config['upload_path'] = './assets/uploadposts';
	    $config['allowed_types'] = 'gif|jpg|png|jfif|jpeg';
	    $this->load->library('upload' , $config);
	    if(!$this->upload->do_upload()){
	    	$error = array('error' => $this->upload->display_errors());
	    	$post_image = $_FILES['userfile']['name'];
	    }
	    else{
		    $field = array('upload_data' => $this->upload->data());
		    $post_image = $_FILES['userfile']['name'];
	    }
	     $id = $this->input->post('id_hidden');
	    $field = array(
		    'post_image' => $post_image,
	    );
	    $this->db->where('id', $id);
	    $this->db->update('user_posts', $field);
	    if($this->db->affected_rows() > 0){
	    	return true;
	    }
	    else{
	    	return false;
	    }
	}

	public function getTrips(){
		
		$query=$this->db->get('usertrips');
		return $query->result();
	}

	public function getTripsById($id){
	    $this->db->where('id', $id);
	    $query = $this->db->get('usertrips');
	    if($query->num_rows() > 0){
	      	return $query->row();
	    }
	    else{
	      	return false;
	    }
  	}
  	public function getTourist(){
 		$query=$this->db->get('tbl_blogs');
 		return $query->result();
 	}
 	public function getOrigin(){
  		$query=$this->db->get('places');
  		return $query->result();
  	}

  	public function cancelTrip($id){
	    $this->db->where('id', $id);
	    $this->db->delete('usertrips');
	    if($this->db->affected_rows() > 0){
	      return true;
	    }
	    else{
	      return false;
	    }
  	}	
  	
}