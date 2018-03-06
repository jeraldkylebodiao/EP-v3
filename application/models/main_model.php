 <?php  
 class Main_model extends CI_Model  
 {  
      public function getdata(){
        $this->db->select('password,username,user_role_id');
        $this->db->from('users');
        $query = $this->db->get();
        return $query;
      }
    
      public function check_email($email){
        $this->db->where('email',$email);
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
       public function check_username($username){
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
      public function can_login($email, $password)  
      {  
           $this->db->where('email', $email);  
           $this->db->where('password', $password); 
           $query = $this->db->get('users');  
           //SELECT * FROM users WHERE email = '$email' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      } 
    
      public function submit2(){
        $pass=md5($this->input->post('password'));
        $field = array(
          'username'=>$this->input->post('username'),
          'email'=>$this->input->post('email'),
          'password'=>$pass,
          'user_role_id'=>$this->input->post('user_role_id'),
        
       );
        if($this->check_email($field['email'])){
            $this->session->set_flashdata('error', 'EMAIL already taken'); 
           redirect(base_url() . 'main/signup');

        }
        elseif($this->check_username($field['username'])){
           $this->session->set_flashdata('error', 'USERNAME already taken');
           redirect(base_url() . 'main/signup');
        }
        else{
          $this->db->insert('users', $field);
          if($this->db->affected_rows() > 0){
            return true;
          }
          else{
            return false;
          }
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
    }else{
      return false;
    }
  }

  public function getBlogByIdp($id){
    $this->db->where('id', $id);
    $query = $this->db->get('user_posts');
    if($query->num_rows() > 0){
      return $query->row();
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
    }else{
      return false;
    }
  }

  public function updatepost(){
    $config['upload_path'] = './assets/uploadposts';
    $config['allowed_types'] = 'gif|jpg|png|jfif|jpeg|mp4';
    $this->load->library('upload' , $config);
    if(!$this->upload->do_upload()){
      $error = array('error' => $this->upload->display_errors());
      echo "yup";
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

  public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('tbl_blogs');
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  public function deletepost($id){
    $this->db->where('id', $id);
    $this->db->delete('user_posts');
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  public function create_post(){
    $config['upload_path'] = './assets/uploadposts';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|mp4';
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
          'post_image' => $post_image
        );
       
          $this->db->insert('user_posts', $field);
          if($this->db->affected_rows() > 0){
            return true;
          }
          else{
            return false;
          }
  }
  public function getPost(){
    $this->db->order_by('id', 'desc');
    $query = $this->db->get('user_posts');
    if($query->num_rows() > 0){
      return $query->result();
    }else{
      return false;
    }
  }
  

}