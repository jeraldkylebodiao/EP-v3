 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Trips extends CI_Controller {    
  
      function __construct(){
            parent:: __construct();
          $this->load->model('make_tripM','m');
      }   
    public function makeTrip(){
        if ($this->session->userdata('u_id')=='2') {
          $data['spots']=$this->m->getTourist();
          $data['trips']=$this->m->getTrip();
          $data['origin']=$this->m->getOrigin();
          $this->load->view('trips/maketour',$data);
       }

    }
    


      public function addActivity($var,$tripIdNumber){
     
        $result=$this->m->addActivity($tripIdNumber);
         if($result){
              $this->session->set_flashdata('success_msg', 'Activity added.');
          }
            redirect(base_url('trips/displaytrip/').$var.'/'.$tripIdNumber);

        
      }
    
    public function maketour(){
       if ($this->session->userdata('u_id')=='2') {
          $data['spots']=$this->m->getTourist();
          $data['trips']=$this->m->getTrip();
          $data['origin']=$this->m->getOrigin();
          $data['activity']=$this->m->getActivity();
          $this->load->view('trips/maketour',$data);
       }
    }
   
    public function updateTrip(){
      if ($this->session->userdata('u_id')=='2') {
            $result = $this->m->updateTrip();
            if($result){
              $this->session->set_flashdata('success_msg', 'Trip edited successfully.');
          }
          else{
              $this->session->set_flashdata('error_msg', 'Fail to edit trip!');
          }
            redirect(base_url('dashboard/viewtrips'));
      }
    }
    public function Region(){
        if ($this->session->userdata('u_id')=='1') {
              $data['region']=$this->m->getRegion();
              $this->load->view('layout/header');
              $this->load->view('places/region',$data);
              $this->load->view('layout/footer');
         }
        elseif($this->session->userdata('u_id')=='2'){
            redirect(base_url() . 'dashboard/user');
        }
        else{
            redirect(base_url());
        }

    }
    public function Province(){
      if ($this->session->userdata('u_id')=='1') {
        $data['province']=$this->m->getProvince();
        $this->load->view('layout/header');
        $this->load->view('places/province',$data);
        $this->load->view('layout/footer');
          }
        elseif($this->session->userdata('u_id')=='2'){
            redirect(base_url() . 'dashboard/user');
        }
        else{
            redirect(base_url());
        }

    }
    public function City(){
       if ($this->session->userdata('u_id')=='1') {
        $data['city']=$this->m->getCity();
        $this->load->view('layout/header');
        $this->load->view('places/city',$data);
          }
        elseif($this->session->userdata('u_id')=='2'){
            redirect(base_url() . 'dashboard/user');
        }
        else{
            redirect(base_url());
        }

    }
    public function addRegion(){
        $result = $this->m->addRegion();
          if($result){
              $this->session->set_flashdata('success_msg', 'Region added successfully.');
          }
          else{
              $this->session->set_flashdata('error_msg', 'Region failed to add!');
          }
          redirect(base_url() . 'Trips/region');
        
    }
    public function addProvince(){
        $result = $this->m->addProvince();
          if($result){
              $this->session->set_flashdata('success_msg', 'Province added successfully.');
          }
          else{
              $this->session->set_flashdata('error_msg', 'Province failed to add!');
          }
          redirect(base_url() . 'Trips/province');
    }
    public function addCity(){
        $result = $this->m->addCity();
          if($result){
              $this->session->set_flashdata('success_msg', 'City added successfully.');
          }
          else{
              $this->session->set_flashdata('error_msg', 'City failed to add!');
          }
          redirect(base_url() . 'Trips/city');
    }
    public function viewTrips(){

       if ($this->session->userdata('u_id')=='2') {
          $data['tours'] = $this->m->getTours();
          $data['profile'] = $this->m->getprofile();
          //print_r($data['tours']);
          //echo " --------------- ";
          $data['tourist'] = $this->m->getTouristSpot();
          $username=$this->session->userdata('post_name');
          $data['members'] = $this->m->getmembership($username);
          $data['gmembers'] = $this->m->getmembersTour();
          //echo " --------------- ";
          //print_r($data['members']);  
          $data['request'] = $this->m->getRequest($username);
         // echo " --------------- ";
         // print_r($data['request']); exit();
          $this->load->view('trips/userTrips',$data);
      }
    }

  
   // public function pakita($id){
    //   if ($this->session->userdata('u_id')=='2') {
     //     $data['tourist'] = $this->m->getTouristSpot();
     //       $data['post'] = $this->m->pakita($id);
    //        $this->load->view('trips/pakita', $data);
      //  }
   // }

    public function addTrip(){
      if ($this->session->userdata('u_id')=='2') {
      $result['data'] = $this->m->make_trip();
     // print_r($result);exit();
      $var=$result['data']['destination'];
      $tripIdNumber=$result['data']['tripIdNumber'];
       $this->session->set_flashdata('success_msg', 'Trip added successfully.');
           
              
          }
            redirect(base_url('trips/addTrip'));

       
      }
      public function addTour($var,$tripIdNumber){
              $data['act']=$this->m->getAct($var);
              $data['touract']=$this->m->getActivity();
              $data['tripIdNumber']=$tripIdNumber;
              $data['current']=$this->m->getTourActivity($tripIdNumber);
              $this->load->view('trips/view_Tour',$data);
          
      }

    public function displaytrip($user, $tripId){
      $data['tours']=$this->m->displaytrip($tripId);
      $data['members']=$this->m->getMembers($tripId);
      $data['request']=$this->m->getRequestMembers($tripId);
      $data['touract']=$this->m->getActivity();
      $data['comment']=$this->m->getComment($tripId);
      $data['spots']=$this->m->getTouristSpot();
      //print_r($data['spots']); exit();
      $data['current']=$this->m->getTourActivity($tripId);
      $this->load->view('tours/displaytour',$data);

    }
    public function displaymember($user, $tripId,$leader){
        $data['leader']=$this->m->getLeader($leader,$tripId);
        $data['tours']=$this->m->displaytrip($tripId);
        $data['members']=$this->m->getMembers($tripId);
        $data['comment']=$this->m->getComment($tripId);
        $this->load->view('tours/displaymember',$data);


    }

}