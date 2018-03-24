<?php  
 class Make_TripM extends CI_Model  
 { 
  public function getTourist(){
    $query=$this->db->get('tbl_blogs');
    return $query->result();
  }
  public function make_trip(){
    $field = array(
            'destination'=>$this->input->post('destination'),
            'origin'=>$this->input->post('origin'),
            'tourname'=>$this->input->post('tourname'),
            'tourdate'=>$this->input->post('tourdate'),
            'tourduration'=>$this->input->post('tourduration'),
            'leader'=>$this->input->post('leader'),
            'user'=>$this->input->post('user'),
            'restriction'=>$this->input->post('restriction'),
            'tripIdNumber'=>$this->input->post('tripIdNumber'),
            'type' => 'tour',
            'tourparticipant'=>$this->input->post('tourparticipant'),
            'tourfee'=>$this->input->post('tourfee'),
            'payment'=>$this->input->post('payment'),
            'tourStatus'=>$this->input->post('tourStatus')
            //'date'=>date('Y-m-d H:i:s'),
    );
    /*$restriction = array
    (
      'tripIdNumber'=>$this->input->post('tripIdNumber'),
      'members' => $this->input->post('user'),
      'restriction' => 'leader',
      'type' => 'tour'

    );*/
    $currentDate = date('Y-m-d');
   /* if ($currentDate>$field['tourdate']) {
      echo "wew";
    }
    elseif ($currentDate<$field['tourdate']) {
      echo "yown pwede<br/>";
    }
    echo "current date: ";
    print_r($currentDate); echo "<br/>";
    echo "input date: ";
    print_r($field['tourdate']); exit(); */
   
   if($this->check_tripIdNumber($field['tripIdNumber'])){
        $var = rand();
        for ($x = 1; $x <= 1; $x++) {
          if($this->check_tripIdNumberExisting($var)){
              $var = rand();
            $x--;
          }
          else{
            $field2 = array(
                 'destination'=>$this->input->post('destination'),
                  'origin'=>$this->input->post('origin'),
                  'tourname'=>$this->input->post('tourname'),
                  'tourdate'=>$this->input->post('tourdate'),
                  'leader'=>$this->input->post('leader'),
                  'user'=>$this->input->post('user'),
                  'restriction'=>$this->input->post('restriction'),
                  'tripIdNumber'=>$var,
                  'type' => 'tour',
                  'tourparticipant'=>$this->input->post('tourparticipant'),
                  'tourfee'=>$this->input->post('tourfee'),
                  'touritinerary'=>$this->input->post('touritinerary'),
                  'payment'=>$this->input->post('payment'),
                  'tourStatus'=>$this->input->post('tourStatus')

            );
            /*
             $restriction2 = array
              (
                'tripIdNumber'=>$var,
                'members' => $this->input->post('user'),
                'restriction' => 'leader',
                'type' => 'tour'

              );*/
              if($this->check_date($field['tourdate'])){
              $this->session->set_flashdata('error_msg', 'You currently have a scheduled trip for this day. Please select a different date. ');
              redirect(base_url() . 'trips/maketrip');
              }
              else{
                     if($currentDate<$field['tourdate']){
                         
                         // $this->db->insert('leadmem' ,$restriction2);  
                          $this->db->insert('userTrips', $field2);
                           return $field2;
                    }
                    else{
                          $this->session->set_flashdata('error_msg', 'Date invalid');
                          redirect(base_url() . 'trips/maketrip');
                    }
                  }
          }
       } 
    }
    else{
         if($this->check_date($field['tourdate'])){
                      $this->session->set_flashdata('error_msg', 'You currently have a scheduled trip for this day. Please select a different date. ');
                      redirect(base_url() . 'trips/maketrip');
            }
        else{
            if($currentDate<$field['tourdate']){
          
               // $this->db->insert('leadmem' ,$restriction); 
              
                $this->db->insert('userTrips', $field); 
                 return $field;                   
            }
            else{
                  
                  redirect(base_url() . 'trips/maketrip');
            }
        }
    }
}
public function getTourActivity($tripIdNumber){
  $this->db->where('tripIdNumber',$tripIdNumber);
  $query=$this->db->get('tour_activity');
  return $query->result();
}
public function getAct($var){
  $this->db->where('tourist_name',$var);
  $query=$this->db->get('tbl_blogs');
  return $query->result();
}
public function getActi(){
  $query=$this->db->get('tbl_blogs');
  return $query->result();
}
public function addActivity($tripIdNumber){
  $field= array(
    'activity' => $this->input->post('activity'),
    'tripIdNumber' => $this->input->post('tripIdNumber'),
    'startActDate'=>$this->input->post('startActDate'),
    'startActTime'=>$this->input->post('startActTime'),
    'endActTime'=>$this->input->post('endActTime')
  );

  $query=$this->db->insert('tour_activity',$field);
  return $query;
}

public function getActivity(){
  $query=$this->db->get('touristspot_activities');
  return $query->result();
}

  public function displaytrip($tripId){
        $this->db->where('tripIdNumber', $tripId);
        $query=$this->db->get('usertrips');
        return $query->result();
  }

   public function check_tripIdNumberExisting($var){
        $this->db->where('tripIdNumber',$var);
        $this->db->from('usertrips');
        $query=$this->db->get(); 
        return $query->result();    
  }
  public function check_tripIdNumber($tripIdNumber){
        $this->db->where('tripIdNumber',$tripIdNumber);
        $this->db->from('usertrips');
        $query=$this->db->get(); 
        return $query->result();    
  }
  public function check_date($date){
        $username = $this->input->post('leader');
        $this->db->where('user',$username);
        $this->db->where('tourdate',$date);
        $this->db->from('usertrips');
        $query=$this->db->get(); 
        return $query->result();    
  }
    public function check_date_edit($date){
        $id = $this->input->post('uptrip');
        $this->db->where('id !=',$id);
        $this->db->where('tourdate',$date);
        $this->db->from('usertrips');
        $query=$this->db->get(); 
        return $query->result();    
  }

    public function updateTrip(){
        $id = $this->input->post('uptrip');
        $field = array(
            'destination'=>$this->input->post('destination'),
            'origin'=>$this->input->post('origin'),
            'name'=>$this->input->post('tripname'),
            'tourdate'=>$this->input->post('tripdate')
         
          );
         $currentDate = date('Y-m-d');

        if($this->check_date_edit($field['tourdate'])){
                  $this->session->set_flashdata('error_msg', 'You currently have a scheduled trip for this day. Please select a different date. ');
                  redirect(base_url() . 'dashboard/editTrip/' .$id);
        }
        else{
           if($field['tourdate'] > $currentDate){
                $this->db->where('id', $id);
                $this->db->update('usertrips', $field);
                if($this->db->affected_rows() > 0){
                  return true;
                }
          }
          else{
                $this->session->set_flashdata('error_msg', 'Date invalid');
                redirect(base_url() . 'dashboard/editTrip/' .$id);
          }
        }
     
  }


  public function getTrip(){
      $query=$this->db->get('usertrips');
      return $query->result();
    }
    public function getOrigin(){
      $query=$this->db->get('places');
      return $query->result();
    }
    public function getRegion(){
      $query=$this->db->get('region');
      return $query->result();
    }
    public function getProvince(){
      $query=$this->db->get('province');
      return $query->result();
    }
    public function getCity(){
      $query=$this->db->get('city');
      return $query->result();
    }

    public function addRegion(){
    $field = array(
            'region'=>$this->input->post('region'),
            
    );
    if($this->check_region($field['region'])){
              $this->session->set_flashdata('error_msg', 'Region already registered');
              redirect(base_url() . 'trips/region');
          }
          else{
              $this->db->insert('region', $field);
              if($this->db->affected_rows() > 0){
                return true;
              }
              else{
                return false;
              }
        }
    }

    public function addProvince(){
    $field = array(
            'province'=>$this->input->post('province'),
            
    );
    if($this->check_province($field['province'])){
              $this->session->set_flashdata('error_msg', 'Province already registered');
              redirect(base_url() . 'trips/province');
          }
          else{
              $this->db->insert('province', $field);
              if($this->db->affected_rows() > 0){
                return true;
              }
              else{
                return false;
              }
        }
    }

    public function addCity(){
    $field = array(
            'city'=>$this->input->post('city'),
            
    );
    if($this->check_city($field['city'])){
              $this->session->set_flashdata('error_msg', 'City already registered');
              redirect(base_url() . 'trips/city');
          }
          else{
              $this->db->insert('city', $field);
              if($this->db->affected_rows() > 0){
                return true;
              }
              else{
                return false;
              }
        }
    }

    public function check_region($region){
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
      public function check_province($province){
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
      public function check_city($city){
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

      public function getprofile(){
        $this->db->where('status','verified');
        $query=$this->db->get('accountverifier');
        return $query->result();
      }

    public function getTours(){
      $this->db->where('tourStatus','approved');
      $query=$this->db->get('usertrips');
      return $query->result();
    }
    public function getTouristSpot(){
      $this->db->order_by('tourist_name', 'asc');
      $query = $this->db->get('tbl_blogs');
          return $query->result();
    }

    public function jointrip($user){
      $this->db->where('user', $user);
      $query = $this->db->get('usertrips');
      return $query->row();
   }
    public function pakita($id){
      $this->db->where('id', $id);
      $query = $this->db->get('usertrips');
      return $query->row();
   }
   public function requestjoin($user,$id){
      $field = array(
        'tripid' => $id ,
        'members' => $user ,
        'restriction' => 'viewer'

      );
       $this->db->insert('leadmem', $field);
   }

  public function changeID($result){
  print_r($result['destination']);
  print_r($result['restriction']);
  print_r($result['leader']);
  print_r($result['user']);
  print_r($result['origin']);
  print_r($result['name']);
  print_r($result['date']);
   
        $this->db->where('destination',$result['destination']);
        $this->db->where('origin',$result['origin']);
        $this->db->where('name',$result['name']);
        $this->db->where('date',$result['date']);
        $this->db->where('leader',$result['leader']);
        $this->db->where('user',$result['user']);
        $this->db->from('usertrips');
        $query['data']=$this->db->get()->result(); 
       print_r($query['data']);exit();
//('print_r($id);  exit();
    
   }
   /*public function addTripId(){
    foreach ($variable as $key => $value) {
      # code...
    }
    $field = array(
      'i' => , '' );
   }*/

  public function getMembers($tripId){
      $this->db->where('tripIdNumber',$tripId);
      $query=$this->db->get('leadmem');
      return $query->result();
  }
  public function getLeader($leader){
      $this->db->where('username',$leader);
      $this->db->where('status','verified');
      $query=$this->db->get('accountverifier')->result();
      return $query;
  }
  public function getRequestMembers($tripId){
      $this->db->where('tripIdNumber',$tripId);
      $query=$this->db->get('requestjoin');
      return $query->result();
  }
  public function getComment($tripId){
      $this->db->where('tripIdNumber',$tripId);
      $query=$this->db->get('tourcomment');
      return $query->result();
  }
  public function getRequest($username){
    $this->db->where('username',$username);
    $query=$this->db->get('requestjoin');
    return $query->result();

  }
  public function getmembership($username){
    $this->db->where('members',$username);
    $this->db->where('restriction','member');
    $query=$this->db->get('leadmem');
    return $query->result();

  }
  public function getmembersTour(){
    $query=$this->db->get('leadmem');
    return $query->result();
  }

}
