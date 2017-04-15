<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorym extends CI_Model {
	public function category_data_check(){
		$category 	=  $this->input->post('category');

		$categorydata = array(

				'category'   =>   $category,
			);
		$datainsert  =  $this->db->insert('categorya', $categorydata);
		
		if($datainsert){
			return TRUE;
		}
		else{
			return false;
		}
	}
	#table data show function
	public function category_data_show_table(){
		$query = $this->db->get('categorya');
		$results =$query->result();

		return $results;
	}


	#dlete function add
	public function category_data_delete($id=null){
		$this->db->delete('categorya', array('id' => $id) );

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	#edit data function 

	public function edit_category_data($id=null){
		$catecheck = array(

				'id' => $id,
			);
		$query = $this->db->get_where('categorya', $catecheck );
		if($query->num_rows() ==1){
			return $query->result();
		}
		else{
			return FALSE;
		}
	}

	#edit validation  caheck data function 

	public function category_update_data_check($id=null){
		$category 	=  $this->input->post('category');
		$update = array(

				'category'  =>  $category,
			);
		$this->db->where('id',$id);
		$query = $this->db->update('categorya', $update );
		if($this->db->affected_rows()){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

}		