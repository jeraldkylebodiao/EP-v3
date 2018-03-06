 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Main extends CI_Controller {    
  
      function __construct(){
        parent:: __construct();
        $this->load->model('main_model','m');
      
          
      }
      public function login()  
      {  
          if($this->session->userdata('u_id')==''){
            $this->load->view("login"); 
          }
           elseif ($this->session->userdata('u_id')=='1') {
           redirect(base_url() . 'main/admin');
         }
         else{
           redirect(base_url() . 'main/user');
         }
      }        
      public function signup()  
      {  
          if($this->session->userdata('u_id')==''){
           $this->load->view("header");
           $this->load->view("signup"); 
           $this->load->view("footer"); 
         }
         elseif ($this->session->userdata('u_id')=='1') {
           redirect(base_url() . 'main/admin');
         }
         else{
           redirect(base_url() . 'main/user');
         }
      }
      public function login_val(){
        $this->load->model('main_model');
        $item = $this->main_model->getdata();
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
                     'post_name' => $username
                    
                ); 
                $this->session->set_userdata($check_session);

                
                redirect(base_url() . 'main/admin');
        }
        else if($user_role_id==2){
                $check_session = array(
                    'u_id' => '2',
                    'post_name' => $username
                    
                ); 
                $this->session->set_userdata($check_session);
                redirect(base_url() . 'main/user');
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

      
      public function admin(){
		  redirect('Admin');
	  }
          
      
      public function user(){
          if ($this->session->userdata('u_id')=='2') {
             //$this->load->model('main_model');
             //$data['item'] = $this->main_model->getUn();
             $data['posts'] = $this->m->getPost();
             $this->load->view("users" ,$data);

          }            
          elseif ($this->session->userdata('u_id')=='1') {
            redirect(base_url() . 'main/admin');
          }
          else{
            redirect(base_url());
          }
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
         //  $this->session->unset_userdata('username');  
        //   $this->session->unset_userdata('id');  
            $this->session->sess_destroy(); 
           redirect(base_url());  
      }  
    function Apost(){
       if ($this->session->userdata('u_id')=='1') {
       
        $data['posts'] = $this->m->getPost();
        $this->load->view('u_post',$data);
     
    }
    elseif($this->session->userdata('u_id')=='2'){
        redirect(base_url() . 'main/user');
    }
    else{
        redirect(base_url());
    }
    }


  function index(){
    if ($this->session->userdata('u_id')=='1') {
        $data['blogs'] = $this->m->getBlog();
        $this->load->view('layout/header');
        $this->load->view('blog/index', $data);
        $this->load->view('layout/footer');
    }
    elseif($this->session->userdata('u_id')=='2'){
        redirect(base_url() . 'main/user');
    }
    else{
        redirect(base_url());
    }
  }

  public function add(){
    if ($this->session->userdata('u_id')=='1') {
        $this->load->view('layout/header');
        $this->load->view('blog/add');
        $this->load->view('layout/footer');
    }
    elseif($this->session->userdata('u_id')=='2'){
        redirect(base_url() . 'main/user');
    }
    else{
        redirect(base_url());
    }
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
    if ($this->session->userdata('u_id')=='1') {
        $data['blog'] = $this->m->getBlogById($id);
        $this->load->view('layout/header');
        $this->load->view('blog/edit', $data);
        $this->load->view('layout/footer');
    }
     elseif($this->session->userdata('u_id')=='2'){
        redirect(base_url() . 'main/user');
    }
    else{
        redirect(base_url());
    }
  }
   public function editpost($id){
    if ($this->session->userdata('u_id')=='2') {
        $data['post'] = $this->m->getBlogByIdp($id);
        $this->load->view('editpost', $data);
    }
     elseif($this->session->userdata('u_id')=='1'){
        redirect(base_url() . 'main/admin');
    }
    else{
        redirect(base_url());
    }
  }
  public function editpost_inprofile($id){
    if ($this->session->userdata('u_id')=='2') {
        $data['post'] = $this->m->getBlogByIdp($id);
        $this->load->view('editpost_inprofile', $data);
    }
     elseif($this->session->userdata('u_id')=='1'){
        redirect(base_url() . 'main/admin');
    }
    else{
        redirect(base_url());
    }
  }


  public function update(){
    if ($this->session->userdata('u_id')=='1') {
        $result = $this->m->update();
        if($result){
          $this->session->set_flashdata('success_msg', 'Record updated successfully');
        }else{
          $this->session->set_flashdata('error_msg', 'Fail to update record');
        }
        redirect(base_url('main/index'));
    }
    elseif($this->session->userdata('u_id')=='2'){
        redirect(base_url() . 'main/user');
    }
    else{
        redirect(base_url());
    }
  }
   public function updatepost(){
    if ($this->session->userdata('u_id')=='2') {
        $result = $this->m->updatepost();
        if($result){
          $this->session->set_flashdata('success_msg', 'Record updated successfully');
        }else{
          $this->session->set_flashdata('error_msg', 'Fail to update record');
        }
        redirect(base_url('main/user'));
    }
    elseif($this->session->userdata('u_id')=='1'){
        redirect(base_url() . 'main/admin');
    }
    else{
        redirect(base_url());
    }
  }
  public function updatepost_inprofile(){
    if ($this->session->userdata('u_id')=='2') {
        $result = $this->m->updatepost();
        if($result){
          $this->session->set_flashdata('success_msg', 'Record updated successfully');
        }else{
          $this->session->set_flashdata('error_msg', 'Fail to update record');
        }
        redirect(base_url('main/viewprofile'));
    }
    elseif($this->session->userdata('u_id')=='1'){
        redirect(base_url() . 'main/admin');
    }
    else{
        redirect(base_url());
    }
  }

  public function delete($id){
    if ($this->session->userdata('u_id')=='1') {
        $result = $this->m->delete($id);
        if($result){
          $this->session->set_flashdata('success_msg', 'Record deleted successfully');
        }else{
          $this->session->set_flashdata('error_msg', 'Fail to delete record');
        }
        redirect(base_url('main/index'));
    }
    elseif($this->session->userdata('u_id')=='2'){
        redirect(base_url() . 'main/user');
    }
    else{
        redirect(base_url());
    }
  }

  public function create_post(){
        if ($this->session->userdata('u_id')=='2') {
        $result = $this->m->create_post();
        if($result){
       
          $this->session->set_flashdata('success_msg', 'Post added successfully.');
        }else{
        
          $this->session->set_flashdata('error_msg', 'Post failed to add!');
        }
        redirect(base_url() . 'main/user');
         }
        elseif($this->session->userdata('u_id')=='1'){
        redirect(base_url() . 'main/admin');
    }
    else{
        redirect(base_url());
    }

    }
     public function create_post_in_profile(){
      if ($this->session->userdata('u_id')=='2') {
        $result = $this->m->create_post();
        if($result){
       
          $this->session->set_flashdata('success_msg', 'Post added successfully.');
        }else{
        
          $this->session->set_flashdata('error_msg', 'Post failed to add!');
        }
        redirect(base_url() . 'main/viewprofile');
         }
        elseif($this->session->userdata('u_id')=='1'){
        redirect(base_url() . 'main/admin');
    }
    else{
        redirect(base_url());
    }

    }

    public function deletepost($id){
    
        $result = $this->m->deletepost($id);
        if($result){
          $this->session->set_flashdata('success_msg', 'Record deleted successfully');
        }else{
          $this->session->set_flashdata('error_msg', 'Fail to delete record');
        }
        redirect(base_url('main/Apost'));
  
  }

    public function deletepost_inprofile($id){
    
        $result = $this->m->deletepost($id);
        if($result){
          $this->session->set_flashdata('success_msg', 'Record deleted successfully');
        }else{
          $this->session->set_flashdata('error_msg', 'Fail to delete record');
        }
        redirect(base_url('main/viewprofile'));
  
  }
  public function viewprofile(){
    if ($this->session->userdata('u_id')=='2') {
     $data['posts'] = $this->m->getPost();
      $this->load->view('viewprofile',$data); }
        elseif($this->session->userdata('u_id')=='1'){
        redirect(base_url() . 'main/user');
    }
    else{
        redirect(base_url());
    }
  }

	public function Crud_admin(){
			$this->load->view("header");
           $this->load->view("Crud_admin");
           $this->load->view("footer"); }
		   
		  
	public function createadmin()  
      {  
           $this->load->view("header");
           $this->load->view('adminfield/addmin'); 
           $this->load->view("footer"); 
      }
}