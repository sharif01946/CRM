<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class paymentm extends CI_Model {
	public function payment_data_check(){
		$invoice 			=  $this->input->post('invoice');
		$date   	=  $this->input->post('date');
		$paymentmethod 			=  $this->input->post('paymentmethod');
		$amount 		=  $this->input->post('amount');

		$paymentdata = array(

				'invoice'   			=>   $invoice,
				'date'     				=>   $date,
				'paymentmethod'  		=>   $paymentmethod,
				'amount'     			=>   $amount,
			);
		$datainsert  =  $this->db->insert('paymnet', $paymentdata);
		
		if($datainsert){
			return TRUE;
		}
		else{
			return false;
		}
	}
	#paymnet data show function
	public function paymnet_data_show_table(){
		$query = $this->db->get('paymnet');
		$results =$query->result();

		return $results;
	}

	#dlete function add model
	public function payment_data_delete($id=null){
		$this->db->delete('paymnet', array('id' => $id) );

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}