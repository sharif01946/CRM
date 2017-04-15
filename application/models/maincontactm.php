<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maincontactm extends CI_Model {
	public function maincontact_data_check(){
		$date 				=  $this->input->post('date');
		$calldescrip 		=  $this->input->post('calldescrip');
		$contact 			=  $this->input->post('contact');
		$responsible 		=  $this->input->post('responsible');

		$maincondata = array(

				'date'   			=>   $date,
				'calldescrip'   	=>   $calldescrip,
				'contact'   		=>   $contact,
				'responsible'   	=>   $responsible,
			);
		$datainsert  =  $this->db->insert('maincontact', $maincondata);
		
		if($datainsert){
			return TRUE;
		}
		else{
			return false;
		}
	}
	#table data show function
	public function maincontact_data_show_table(){
		$query = $this->db->get('maincontact');
		$results =$query->result();

		return $results;
	}
	public function maincontact_data_delete($id=null){
		$this->db->delete('maincontact', array('id' => $id) );

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}

}		