<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoicem extends CI_Model {
	// public function invoice_data_check(){
	// 	$invoice 			=  $this->input->post('invoice');
	// 	$date   			=  $this->input->post('date');
	// 	$customer 			=  $this->input->post('customer');
	// 	$ddate 				=  $this->input->post('ddate');
	// 	$totalamount 		=  $this->input->post('totalamount');
	// 	$status  			=  $this->input->post('status');
	// 	$product  			=  $this->input->post('product');
	// 	$quantity  			=  $this->input->post('quantity');
	// 	$totalprice  		=  $this->input->post('totalprice');
	// 	$payments  			=  $this->input->post('payments');

	// 	$invoicedata = array(

	// 			'invoice'   			=>   $invoice,
	// 			'date'     				=>   $date,
	// 			'customer'  			=>   $customer,
	// 			'ddate'     			=>   $ddate,
	// 			'totalamount'    		=>  $totalamount,
	// 			'status'    		 	=>  $status,
	// 			'product' 				=>   $product,
	// 			'quantity'   			=>   $quantity,
	// 			'totalprice'   			=>   $totalprice,
	// 			'payments'   			=>   $payments,
	// 		);
	// 	$datainsert  =  $this->db->insert('invoice', $invoicedata);
		
	// 	if($datainsert){
	// 		return TRUE;
	// 	}
	// 	else{
	// 		return false;
	// 	}
	// }
	#table data show function
	public function invoice_data_show_table(){
		$this->db->select('quatation.*, customera.contactp,customera.email');
		$this->db->join('customera', 'customera.id = quatation.customer', 'inner');
		$this->db->from("quatation");

		$query = $this->db->get();
		$results =$query->result();
		return $results;
	}
	#main function add
	// public function main_send_check(){
	// 	$maincheck =array(
	// 			'email' => $email,
			
	// 		);
	// 	$query = $this->db->get_where('contact', $maincheck );
	// 	if($query->num_rows() ==1){
	// 		return $query->result();
	// 	}
	// 	else{
	// 		return FALSE;
	// 	}
	// }
	 # invoice dlete function add model
	
	public function invoice_data_delete($id=null){
		$this->db->delete('quatation', array('id' => $id) );

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	#edit invoice
	public function edit_invoice_data($id=null){
		// $quate = array(

		// 		'id' => $id,
		// 	);
		// $query = $this->db->get_where('quatation',$quate);
		// if($query->num_rows() ==1){
		// 	return $query->result();
		// }
		// else{
		// 	return FALSE;
		// }
		
		$this->db->select('quatation.*, customera.contactp,customera.email');
		$this->db->join('customera', 'customera.id = quatation.customer', 'inner');
		$this->db->from("quatation");
		$this->db->where("quatation.id", $id);

		$query = $this->db->get();
		if($query->num_rows() ==1){
			return $query->result();
		}else{
			return FALSE;
		}

	}
	# invoice data edit function 

	public function invoice_update_check($id=null){
		$quotation 			=  $this->input->post('quotation');
		$date   			=  $this->input->post('date');
		$customer 			=  $this->input->post('customer');
		$duedate 			=  $this->input->post('duedate');
		$salesperson 		=  $this->input->post('salesperson');
		$status  			=  $this->input->post('status');
		$payment  			=  $this->input->post('payment');
		$product  			=  $this->input->post('product');
		$quantity  			=  $this->input->post('quantity');
		$unitprice  		=  $this->input->post('unitprice');
		$taxes  			=  $this->input->post('taxes');
		$totalprice  		=  $this->input->post('totalprice');

		$update = array(

				'quotation'   			=>   $quotation,
				'date'     				=>   $date,
				'customer'  			=>   $customer,
				'duedate'  				=>   $duedate,
				'salesperson'     		=>   $salesperson,
				'status'    		 	=>  $status,
				'recivepaument'    		 	=>  $payment,
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