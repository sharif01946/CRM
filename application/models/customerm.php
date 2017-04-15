<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customerm extends CI_Model {
	public function customer_data_check(){
		$company =  $this->input->post('name');
		$email   =  $this->input->post('email');
		$contact =  $this->input->post('contact-person');
		$pnumber =  $this->input->post('pnumber');
		$website =  $this->input->post('website');
		$teammm  =  $this->input->post('teammm');
		$tphone  =  $this->input->post('tphone');
		$addres  =  $this->input->post('addres');

		$cusdata = array(

				'company'   =>   $company,
				'email'     =>   $email,
				'contactp'  =>   $contact,
				'phone'     =>   $pnumber,
				'website'    =>  $website,
				'saless'     =>  $teammm,
				'telephone' =>   $tphone,
				'address'   =>   $addres,
			);
		$datainsert  =  $this->db->insert('customera', $cusdata);
		
		if($datainsert){
			return TRUE;
		}
		else{
			return false;
		}
	}
	# customer dlete function add model
	public function ccustomer_data_delete($id=null){
		$this->db->delete('customera', array('id' => $id) );

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	#customer edit function add
	public function edit_customer_data_update($id=null){
		$customereidt = array(

				'id' => $id,
			);
		$query = $this->db->get_where('customera', $customereidt );
		if($query->num_rows() ==1){
			return $query->result();
		}
		else{
			return FALSE;
		}
	}
	#customer edit validation function
	public function customer_data_update_check($id=null){
		$company =  $this->input->post('name');
		$email   =  $this->input->post('email');
		$contact =  $this->input->post('contact-person');
		$pnumber =  $this->input->post('pnumber');
		$website =  $this->input->post('website');
		$teammm  =  $this->input->post('teammm');
		$tphone  =  $this->input->post('tphone');
		$addres  =  $this->input->post('addres');

		$cusdataupdate = array(

				'company'   =>   $company,
				'email'     =>   $email,
				'contactp'  =>   $contact,
				'phone'     =>   $pnumber,
				'website'    =>  $website,
				'saless'     =>  $teammm,
				'telephone' =>   $tphone,
				'address'   =>   $addres,
			);
		$this->db->where('id',$id);
		$query = $this->db->update('customera', $cusdataupdate );
		if($this->db->affected_rows()){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
	# user  login check function!!
	public function is_user_logged_in(){
	return $this->session->userdata('current_user_id') !=FALSE;
	}

	#user data input to read database function

	public function input_data_read(){

		$query = $this->db->get('customera');
		$results = $query->result();
		
		return $results;
	}


	# contact data function create 

	public function contact_data_check(){
		$firstname 	=  $this->input->post('firstname');
		// $lastname 	=  $this->input->post('lastname');
		$company 	=  $this->input->post('name');
		$jobposition 	=  $this->input->post('jobposition');
		$email   	=  $this->input->post('email');
		$pnumber 	=  $this->input->post('pnumber');
		// $website 	=  $this->input->post('website');
		$teammm  	=  $this->input->post('teammm');
		$tphone  	=  $this->input->post('tphone');
		$addres  	=  $this->input->post('addres');

		$contactdata = array(

				'firstname'   	=>   $firstname,
				// 'lastname'   	=>   $lastname,
				'company'   	=>   $company,
				'jobposition'   =>   $jobposition,
				'email'     	=>   $email,
				'phone'    		=>   $pnumber,
				// 'website'    	=>   $website,
				'saless'     	=>   $teammm,
				'telephone' 	=>   $tphone,
				'address'   	=>   $addres,
			);
		$datainsert  =  $this->db->insert('contact', $contactdata);
		
		if($datainsert){
			return TRUE;
		}
		else{
			return false;
		}
	}

	#contact data read to database function 

	public function contact_input_data_read(){

		$query = $this->db->get('contact');
		$results = $query->result();

		return $results;
	}
	# contact dlete function add model
	public function contact_data_delete($id=null){
		$this->db->delete('contact', array('id' => $id) );

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	#contact edit function add
	public function edit_conatact_data_update($id=null){
		$contacteidt = array(

				'id' => $id,
			);
		$query = $this->db->get_where('contact', $contacteidt );
		if($query->num_rows() ==1){
			return $query->result();
		}
		else{
			return FALSE;
		}
	}
	# contact data update form validation create 

	public function contacts_update_data_check($id=null){
		$firstname 	=  $this->input->post('firstname');
		// $lastname 	=  $this->input->post('lastname');
		$company 	=  $this->input->post('name');
		$jobposition =  $this->input->post('jobposition');
		$email   	=  $this->input->post('email');
		$pnumber 	=  $this->input->post('pnumber');
		// $website 	=  $this->input->post('website');
		$teammm  	=  $this->input->post('teammm');
		$tphone  	=  $this->input->post('tphone');
		$addres  	=  $this->input->post('addres');

		$contactdata = array(

				'firstname'   	=>   $firstname,
				// 'lastname'   	=>   $lastname,
				'company'   	=>   $company,
				'jobposition'   =>   $jobposition,
				'email'     	=>   $email,
				'phone'    		=>   $pnumber,
				// 'website'    	=>   $website,
				'saless'     	=>   $teammm,
				'telephone' 	=>   $tphone,
				'address'   	=>   $addres,
			);
		$this->db->where('id',$id);
		$query = $this->db->update('contact', $contactdata );
		if($this->db->affected_rows()){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}


	# metting data check to database table
	public function meeting_data_check(){
		$meeting 	=  $this->input->post('meeting');
		$responsible 	=  $this->input->post('responsible');
		$starting 	=  $this->input->post('starting');
		$ending 	=  $this->input->post('ending');
		$location   	=  $this->input->post('location');


		$mettingtdata = array(

				'subject'   	=>   $meeting,
				'startdate'   	=>   $starting,
				'enddate'   	=>   $ending,
				'responsible'   =>   $responsible,
				'location'     	=>   $location,
			);
		$datainsert  =  $this->db->insert('meting', $mettingtdata);
		
		if($datainsert){
			return TRUE;
		}
		else{
			return false;
		}
	}
	#meetting data read to database function 

	public function meeting_input_data_read(){

		$query = $this->db->get('meting');
		$results = $query->result();

		return $results;
	}
	# metting dlete function add model
	public function mettig_data_delete($id=null){
		$this->db->delete('meting', array('id' => $id) );

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	#metting edit function add
	public function edit_metting_data_update($id=null){
		$mettingupdate = array(

				'id' => $id,
			);
		$query = $this->db->get_where('meting ', $mettingupdate );
		if($query->num_rows() ==1){
			return $query->result();
		}
		else{
			return FALSE;
		}
	}
	#metting data update function call

	public function meeting_update_data_check($id=null){
		$meeting 	=  $this->input->post('meeting');
		$responsible 	=  $this->input->post('responsible');
		$starting 	=  $this->input->post('starting');
		$ending 	=  $this->input->post('ending');
		$location   	=  $this->input->post('location');


		$mettingupdate = array(

				'subject'   	=>   $meeting,
				'startdate'   	=>   $starting,
				'enddate'   	=>   $ending,
				'responsible'   =>   $responsible,
				'location'     	=>   $location,
			);
		$this->db->where('id',$id);
		$query = $this->db->update('meting', $mettingupdate );
		if($this->db->affected_rows()){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
	# logged data check to database connection!!

	public function logged_data_check(){
		$date 			=  $this->input->post('date');
		$Call 			=  $this->input->post('Call');
		$contact 		=  $this->input->post('contact');
		$responsible 	=  $this->input->post('responsible');

		$loggeddata = array(

				'date'   	=>   $date,
				'Call'   	=>   $Call,
				'contact'   	=>   $contact,
				'responsible'   =>   $responsible,
			);
		$datainsert  =  $this->db->insert('logged', $loggeddata);
		
		if($datainsert){
			return TRUE;
		}
		else{
			return false;
		}
	}

	# logge table data show form database

	public function logged_table_insert(){
		$query   = $this->db->get('logged');
		$results = $query->result();

		
		return $results;
	}
	# logged dlete function add model
	public function logged_data_delete($id=null){
		$this->db->delete('logged', array('id' => $id) );

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	#looged edit function add
	public function edit_logged_data_update($id=null){
		$loggedupdate = array(

				'id' => $id,
			);
		$query = $this->db->get_where('logged ', $loggedupdate );
		if($query->num_rows() ==1){
			return $query->result();
		}
		else{
			return FALSE;
		}
	}
	public function logged_data_update_check($id=null){
		$date 			=  $this->input->post('date');
		$Call 			=  $this->input->post('Call');
		$contact 		=  $this->input->post('contact');
		$responsible 	=  $this->input->post('responsible');

		$loggedupdate = array(

				'date'   	=>   $date,
				'Call'   	=>   $Call,
				'contact'   	=>   $contact,
				'responsible'   =>   $responsible,
			);
		$this->db->where('id',$id);
		$query = $this->db->update('logged', $loggedupdate );
		if($this->db->affected_rows()){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

}