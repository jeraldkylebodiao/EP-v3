<?php  
 class Admin_model extends CI_Model  
 {  
 	public function getBlog(){
	    $this->db->order_by('tourist_name', 'desc');
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
	    }
	    else{
		    $field = array('upload_data' => $this->upload->data());
		    $ts_image = $_FILES['userfile']['name'];
	    }
	    $field = array(
		    'tourist_name'=>$this->input->post('txt_tourist_name'),
		    'desc_name'=>$this->input->post('txt_desc_name'),
		    'reg_name'=>$this->input->post('txt_reg_name'),
		    'prov_name'=>$this->input->post('txt_prov_name'),
		    'city_name'=>$this->input->post('txt_city_name'),
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

	public function update(){
	    $config['upload_path'] = './assets/upload';
	    $config['allowed_types'] = 'gif|jpg|png|jfif|jpeg|mp4';
	    $this->load->library('upload' , $config);
	    if(!$this->upload->do_upload()){
	     	 $error = array('error' => $this->upload->display_errors());
	    }
	    else{
	      	$field = array('upload_data' => $this->upload->data());
	      	$ts_image = $_FILES['userfile']['name'];
	    }
	    $id = $this->input->post('txt_hidden');
	    $field = array(
		      'tourist_name'=>$this->input->post('txt_tourist_name'),
		      'desc_name'=>$this->input->post('txt_desc_name'),
		      'reg_name'=>$this->input->post('txt_reg_name'),
		      'prov_name'=>$this->input->post('txt_prov_name'),
		      'city_name'=>$this->input->post('txt_city_name'),
		      'ts_image' => $ts_image,
	    );
	    $this->db->where('id', $id);
	    $this->db->update('tbl_blogs', $field);
	    echo $this->db->last_query();extit;
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
	    $this->db->select('*');
	    $this->db->from('user_posts');
	    $this->db->where('post_name',$username);
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