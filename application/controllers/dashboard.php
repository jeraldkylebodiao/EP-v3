 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Dashboard extends CI_Controller {    
  
      function __construct(){
            parent:: __construct();
            $this->load->model('user_model','m');
    	}      

    	public function user(){
          if ($this->session->userdata('u_id')=='2') {
             $data['posts'] = $this->m->getPost();
             $data['spots'] = $this->m->getTouristSpot();
             $data['editors'] = $this->m->getEp();
             $this->load->view("userpage/users" ,$data);

          }            
          elseif ($this->session->userdata('u_id')=='1') {
            redirect(base_url() . 'gomenasai/bakana');
          }
          else{
            redirect(base_url());
          }
      }
      public function tourist_spot(){
         $data['spots'] = $this->m->getTouristSpot();
         $this->load->view('userpage/tourist_spot',$data);
      }
      public function stories(){
        $data['posts'] = $this->m->getPost();
         $this->load->view('userpage/stories',$data);
      }
      public function editorspick(){
          $data['editors'] = $this->m->getEp();
         $this->load->view('userpage/editorspick',$data);
      }
      public function account(){
        $account['data']=$this->m->account();
        $this->load->view('userpage/account',$account);
      }
      public function editaccount($username){
        $account['data']=$this->m->editaccount($username);
        $this->load->view('userpage/editaccount',$account);
      }

     public function create_post(){
          if ($this->session->userdata('u_id')=='2') {
              $result = $this->m->create_post();
              if($result){
                  $this->session->set_flashdata('success_msg', 'Post added successfully.');
              }
              else{
                  $this->session->set_flashdata('error_msg', 'Post failed to add!');
              }
              redirect(base_url() . 'dashboard/user');
          }
          elseif($this->session->userdata('u_id')=='1'){
              redirect(base_url() . 'gomenasai/bakana');
          }
          else{
              redirect(base_url());
          }

    }

    public function editpost($id){
        if ($this->session->userdata('u_id')=='2') {
            $data['post'] = $this->m->getBlogByIdp($id);
            $this->load->view('userpage/editpost', $data);
        }
        elseif($this->session->userdata('u_id')=='1'){
            redirect(base_url() . 'gomenasai/bakana');
        }
        else{
            redirect(base_url());
        }
    }

    public function deletepost($id){
        $result = $this->m->deletepost($id);
        redirect(base_url('dashboard/user'));
    } 

    public function viewprofile(){
        if ($this->session->userdata('u_id')=='2') {
            $data['posts'] = $this->m->getPost();
            $this->load->view('userpage/viewprofile',$data); 
        }
        elseif($this->session->userdata('u_id')=='1'){
            redirect(base_url() . 'gomenasai/bakana');
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
          }
          else{
              $this->session->set_flashdata('error_msg', 'Post failed to add!');
          }
          redirect(base_url() . 'dashboard/viewprofile');
      }
      elseif($this->session->userdata('u_id')=='1'){
            redirect(base_url() . 'gomenasai/bakana');
      }
      else{
            redirect(base_url());
      }
    }

    public function editpost_inprofile($id){
        if ($this->session->userdata('u_id')=='2') {
            $data['post'] = $this->m->getBlogByIdp($id);
            $this->load->view('userpage/editpost_inprofile', $data);
        }
         elseif($this->session->userdata('u_id')=='1'){
            redirect(base_url() . 'gomenasai/bakana');
        }
        else{
            redirect(base_url());
        }
    }

    public function deletepost_inprofile($id){
      if ($this->session->userdata('u_id')=='2') {
        $result = $this->m->deletepost($id);
        redirect(base_url('dashboard/viewprofile'));
          }
        elseif($this->session->userdata('u_id')=='1'){
            redirect(base_url() . 'gomenasai/bakana');
        }
        else{
            redirect(base_url());
        }
    }

    public function updatepost_inprofile(){
        if ($this->session->userdata('u_id')=='2') {
          $result = $this->m->updatepost();
          redirect(base_url('dashboard/viewprofile'));
        }
        elseif($this->session->userdata('u_id')=='1'){
            redirect(base_url() . 'gomenasai/bakana');
        }
        else{
            redirect(base_url());
        }
    }

    public function updateposts_inprofile(){
        if ($this->session->userdata('u_id')=='2') {
          $result = $this->m->updateposts();
          redirect(base_url('dashboard/viewprofile'));
        }
        elseif($this->session->userdata('u_id')=='1'){
            redirect(base_url() . 'gomenasai/bakana');
        }
        else{
            redirect(base_url());
        }
    }

    public function updatepost(){
        if ($this->session->userdata('u_id')=='2') {
            $result = $this->m->updatepost();
            redirect(base_url('dashboard/user'));
        }
        elseif($this->session->userdata('u_id')=='1'){
            redirect(base_url() . 'gomenasai/bakana');
        }
        else{
            redirect(base_url());
        }
    }
     public function updateposts(){
        if ($this->session->userdata('u_id')=='2') {
            $result = $this->m->updateposts();
            redirect(base_url('dashboard/user'));
        }
        elseif($this->session->userdata('u_id')=='1'){
            redirect(base_url() . 'gomenasai/bakana');
        }
        else{
            redirect(base_url());
        }
    }
     public function updateaccount(){
        if ($this->session->userdata('u_id')=='2') {
            $result = $this->m->updateaccount();
             if($result){
            $this->session->set_flashdata('success_msg', 'Account Updated Successfully');
        }
       
           redirect(base_url('dashboard/account'));
        }
        elseif($this->session->userdata('u_id')=='1'){
            redirect(base_url() . 'gomenasai/bakana');
        }
        else{
            redirect(base_url());
        }
    }
      
    public function editpassword($username){
       if ($this->session->userdata('u_id')=='2') {
        $pass['data'] = $this->m->getPassword($username);
        $this->load->view('userpage/editpassword',$pass);
          }
        elseif($this->session->userdata('u_id')=='1'){
            redirect(base_url() . 'gomenasai/bakana');
        }
        else{
            redirect(base_url());
        }
    }

    public function updatePassword(){
      $result['data']=$this->m->updatePassword();
      if($result){
            $this->session->set_flashdata('success_msg', 'Password Updated Successfully');
        }
        
      $username = $this->input->post('username_hidden');  
      redirect(base_url('dashboard/editaccount/' .$username));
    }

    public function updatePostImage($post_image){
       if ($this->session->userdata('u_id')=='2') {
       $img['data'] = $this->m->getImage($post_image);
      $this->load->view("userpage/updatePostImage",$img);
          }
        elseif($this->session->userdata('u_id')=='1'){
            redirect(base_url() . 'gomenasai/bakana');
        }
        else{
            redirect(base_url());
        }
    }
    public function changeImage(){
    $id = $this->input->post('id_hidden');
     $result = $this->m->updateImage();
     if($result){
            $this->session->set_flashdata('success_msg', 'Image updated successfully');
        }
     redirect(base_url('dashboard/editpost/' .$id));
  }
  public function option(){
    $data['spots'] = $this->m->getTouristSpot();
    $this->load->view('trialOption',$data);
  }


  public function viewtrips(){
     if ($this->session->userdata('u_id')=='2') {
      $data['trips'] = $this->m->getTrips();
      $data['tourist'] = $this->m->getTouristSpot();
      $this->load->view('trips/viewtrips',$data);
    }
  }


  public function editTrip($id){
        if ($this->session->userdata('u_id')=='2') {
          $data['spots']=$this->m->getTourist();
          $data['origin']=$this->m->getOrigin();
          $data['trips'] = $this->m->getTripsById($id);
          $this->load->view('trips/editTrip', $data);
        }
    }

    public function cancelTrip($id){
      if($this->session->userdata('u_id')=='2') {
        $result = $this->m->cancelTrip($id);
        redirect(base_url('dashboard/viewtrips'));
      }
    } 

}
