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

  	public function create_post(){
	    $config['upload_path'] = './assets/uploadposts';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
	    $this->load->library('upload' , $config);
	    if(!$this->upload->do_upload()){
		      $error = array('error' => $this->upload->display_errors());
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

 }