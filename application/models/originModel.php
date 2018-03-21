<?php  
 class OriginModel extends CI_Model  
 {  

 	public function addPlace(){
 		$field = array(
	          'region'=>$this->input->post('region'),
	          'province'=>$this->input->post('province'),
	          'city'=>$this->input->post('city'),
	          'exact_place'=>$this->input->post('landmark'),
		);
		 if($this->check_landmark($field['exact_place'])){
              $this->session->set_flashdata('error_msg', 'Landmark already registered');
              redirect(base_url() . 'origin/addOP');
          }
          else{
              $this->db->insert('places', $field);
              if($this->db->affected_rows() > 0){
                return true;
              }
              else{
                return false;
              }
        }
 	}

 	public function check_landmark($exact_place){
        $this->db->where('exact_place',$exact_place);
        $this->db->from('places');
        $query=$this->db->get();
        if($query->num_rows() > 0)  
           {  
                return $query->result();  
           }  
           else  
           {  
                return $query->result();       
           }  
      }
      public function getRegion(){
      		$query=$this->db->get('region');
  			return $query->result();
      }
      public function getRegionbyId($id){
          $this->db->where('id',$id);
          $query=$this->db->get('region');
           if($query->num_rows() > 0){
            return $query->row();
          }
          else{
            return false;
          }
      }
       public function getProvince(){
      		$query=$this->db->get('province');
  			return $query->result();
      }
       public function getCity(){
      		$query=$this->db->get('city');
  			return $query->result();
      }
       public function getPlaces(){
      		$query=$this->db->get('places');
  			return $query->result();
      }
       public function getPlacesById($id){
	    $this->db->where('id', $id);
	    $query = $this->db->get('places');
	    if($query->num_rows() > 0){
	      return $query->row();
	    }
	    else{
	      return false;
	    }
	}
	public function update(){
	   
	    $id = $this->input->post('placeID');
	    $field = array(
		      'region'=>$this->input->post('region'),
		      'province'=>$this->input->post('province'),
		      'city'=>$this->input->post('city'),
		      'exact_place'=>$this->input->post('landmark'),
		     
	    );
	    $this->db->where('id', $id); 
	    $this->db->update('places', $field);
	    if($this->db->affected_rows() > 0){
	      	return true;
	    }
	    else{
	      	return false;
	    }
 	}
  
    public function deleteplace($id){
      $this->db->where('id', $id);
      $this->db->delete('places');
      if($this->db->affected_rows() > 0){
        return true;
      }
      else{
        return false;
      }
    } 
     public function deletereg($id){
      $this->db->where('id', $id);
      $this->db->delete('region');
      if($this->db->affected_rows() > 0){
        return true;
      }
      else{
        return false;
      }
    }


    public function updateReg(){
     
      $id = $this->input->post('regionID');
      $field = array(
          'region'=>$this->input->post('region'),
         
      );
       if($this->check_reg($field['region'])){
              $this->session->set_flashdata('error_msg', 'Region already registered');
              redirect(base_url() . 'origin/editreg/' .$id);
          }
      else{
          $this->db->where('id', $id); 
        $this->db->update('region', $field);
          if($this->db->affected_rows() > 0){
            return true;
          }
          else{
            return false;
          }
    }
  }

  public function check_reg($region){
        $id = $this->input->post('regionID');
        $this->db->where('id !=',$id);
        $this->db->where('region',$region);
        $this->db->from('region');
        $query=$this->db->get();
        if($query->num_rows() > 0)  
           {  
                return $query->result();  
           }  
           else  
           {  
                return $query->result();       
           }  
      }


      public function getProvincebyId($id){
          $this->db->where('id',$id);
          $query=$this->db->get('province');
           if($query->num_rows() > 0){
            return $query->row();
          }
          else{
            return false;
          }
      }

        public function updateProv(){
     
      $id = $this->input->post('provinceID');
      $field = array(
          'province'=>$this->input->post('province'),
         
      );
       if($this->check_prov($field['province'])){
              $this->session->set_flashdata('error_msg', 'Region already registered');
              redirect(base_url() . 'origin/editprov/' .$id);
          }
      else{
          $this->db->where('id', $id); 
        $this->db->update('province', $field);
          if($this->db->affected_rows() > 0){
            return true;
          }
          else{
            return false;
          }
    }
  }

  public function check_prov($province){
       $id = $this->input->post('provinceID');
        $this->db->where('id !=',$id);
        $this->db->where('province',$province);
        $this->db->from('province');
        $query=$this->db->get();
        if($query->num_rows() > 0)  
           {  
                return $query->result();  
           }  
           else  
           {  
                return $query->result();       
           }  
      }

     public function deleteprov($id){
      $this->db->where('id', $id);
      $this->db->delete('province');
      if($this->db->affected_rows() > 0){
        return true;
      }
      else{
        return false;
      }
    }


      public function getCitybyId($id){
          $this->db->where('id',$id);
          $query=$this->db->get('city');
           if($query->num_rows() > 0){
            return $query->row();
          }
          else{
            return false;
          }
      }

        public function updateCity(){
     
      $id = $this->input->post('cityID');
      $field = array(
          'city'=>$this->input->post('city'),
         
      );
       if($this->check_prov($field['city'])){
              $this->session->set_flashdata('error_msg', 'City already registered');
              redirect(base_url() . 'origin/editprov/' .$id);
          }
      else{
          $this->db->where('id', $id); 
        $this->db->update('city', $field);
          if($this->db->affected_rows() > 0){
            return true;
          }
          else{
            return false;
          }
    }
  }

  public function check_city($province){
       $id = $this->input->post('cityID');
        $this->db->where('id !=',$id);
        $this->db->where('city',$city);
        $this->db->from('city');
        $query=$this->db->get();
        if($query->num_rows() > 0)  
           {  
                return $query->result();  
           }  
           else  
           {  
                return $query->result();       
           }  
      }

     public function deletecity($id){
      $this->db->where('id', $id);
      $this->db->delete('city');
      if($this->db->affected_rows() > 0){
        return true;
      }
      else{
        return false;
      }
    }




 }