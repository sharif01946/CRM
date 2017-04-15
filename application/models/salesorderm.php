<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salesorderm extends CI_Model {
	
	public function salesorde_data_show_table(){
		$this->db->select('quatation.*, customera.contactp,customera.email');
		$this->db->join('customera', 'customera.id = quatation.customer', 'inner');
		// $this->db->where('quatation.status', "unpaid invoice");
		$this->db->from("quatation");

		$query = $this->db->get();
		$results =$query->result();
		return $results;
	}

	#dlete function add model
	public function salesorder_data_delete($id=null){
		$this->db->delete('quatation', array('id' => $id) );

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	#edit data function  modles

	public function edit_quatetion_data($id=null){
		$updatecheck = array(

				'id' => $id,
			);
		$query = $this->db->get_where('quatation', $updatecheck );
		if($query->num_rows() ==1){
			return $query->result();
		}
		else{
			return FALSE;
		}
	}
	# salesorder data edit function 

	public function salesorder_update_check($id=null){
		$quotation 			=  $this->input->post('quotation');
		$date   			=  $this->input->post('date');
		$customer 			=  $this->input->post('customer');
		$salesperson 		=  $this->input->post('salesperson');
		$status  			=  $this->input->post('status');
		$product  			=  $this->input->post('product');
		$quantity  			=  $this->input->post('quantity');
		$unitprice  		=  $this->input->post('unitprice');
		$taxes  			=  $this->input->post('taxes');
		$totalprice  		=  $this->input->post('totalprice');

		$update = array(

				'quotation'   			=>   $quotation,
				'date'     				=>   $date,
				'customer'  			=>   $customer,
				'salesperson'     		=>   $salesperson,
				'status'    		 	=>  $status,
				'product' 				=>   $product,
				'quantity'   			=>   $quantity,
				'unitprice'   			=>   $unitprice,
				'taxes'   				=>   $taxes,
				'totalprice'   			=>   $totalprice,
			);
		$this->db->where('id',$id);
		$query = $this->db->update('quatation', $update );
		if($this->db->affected_rows()){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}


}