 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Main extends CI_Controller {  
      //functions  

      function __construct(){
        parent:: __construct();
         $this->load->model('main_model', 'm');
		 $this->load->view("header");
      }
	  
	  public function admin()
	  {
		  redirect('admin');
	  }
 
      public function login()  
      {  
            $this->load->view("login");     
      }  
	  
      public function signup()  
      {  
           $this->load->view("header");
		   $this->load->view("signup"); 
           $this->load->view("footer"); 
      }
	  
	  public function Editors()
	  {
		  $this->load->view("editors");
	  }
	  
      public function login_val(){
        $this->load->model('main_model');
 
        $email = $this->input->post('email');
        $password = $this->input->post('password');
		$item = $this->main_model->getdata($email,$password);

        if($item->user_role_id==1){
				$this->session->set_userdata('user_role_id',$item->user_role_id);
                redirect('admin');
        }
        else if($user_role_id==2){
                redirect(base_url() . 'main/user');
        }
        else{
                 $this->session->set_flashdata('error', 'Invalid Username or Password');  
                 redirect(base_url());
        }
      }

     
      public function user(){
           $this->load->view("header");
           $this->load->view("users");
           $this->load->view("footer");
      }
     
      public function submit2(){
       $result = $this->m->submit2();
        
        if($result){
       
          $this->session->set_flashdata('success_msg', 'Registered successfully.');
        }else{
        
          $this->session->set_flashdata('error_msg', 'Registration failed!');
        }
        redirect(base_url());
      }
     
      public function logout()  
      {  
           $this->session->sess_destroy();  
           redirect(base_url());  
      }  
	  
	  
 
		public function Crud_admin()
		{
			$this->load->view("header");
			$this->load->view("Crud_admin");
			$this->load->view("footer");
		}

		public function createadmin()  
      {  
           $this->load->view("header");
           $this->load->view('adminfield/addmin'); 
           $this->load->view("footer"); 
      }
		
  function index(){
    $data['blogs'] = $this->m->getBlog();
    $this->load->view('layout/header');
    $this->load->view('blog/index', $data);
    $this->load->view('layout/footer');
  }
  
    public function viewuser(){
  
    $this->load->view("header");
    $this->load->view('adminfield/index_account');
    $this->load->view("footer");
  }

  public function add(){
  
    $this->load->view('layout/header');
    $this->load->view('blog/add');
    $this->load->view('layout/footer');
  }
  

  public function submit(){
   
    $result = $this->m->submit();
    if($result){
      $this->session->set_flashdata('success_msg', 'Record added successfully');
    }else{
      $this->session->set_flashdata('error_msg', 'Fail to add record');
    }
    redirect(base_url('main/index'));
  }

  public function edit($id){
    $data['blog'] = $this->m->getBlogById($id);
    $this->load->view('layout/header');
    $this->load->view('blog/edit', $data);
    $this->load->view('layout/footer');
  }
  


  public function update(){
    $result = $this->m->update();
    if($result){
      $this->session->set_flashdata('success_msg', 'Record updated successfully');
    }else{
      $this->session->set_flashdata('error_msg', 'Fail to update record');
    }
    redirect(base_url('main/index'));
  }

  public function delete($id){
    $result = $this->m->delete($id);
    if($result){
      $this->session->set_flashdata('success_msg', 'Record deleted successfully');
    }else{
      $this->session->set_flashdata('error_msg', 'Fail to delete record');
    }
    redirect(base_url('main/index'));
  }

}