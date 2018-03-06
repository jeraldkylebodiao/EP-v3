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
    
      public function submit(){
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
   /*public function getBlog(){
    $this->db->order_by('tourist_name', 'desc');
    $query = $this->db->get('tbl_blogs');
    if($query->num_rows() > 0){
      return $query->result();
    }else{
      return false;
    }
  } */

 /* public function submit(){
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
  } */

 /* public function getBlogByIdp($id){
    $this->db->where('id', $id);
    $query = $this->db->get('user_posts');
    if($query->num_rows() > 0){
      return $query->row();
    }else{
      return false;
    }
  }*/
   /*public function getBlogById($id){
    $this->db->where('id', $id);
    $query = $this->db->get('tbl_blogs');
    if($query->num_rows() > 0){
      return $query->row();
    }else{
      return false;
    }
  }*/

/* public function update(){
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
  } */

/*  public function updatepost(){
    $config['upload_path'] = './assets/uploadposts';
    $config['allowed_types'] = 'gif|jpg|png|jfif|jpeg|mp4';
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
  } */

  /*public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('tbl_blogs');
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }*/

 /* public function deletepost($id){
    $this->db->where('id', $id);
    $this->db->delete('user_posts');
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  } */

 /* public function create_post(){
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
  }*/
  /*public function getPost(){
    $this->db->order_by('id', 'desc');
    $query = $this->db->get('user_posts');
    if($query->num_rows() > 0){
      return $query->result();
    }else{
      return false;
    }
  }*/
/*  public function viewprof(){
    $this->db->order_by('id', 'desc');
    //SELECT * FROM `users` WHERE user_role_id = '1'
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('user_role_id', '2');
    $query = $this->db->get();
    if($query->num_rows() > 0){
      return $query->result();
    }else{
      return false;
    }
  } */

 /* public function info($username){
    $this->db->select('*');
    $this->db->from('user_posts');
    $this->db->where('post_name',$username);
    $query=$this->db->get();
    return $query->result();
  } */
  /*public function editors($id){

    $field = array(
      'post_id'=>$id,
 
    );

      if($this->check_postid($field['post_id'])){
           $this->session->set_flashdata('error_msg', 'User Story Already in Editors Pick'); 
           redirect(base_url() . 'main/adminpost');

        }
        else{
         $this->db->insert('editors', $field);
         if($this->db->affected_rows() > 0){
            return true;
          }
          else{
            return false;
          }
        }
     // $this->db->insert('editors', $field);

       // $this->db->select('*');
       // $this->db->from('editors');
    // $query=$this->db->get()->result();
    // print_r($query);
    }

    public function check_postid($post_id){
        $this->db->where('post_id',$post_id);
        $this->db->from('editors');
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


  public function viewEP(){
    $this->db->select('post_id');
    $this->db->from('editors');
    $query=$this->db->get();
    return $query->result();   
    
  }
  public function gpost($data){
    foreach ($data['item'] as $post) {
    $this->db->select('*');
    $this->db->from('user_posts');
    $this->db->where('id',$post->post_id);
    $query=$this->db->get();
    $data2['item']=$query->result();
    
    //return $query->result();
   }
   return $data;
  }*/
    /*foreach ($item as $key=>$items ) {
        $this->db->select('*');
        $this->db->where('id',$items->post_id);
        $this->db->from('user_posts');
        $query=$this->db->get();
        $data[$key]=$query->result();
    */
        /*if($query->num_rows() > 0)  
           {  
                return $query->result();  
           }  
           else  
           {  
                return $query->result();       
           }  */
     // }
    //return $data;
      
     
    //$query = $this->db->get();
   // return $query;
  
  /*public function getpostEP($data){
    foreach ($EP as $key) {
  
        $this->db->where('id',$key->post_id);
        $this->db->from('user_posts');
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
     
    }*/
  /*public function getEp(){
    $this->db->select('*');
    $this->db->from('user_posts');
    $this->db->where('editors',2);
    $query=$this->db->get();
    return $query->result();
  }*/
  /*public function addEP($id){
    $this->db->where('id', $id);
    $query = $this->db->get('user_posts');
    if($query->num_rows() > 0){
      return $query->row();
    }
    else{
      return false;
    }
  }*/
  /*public function addEditors(){
    $id = $this->input->post('id_hidden');
    $field = array(
      'editors'=>$this->input->post('editors'),
      );
    $this->db->where('id', $id);
    $this->db->update('user_posts', $field);
    echo $this->db->last_query();extit;
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }*/

 /*  public function rmvEP($id){
    $this->db->where('id', $id);
    $query = $this->db->get('user_posts');
    if($query->num_rows() > 0){
      return $query->row();
    }
    else{
      return false;
    }
  } */
  /*public function rmvEditors(){
    $id = $this->input->post('id_hidden');
    $field = array(
      'editors'=>$this->input->post('editors'),
      );
    $this->db->where('id', $id);
    $this->db->update('user_posts', $field);
    echo $this->db->last_query();extit;
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  } */
}