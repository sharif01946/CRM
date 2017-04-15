<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leadsm extends CI_Model {
	public function leads_data_check(){
		$date 			=  $this->input->post('date');
		// $opportunity   	=  $this->input->post('opportunity');
		$name 			=  $this->input->post('name');
		$contact 		=  $this->input->post('contact');
		$country 		=  $this->input->post('country');
		$email  		=  $this->input->post('email');
		$pnumber  		=  $this->input->post('pnumber');
		$teammm  		=  $this->input->post('teammm');
		$tphone  		=  $this->input->post('tphone');
		$addres  		=  $this->input->post('addres');

		$leadsdata = array(

				'date'   			=>   $date,
				// 'opportunity'     	=>   $opportunity,
				'name'  			=>   $name,
				'contact'     		=>   $contact,
				'country'    		=>  $country,
				'email'    		 	=>  $email,
				'pnumber' 			=>   $pnumber,
				'teammm'   			=>   $teammm,
				'tphone'   			=>   $tphone,
				'addres'   			=>   $addres,
			);
		// var_dump($leadsdata);
		// die();
		$datainsert  =  $this->db->insert('leads', $leadsdata);
		
		if($datainsert){
			return TRUE;
		}
		else{
			return false;
		}
	}
	#table data show function
	public function lead_data_show_table(){
		$query = $this->db->get('leads');
		$results =$query->result();

		return $results;
	}
	# leads dlete function add 
	public function leads_data_delete($id=null){
		$this->db->delete('leads', array('id' => $id) );

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	#leads edit function add
	public function edit_leads_data($id=null){
		$leadeidt = array(

				'id' => $id,
			);
		$query = $this->db->get_where('leads', $leadeidt );
		if($query->num_rows() ==1){
			return $query->result();
		}
		else{
			return FALSE;
		}
	}
	#leads edit validation function
	public function leads_update_data_check($id=null){
		$date 			=  $this->input->post('date');
		// $opportunity   	=  $this->input->post('opportunity');
		$name 			=  $this->input->post('name');
		$contact 		=  $this->input->post('contact');
		$country 		=  $this->input->post('country');
		$email  		=  $this->input->post('email');
		$pnumber  		=  $this->input->post('pnumber');
		$teammm  		=  $this->input->post('teammm');
		$tphone  		=  $this->input->post('tphone');
		$addres  		=  $this->input->post('addres');

		$leadsdataupdate = array(

				'date'   			=>   $date,
				// 'opportunity'     	=>   $opportunity,
				'name'  			=>   $name,
				'contact'     		=>   $contact,
				'country'    		=>  $country,
				'email'    		 	=>  $email,
				'pnumber' 			=>   $pnumber,
				'teammm'   			=>   $teammm,
				'tphone'   			=>   $tphone,
				'addres'   			=>   $addres,
			);
		$this->db->where('id',$id);
		$query = $this->db->update('leads', $leadsdataupdate );
		if($this->db->affected_rows()){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}



}