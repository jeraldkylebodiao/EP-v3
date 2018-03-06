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
	  
	  
	   private function admin($page){
           $this->load->view("header");
           $this->load->view($page);
           $this->load->view("footer");
      }

	  
 }