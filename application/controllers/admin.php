 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Admin extends CI_Controller {    
  
  	function __construct(){
	    parent:: __construct();
	    $this->load->model('admin_model','m');
	}      

	public function admin(){
		if ($this->session->userdata('u_id')=='1') {
		 $this->load->view("template/header");
		 $this->load->view("adminpage/admin");
		 $this->load->view("template/footer");
		}
		elseif ($this->session->userdata('u_id')=='2') {
		redirect(base_url() . 'dashboard/user');
		}
		else{
		redirect(base_url());
		}
	}

	function index(){
		if ($this->session->userdata('u_id')=='1') {
		    $data['blogs'] = $this->m->getBlog();
		    $this->load->view('layout/header');
		    $this->load->view('crud/index', $data);
		    $this->load->view('layout/footer');
		}
		elseif($this->session->userdata('u_id')=='2'){
		    redirect(base_url() . 'dashboard/user');
		}
		else{
		    redirect(base_url());
		}
	}

	function adminpost(){
	   	if($this->session->userdata('u_id')=='1') {
		   	$data['posts'] = $this->m->viewprof();
		    $this->load->view('adminpage/adminview',$data);
	 	}
		elseif($this->session->userdata('u_id')=='2'){
		    redirect(base_url() . 'dashboard/user');
		}
		else{
		    redirect(base_url());
		}
	}
	

	public function add(){
		if ($this->session->userdata('u_id')=='1') {
		    $this->load->view('layout/header');
		    $this->load->view('crud/add');
		    $this->load->view('layout/footer');
		}
		elseif($this->session->userdata('u_id')=='2'){
		    redirect(base_url() . 'dashboard/user');
		}
		else{
		    redirect(base_url());
		}
	}

	public function edit($id){
	    if ($this->session->userdata('u_id')=='1') {
	        $data['blog'] = $this->m->getBlogById($id);
	        $this->load->view('layout/header');
	        $this->load->view('crud/edit', $data);
	        $this->load->view('layout/footer');
	    }
	     elseif($this->session->userdata('u_id')=='2'){
	        redirect(base_url() . 'dashboard/user');
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
		    redirect(base_url('admin/index'));
		}
		elseif($this->session->userdata('u_id')=='2'){
		    redirect(base_url() . 'dashboard/user');
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
    redirect(base_url('admin/index'));
  }

	public function update(){
	    if ($this->session->userdata('u_id')=='1') {
	        $result = $this->m->update();
	        if($result){
	          $this->session->set_flashdata('success_msg', 'Record updated successfully');
	        }else{
	          $this->session->set_flashdata('error_msg', 'Fail to update record');
	        }
	        redirect(base_url('admin/index'));
	    }
	    elseif($this->session->userdata('u_id')=='2'){
	        redirect(base_url() . 'dashboard/user');
	    }
	    else{
	        redirect(base_url());
	    }
	}

  	public function view($post_name=null){
		$data['item'] = $this->m->info($post_name);
	    $this->load->view("adminpage/profile",$data);
  	}

  	public function deletepost($id){
    	$result = $this->m->deletepost($id);
        redirect(base_url('admin/adminpost'));
  	}


}
