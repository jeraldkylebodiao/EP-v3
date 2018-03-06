<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Spot_model extends CI_Model{

	public function getBlog(){
		$this->db->order_by('created_at', 'desc');
		$query = $this->db->get('tbl_blogs');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function submit(){
		$field = array(
			'tourist_name'=>$this->input->post('txt_tourist_name'),
			'desc_name'=>$this->input->post('txt_desc_name'),
			'reg_name'=>$this->input->post('txt_reg_name'),
			'prov_name'=>$this->input->post('txt_prov_name'),
			'city_name'=>$this->input->post('txt_city_name'),
			'created_at'=>date('Y-m-d H:i:s')
			);
		$this->db->insert('tbl_blogs', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function getBlogById($id){
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_blogs');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function update(){
		$id = $this->input->post('txt_hidden');
		$field = array(
			'tourist_name'=>$this->input->post('txt_tourist_name'),
			'desc_name'=>$this->input->post('txt_desc_name'),
			'reg_name'=>$this->input->post('txt_reg_name'),
			'prov_name'=>$this->input->post('txt_prov_name'),
			'city_name'=>$this->input->post('txt_city_name'),
			'updated_at'=>date('Y-m-d H:i:s')
			);
		$this->db->where('id', $id);
		$this->db->update('tbl_blogs', $field);
		echo $this->db->last_query();extit;
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_blogs');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

}