<?php  
 class TourM extends CI_Model  
 { 

 	public function submitTour($username){
 		echo "wew";
 	}
 	public function acceptTour($username,$id){
 		$field = array(
 			'tourStatus' => 'approved'
 		);
		$this->db->where('tripIdNumber',$id);
	    $this->db->where('tourstatus','not approved');
	    $get=$this->db->update('usertrips',$field);
	    if($get){
	    	$field2 = array(
	    		'tripIdNumber' => $id,
	    		'members' => $username,
	    		'restriction' => 'leader',
	    		'type' => 'tour'
	    	);
	    	$query=$this->db->insert('leadmem',$field2);
	    	return $query;
	    }
	    

 	}

 	public function declineTour($id){
 		$this->db->where('id',$id);
 		$query= $this->db->delete('usertrips');
 		return $query;
 	}

 	public function requestjoin($username,$tripIdNumber){
 		$field=array(
 			'tripIdNumber' => $tripIdNumber,
 			'username' => $username
 		);
 		$this->db->insert('requestjoin',$field);
 	}

 	public function acceptjoinrequest($username,$tripIdNumber){
 		$this->db->where('tripIdNumber',$tripIdNumber);
 		$this->db->where('username',$username);
 		$this->db->delete('requestjoin');
 		$field=array(
 				'tripIdNumber' => $tripIdNumber,
 				'members' => $username,
 				'restriction' => 'member',
 				'type' => 'tour'
		);
		$this->db->insert('leadmem',$field);
		
 	}
 	public function declinejoinrequest($id){
 		$this->db->where('id',$id);
 		$this->db->delete('requestjoin');
 	}


















 }
