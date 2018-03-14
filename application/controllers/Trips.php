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
          $this->load->view('trips/maketrip',$data);
       }

    }
    public function addTrip(){
      if ($this->session->userdata('u_id')=='2') {
    	$result = $this->m->make_trip();
	      if($result){
	          $this->session->set_flashdata('success_msg', 'Trip added successfully.');
	      }
	      else{
	          $this->session->set_flashdata('error_msg', 'Trip failed to add!');
	      }
	      redirect(base_url() . 'Trips/makeTrip');
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
              $this->load->view('places/region',$data);
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
        $this->load->view('places/province',$data);
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
}