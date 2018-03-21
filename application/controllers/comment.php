 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Comment extends CI_Controller { 


      function __construct(){
            parent:: __construct();
          	$this->load->model('comment_model','m');
    	}   


    public function addcomment(){
    	$tripIdNumber = $this->input->post('tripIdNumber');
    		$username =$this->input->post('comment_name');
    	$this->m->addcomment();
        redirect(base_url() . 'Trips/displaytrip/'.$username.'/'.$tripIdNumber);
    }
        public function addcommentmember(){
        $tripIdNumber = $this->input->post('tripIdNumber');
            $username =$this->input->post('comment_name');
            $leader =$this->input->post('leader');
        $this->m->addcomment();
        redirect(base_url() . 'Trips/displaymember/'.$username.'/'.$tripIdNumber. '/' .$leader);
    }




}