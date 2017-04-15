<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salesteamm extends CI_Model {
	public function salesteam_data_check(){
		$salesname 			=  $this->input->post('salesname');
		$invoicet   		=  $this->input->post('invoicet');
		$invoicef 			=  $this->input->post('invoicef');
		$actualinvoiced 	=  $this->input->post('actualinvoiced');

		$salesdata = array(

				'salesname'   			=>   $salesname,
				'invoicet'     			=>   $invoicet,
				'invoicef'  			=>   $invoicef,
				'actualinvoiced'     	=>   $actualinvoiced,
			);
		$datainsert  =  $this->db->insert('sales', $salesdata);
		
		if($datainsert){
			return TRUE;
		}
		else{
			return false;
		}
	}
	#table data show function
	public function sales_data_show_table(){
		$query = $this->db->get('sales');
		$results =$query->result();

		return $results;
	}

	#dlete function add salesteam
	public function salesteam_data_delete($id=null){
		$this->db->delete('sales', array('id' => $id) );

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	#edite function calls to salesteam
	public function edit_salesteam_data($id=null){
		$catecheck = array(

				'id' => $id,
			);
		$query = $this->db->get_where('sales', $catecheck );
		if($query->num_rows() ==1){
			return $query->result();
		}
		else{
			return FALSE;
		}
	}
	#edit sales team validation update
	public function salesteam_data_update_check($id=null){
		$salesname 			=  $this->input->post('salesname');
		$invoicet   		=  $this->input->post('invoicet');
		$invoicef 			=  $this->input->post('invoicef');
		$actualinvoiced 	=  $this->input->post('actualinvoiced');

		$salesdataupdate = array(

				'salesname'   			=>   $salesname,
				'invoicet'     			=>   $invoicet,
				'invoicef'  			=>   $invoicef,
				'actualinvoiced'     	=>   $actualinvoiced,
			);
		$this->db->where('id',$id);
		$query = $this->db->update('sales', $salesdataupdate );
		if($this->db->affected_rows()){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}


}		