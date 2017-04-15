<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productm extends CI_Model {
	public function product_data_check(){
		$product 			=  $this->input->post('product');
		$category   		=  $this->input->post('category');
		$ptype 				=  $this->input->post('ptype');
		$status 			=  $this->input->post('status');
		$quantityhand 		=  $this->input->post('quantityhand');
		$quantityavilable 	=  $this->input->post('quantityavilable');

		$producdata = array(

				'product'   			=>   $product,
				'category'     			=>   $category,
				'ptype'  				=>   $ptype,
				'quantityhand'      	=>   $quantityhand,
				'quantityavilable'      =>   $quantityavilable,
			);
		$datainsert  =  $this->db->insert('productt', $producdata);
		
		if($datainsert){
			return TRUE;
		}
		else{
			return false;
		}
	}
	#table data show function
	public function produc_data_show_table(){
		$query = $this->db->get('productt');
		$results =$query->result();

		return $results;
	}

	#dlete function add model
	public function product_data_delete($id=null){
		$this->db->delete('productt', array('id' => $id) );

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	#edit product  function add model
	public function edit_product_data($id=null){
		$catecheck = array(

				'id' => $id,
			);
		$query = $this->db->get_where('productt', $catecheck );
		if($query->num_rows() ==1){
			return $query->result();
		}
		else{
			return FALSE;
		}
	}
	#edit product  function add model
	public function product_data_update($id=null){
		$product 			=  $this->input->post('product');
		$category   		=  $this->input->post('category');
		$ptype 				=  $this->input->post('ptype');
		// $status 			=  $this->input->post('status');
		$quantityhand 		=  $this->input->post('quantityhand');
		$quantityavilable 	=  $this->input->post('quantityavilable');

		$producdata = array(

				'product'   			=>   $product,
				'category'     			=>   $category,
				'ptype'  				=>   $ptype,
				// 'status'      			=>   $status,
				'quantityhand'      	=>   $quantityhand,
				'quantityavilable'      =>   $quantityavilable,
			);
		$this->db->where('id',$id);
		$query = $this->db->update('productt', $producdata );
		if($this->db->affected_rows()){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}


}		