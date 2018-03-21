 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Account extends CI_Controller {    
  
      function __construct(){
            parent:: __construct();
            $this->load->model('account_model','m');
    	}     

    public function verifyaccount($username){
    
       if ($this->session->userdata('u_id')=='2') {
            if ($this->session->userdata('request')=='' || $this->session->userdata('request')=='1') {
              
                   $this->load->view('verify/verifyaccount');
               }
              
            
            else{
              redirect(base_url('dashboard/account/') .$this->session->userdata('post_name'));
            }
       }
    }

    public function submit(){
          if ($this->session->userdata('u_id')=='2') {
              $result = $this->m->submit();
              if($result){
                  $this->session->set_flashdata('success_msg', 'Submitted successfully.');
              }
              else{
                  $this->session->set_flashdata('error_msg', 'Submitted successfully!');
              }
              redirect(base_url('dashboard/account/') .$this->session->userdata('post_name'));
          }

    }
    public function accept($username){
      
      $result=$this->m->accept($username);
        if($result){
            $this->session->set_flashdata('success_msg', 'Account verified successfully!');
          }
        redirect(base_url('gomenasai/view/') .$username);
    }

    public function decline($username){
      $result=$this->m->decline($username);
      if($result){
            $this->session->set_flashdata('success_msg', 'Account verification declined successfully!');
          }
        redirect(base_url('gomenasai/view/') .$username);
      }
      
 }