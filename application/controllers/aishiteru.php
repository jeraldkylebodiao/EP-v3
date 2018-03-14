 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Aishiteru extends CI_Controller {    
  
      function __construct(){
        parent:: __construct();
        $this->load->model('main_model','m');
      
          
      }
      public function login()  
      {  
          if($this->session->userdata('u_id')==''){
            $this->load->view("mainpage/login"); 
          }
           elseif ($this->session->userdata('u_id')=='1') {
           redirect(base_url() . 'gomenasai/bakana');
         }
         else{
           redirect(base_url() . 'dashboard/user');
         }
      }        
      public function signup()  
      {  
          if($this->session->userdata('u_id')==''){
           $this->load->view("template/header");
           $this->load->view("mainpage/signup"); 
           $this->load->view("template/footer"); 
         }
         elseif ($this->session->userdata('u_id')=='1') {
           redirect(base_url() . 'gomenasai/bakana');
         }
         else{
           redirect(base_url() . 'dashboard/user');
         }
      }
      public function login_val(){
        $item = $this->m->getdata();
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        foreach($item->result()  as $row){
            if($row->username == $username && $row->password == $password){
              $user_role_id=$row->user_role_id;
            }  
        }
       
        if($user_role_id==1){
                $check_session = array(
                    'u_id' => '1',
                    'post_name' => $username,
                ); 
                $this->session->set_userdata($check_session);

                
                redirect(base_url() . 'gomenasai/bakana');
        }
        else if($user_role_id==2){
                $check_session = array(
                    'u_id' => '2',
                    'post_name' => $username,
                  ); 
                $this->session->set_userdata($check_session);
                redirect(base_url() . 'dashboard/user');
        }
        else{
                $check_session = array(
                    'u_id' => ''
                ); 
                $this->session->set_userdata($check_session);
                 $this->session->set_flashdata('error', 'Invalid Username or Password');  
                 redirect(base_url());
        }
      }

      public function submit(){
        $result = $this->m->submit();
        if($result){
            $this->session->set_flashdata('success_msg', 'Registered successfully.');
        }
        else{
            $this->session->set_flashdata('error_msg', 'Registration failed!');
        }
        redirect(base_url());
      }
     
      public function logout()  
      {  
           $this->session->unset_userdata('username');  
           $this->session->unset_userdata('id');  
           $this->session->sess_destroy(); 
           redirect(base_url());  
      } 





}