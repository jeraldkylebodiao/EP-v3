 <?php  
 class Main_model extends CI_Model  
 {  
      public function getdata(){
        $this->db->select('password,username,user_role_id');
        $this->db->from('users');
        $query = $this->db->get();
        return $query;
      }
      public function getTrips(){
        $this->db->where('tourStatus','approved');
        $query=$this->db->get('usertrips');
        return $query->result();
      }
      public function getTouristSpots(){
        $query=$this->db->get('tbl_blogs');
        return $query->result();
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
              'full_name'=>$this->input->post('full_name'),
              'username'=>$this->input->post('username'),
              'password'=>$pass,
              'user_role_id'=>$this->input->post('user_role_id'),
              'verification'=>$this->input->post('verification')
          );
          if($this->check_username($field['username'])){
              $this->session->set_flashdata('error', 'USERNAME already taken');
              redirect(base_url() . 'aishiteru/signup');
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
  }