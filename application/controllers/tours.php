 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Tours extends CI_Controller {    
  
      function __construct(){
            parent:: __construct();
          	$this->load->model('tourM','m');
    	}

    	public function maketour($username){
    		$this->m->submitTour($username);
    	}

    	public function acceptTour($username,$tripIdNumber){
  			if ($this->session->userdata('u_id')=='1') {
	    		$result=$this->m->acceptTour($username,$tripIdNumber);
	    		if($result){
	    			 $this->session->set_flashdata('success_msg', 'Tour approved successfully');
	    		}
	    		redirect(base_url('gomenasai/view/').$username);
    		}

    	}
    	public function declineTour($username,$id){
          if ($this->session->userdata('u_id')=='1') {
          $result=$this->m->declineTour($id);
          if($result){
             $this->session->set_flashdata('success_msg', 'Tour disapproved successfully');
          }
          redirect(base_url('gomenasai/view/').$username);
        }

    	}
      public function requestjoin($username,$tripIdNumber){
          $this->m->requestjoin($username,$tripIdNumber);
          redirect(base_url('trips/viewtrips'));
      }
      public function acceptjoinrequest($username,$tripIdNumber,$redirect){
          $this->m->acceptjoinrequest($username,$tripIdNumber);

          redirect(base_url('trips/displaytrip/'.$redirect. '/' .$tripIdNumber));

      }
      public function declinejoinrequest($id,$tripIdNumber,$redirect){
       
        $this->m->declinejoinrequest($id);
         redirect(base_url('trips/displaytrip/'.$redirect. '/' .$tripIdNumber));

      }
}