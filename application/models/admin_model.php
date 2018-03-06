 <?php  
 class Admin_model extends CI_Model  
 { 
 
		public function getUserById($id)
	{
			$this->db->where('id', $id);
			$query = $this->db->get('users');
				
			return $query->row();	

  }
  
 }
