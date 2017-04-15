<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quationm extends CI_Model {
	public function quotation_data_check(){
		$quotation 			=  $this->input->post('quotation');
		$date   			=  $this->input->post('date');
		$customer 			=  $this->input->post('customer');
		$salesperson 		=  $this->input->post('salesperson');
		$duedate 			=  $this->input->post('duedate');
		$status  			=  $this->input->post('status');
		$payment  			=  $this->input->post('payment');
		$product  			=  $this->input->post('product');
		$quantity  			=  $this->input->post('quantity');
		$unitprice  		=  $this->input->post('unitprice');
		$taxes  			=  $this->input->post('taxes');
		$totalprice  		=  $this->input->post('totalprice');

		$quatationdata = array(

				'quotation'   			=>   $quotation,
				'date'     				=>   $date,
				'customer'  			=>   $customer,
				'salesperson'     		=>   $salesperson,
				'duedate'    			=>  $duedate,
				'status'    			=>  $status,
				'recivepaument'    		=>  $payment,
				'product' 				=>   $product,
				'quantity'   			=>   $quantity,
				'unitprice'   			=>   $unitprice,
				'taxes'   				=>   $taxes,
				'totalprice'   			=>   $totalprice,
			);
		$datainsert  =  $this->db->insert('quatation', $quatationdata);
		
		if($datainsert){
			return TRUE;
		}
		else{
			return false;
		}
	}
	#table data show function
	public function quotation_data_show_table(){
		$this->db->select('quatation.*, customera.contactp,customera.email');
		$this->db->join('customera', 'customera.id = quatation.customer', 'inner');
		$this->db->where('quatation.status', "draft quotation");
		$this->db->from("quatation");

		$query = $this->db->get();
		$results =$query->result();
		return $results;
		// $query = $this->db->get_where('quatation', array('status'=> "draft quotation"));
		// $results =$query->result();

		// return $results;
	}

	#dlete function add model
	public function quation_data_delete($id=null){
		$this->db->delete('quatation', array('id' => $id) );

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	# quatetion data edit function 
	public function edit_qutetion_data($id=null){
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
	# quatetion data edit function 

	public function quotation_update_check($id=null){
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