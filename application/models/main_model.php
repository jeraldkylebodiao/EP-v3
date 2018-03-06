 <?php  
 class Main_model extends CI_Model  
 {  
 
		
      public function getdata($email,$password){
        $this->db->select('password,email,user_role_id');
        $this->db->from('users');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
        $query = $this->db->get();
        return $query->row();
      }
	  
      public function can_login($email, $password)  
      {  
           $this->db->where('email', $email);  
           $this->db->where('password', $password); 
           $query = $this->db->get('users');  
           //SELECT * FROM users WHERE email = '$email' AND password = '$password' 
		   
		   return $query->row();
      } 
    
      public function submit2(){
        $field = array(
          'username'=>$this->input->post('username'),
          'email'=>$this->input->post('email'),
          'password'=>$this->input->post('password'),
          'user_role_id'=>$this->input->post('user_role_id'),
        
       );
        $this->db->insert('users', $field);
        if($this->db->affected_rows() > 0){
          return true;
        }
        else{
          return false;
        }
     }
   

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
    $config['allowed_types'] = 'gif|jpg|png';
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
    }else{
      return false;
    }
  }

  public function getBlogById($id){
    $this->db->where('id', $id);
    $query = $this->db->get('tbl_blogs');
    if($query->num_rows() > 0){
      return $query->row();
    }else{
      return false;
    }
  }
  
  public function getUserById($id){
    $this->db->where('id', $id);
    $query = $this->db->get('users');
    if($query->num_rows() > 0){
      return $query->row();
    }else{
      return false;
    }
  }

  public function update(){
    $config['upload_path'] = './assets/upload';
    $config['allowed_types'] = 'gif|jpg|png';
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
    }else{
      return false;
    }
  }

  
  
  public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('tbl_blogs');
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

}