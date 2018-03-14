 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Origin extends CI_Controller {  


	 	function __construct(){
	        parent:: __construct();
	        $this->load->model('originModel','m');
	    }
	    public function addOP(){
	    	 if ($this->session->userdata('u_id')=='1') {
			    	$data['region']=$this->m->getRegion();
			    	$data['province']=$this->m->getProvince();
			    	$data['city']=$this->m->getCity();
			    	$data['places']=$this->m->getPlaces();
			    	$this->load->view('places/places',$data);
	    	   }
	        elseif($this->session->userdata('u_id')=='2'){
	            redirect(base_url() . 'dashboard/user');
	        }
	        else{
	            redirect(base_url());
	        }

	    }
	    
	    public function addPlace(){
	    	$data=$this->m->addPlace();
              if($data){
                  $this->session->set_flashdata('success_msg', 'Landmark added successfully.');
              }
              else{
                  $this->session->set_flashdata('error_msg', 'LandMark failed to add.');
              }
              redirect(base_url() . 'origin/addOp');

	    }
	    public function edit($id){
	    if ($this->session->userdata('u_id')=='1') {
	        $data['places'] = $this->m->getPlacesById($id);
	        $data['region']=$this->m->getRegion();
	    	$data['province']=$this->m->getProvince();
	    	$data['city']=$this->m->getCity();
	      	$this->load->view('places/edit', $data);
	       
	    }
	     elseif($this->session->userdata('u_id')=='2'){
	        redirect(base_url() . 'dashboard/user');
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
	        }
	        redirect(base_url('origin/addOP'));
	    }
	    elseif($this->session->userdata('u_id')=='2'){
	        redirect(base_url() . 'dashboard/user');
	    }
	    else{
	        redirect(base_url());
	    }
	}

	/*public function delete($id){
		if ($this->session->userdata('u_id')=='1') {
		    $result = $this->m->delete($id);
		    if($result){
		      $this->session->set_flashdata('success_msg', 'Record deleted successfully');
		    }else{
		      $this->session->set_flashdata('error_msg', 'Fail to delete record');
		    }
		    redirect(base_url('gomenasai/tourist_spot'));
		}
		elseif($this->session->userdata('u_id')=='2'){
		    redirect(base_url() . 'dashboard/user');
		}
		else{
		    redirect(base_url());
		}
	}*/

	public function deleteplace($id){
        $result = $this->m->deleteplace($id);
        redirect(base_url('origin/addOP'));
    } 

     public function editReg($id){
	    if ($this->session->userdata('u_id')=='1') {
	        $data['region'] = $this->m->getRegionbyId($id);
	      	$this->load->view('places/editreg', $data);
	       
	    }
	     elseif($this->session->userdata('u_id')=='2'){
	        redirect(base_url() . 'dashboard/user');
	    }
	    else{
	        redirect(base_url());
	    }
	}
	public function updateReg(){
	    if ($this->session->userdata('u_id')=='1') {
	        $result = $this->m->updateReg();
	        if($result){
	          $this->session->set_flashdata('success_msg', 'Region updated successfully');
	        }
	        redirect(base_url('trips/Region'));
	    }
	    elseif($this->session->userdata('u_id')=='2'){
	        redirect(base_url() . 'dashboard/user');
	    }
	    else{
	        redirect(base_url());
	    }
	}
	public function deletereg($id){
		if ($this->session->userdata('u_id')=='1') {
		    $result = $this->m->deletereg($id);
		    if($result){
		      $this->session->set_flashdata('success_msg', 'Record deleted successfully');
		    }else{
		      $this->session->set_flashdata('error_msg', 'Fail to delete record');
		    }
		    redirect(base_url('trips/region'));
		}
		elseif($this->session->userdata('u_id')=='2'){
		    redirect(base_url() . 'dashboard/user');
		}
		else{
		    redirect(base_url());
		}
	}

	public function editProv($id){
	    if ($this->session->userdata('u_id')=='1') {
	        $data['province'] = $this->m->getProvincebyId($id);
	      	$this->load->view('places/editprov', $data);
	       
	    }
	     elseif($this->session->userdata('u_id')=='2'){
	        redirect(base_url() . 'dashboard/user');
	    }
	    else{
	        redirect(base_url());
	    }
	}
	public function updateProv(){
	    if ($this->session->userdata('u_id')=='1') {
	        $result = $this->m->updateProv();
	        if($result){
	          $this->session->set_flashdata('success_msg', 'Region updated successfully');
	        }
	        redirect(base_url('trips/Province'));
	    }
	    elseif($this->session->userdata('u_id')=='2'){
	        redirect(base_url() . 'dashboard/user');
	    }
	    else{
	        redirect(base_url());
	    }
	}
	public function deleteprov($id){
		if ($this->session->userdata('u_id')=='1') {
		    $result = $this->m->deleteprov($id);
		    if($result){
		      $this->session->set_flashdata('success_msg', 'Record deleted successfully');
		    }else{
		      $this->session->set_flashdata('error_msg', 'Fail to delete record');
		    }
		    redirect(base_url('trips/province'));
		}
		elseif($this->session->userdata('u_id')=='2'){
		    redirect(base_url() . 'dashboard/user');
		}
		else{
		    redirect(base_url());
		}
	}


		public function editCity($id){
	    if ($this->session->userdata('u_id')=='1') {
	        $data['city'] = $this->m->getCitybyId($id);
	      	$this->load->view('places/editcity', $data);
	       
	    }
	     elseif($this->session->userdata('u_id')=='2'){
	        redirect(base_url() . 'dashboard/user');
	    }
	    else{
	        redirect(base_url());
	    }
	}
	public function updateCity(){
	    if ($this->session->userdata('u_id')=='1') {
	        $result = $this->m->updateCity();
	        if($result){
	          $this->session->set_flashdata('success_msg', 'Region updated successfully');
	        }
	        redirect(base_url('trips/City'));
	    }
	    elseif($this->session->userdata('u_id')=='2'){
	        redirect(base_url() . 'dashboard/user');
	    }
	    else{
	        redirect(base_url());
	    }
	}
	public function deletecity($id){
		if ($this->session->userdata('u_id')=='1') {
		    $result = $this->m->deletecity($id);
		    if($result){
		      $this->session->set_flashdata('success_msg', 'Record deleted successfully');
		    }else{
		      $this->session->set_flashdata('error_msg', 'Fail to delete record');
		    }
		    redirect(base_url('trips/City'));
		}
		elseif($this->session->userdata('u_id')=='2'){
		    redirect(base_url() . 'dashboard/user');
		}
		else{
		    redirect(base_url());
		}
	}



 }