 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Admin extends CI_Controller {  
      //functions  

      function __construct(){
        parent:: __construct();
		
		if($this->session->userdata('user_role_id') == 1){
		
			$this->load->view("adminfield/header");
			$this->load->model('admin_model', 'm');
		   
		}
		
      }
	  public function index(){
	  $this->admin('admin');
	  }
	  
	  public function toMain(){
		  redirect('main');
		  
	  }
	  
	  
		private function admin(){
          if ($this->session->userdata('u_id')=='1') {
             $this->load->view("header");
             $this->load->view("admin");
             $this->load->view("footer");
          }
          elseif ($this->session->userdata('u_id')=='2') {
            redirect(base_url() . 'main/user');
          }
          else{
            redirect(base_url());
          }
      }
	  
			
		   
 }