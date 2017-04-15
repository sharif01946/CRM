<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customerc extends CI_Controller {
	public function __construct(){
		parent::__construct();

		#load customer_model model
		$this->load->model('customerm');
		$this->load->model('salesteamm');
		#check login data in the user
		if(!$this->customerm->is_user_logged_in()){
			redirect('logincontrol');
		}
		
	}

	
	public function index(){
		redirect('d_head');
	}
	public function customer_info_check(){
		$this->form_validation->set_rules('name', 'Name',  'trim|required|xss_clean|max_length[40]');
		$this->form_validation->set_rules('email',   'Email', 'trim|required|xss_clean|valid_email|is_unique[customera.email]');
		$this->form_validation->set_rules('contact-person','Contact-person', 'trim|required|xss_clean|min_length[4]|is_unique[customera.contactp]');
		$this->form_validation->set_rules('pnumber','Pnumber',    'trim|required|xss_clean|min_length[11]');
		$this->form_validation->set_rules('website', 'Website', 'trim|required|xss_clean|valid_URL');
		$this->form_validation->set_rules('teammm', 'Team',  'trim|required|xss_clean');
		$this->form_validation->set_rules('tphone',  'Tphone', 'trim|required|xss_clean|max_length[15]');
		$this->form_validation->set_rules('addres',   'Addres','trim|required|xss_clean|max_length[100]');
		if($this->form_validation->run() == FALSE){

			$data['customer'] = 'customer';
			$this->load->view('d_head',$data);
		}
		else{
			$this->load->model('customerm');
			$customer_data  = $this->customerm->customer_data_check();
			if($customer_data ){
				#the value is true 

				$data['customer_table'] = 'customer_table';
				$data['userData']       =  $this->customerm->input_data_read();
				$this->load->view('d_head',$data);
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}
	}

	#add customer input data function!!!

	public function customer_add(){
		$data['customer'] = 'customer';
		$this->load->view('d_head',$data);
	}

	#ADD customer table load function!!
	public function customer_table(){
		$data['customer_table'] =  'customer_table';
		$data['userData']       =  $this->customerm->input_data_read();
		$this->load->view('d_head',$data);
	}
	#customer  delete function add

	public function customermain_delete($id=null){
		if($this->customerm->ccustomer_data_delete($id) ){
			$data['customer_table'] =  'customer_table';
			$data['userData']       =  $this->customerm->input_data_read();
			$this->load->view('d_head',$data);
		}
		else{
			$data['homepage'] = 'home';
			$this->load->view('d_head',$data);
		}

	}

	#customer edit funcion create
	public function customermain_edit($id=null){
		if($this->customerm->edit_customer_data_update($id) ){
			$data['infocustomer'] = $this->customerm->edit_customer_data_update($id);
		}
			$data['Ediccustomer'] = 'editcustomer';
			$this->load->view('d_head',$data);
	}

	#customerdat update edit funcion create
	public function customer_data_update($id=null){
		$this->form_validation->set_rules('name', 'Name',  'trim|required|xss_clean|max_length[40]');
		$this->form_validation->set_rules('email',   'Email', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('contact-person','Contact-person', 'trim|required|xss_clean|min_length[4]');
		$this->form_validation->set_rules('pnumber','Pnumber',    'trim|required|xss_clean|min_length[11]');
		$this->form_validation->set_rules('website', 'Website', 'trim|required|xss_clean|valid_URL');
		$this->form_validation->set_rules('teammm', 'Team',  'trim|required|xss_clean');
		$this->form_validation->set_rules('tphone',  'Tphone', 'trim|required|xss_clean|max_length[15]');
		$this->form_validation->set_rules('addres',   'Addres','trim|xss_clean|max_length[100]');
		
		if($this->form_validation->run() == FALSE){

			if($this->customerm->edit_customer_data_update($id) ){
			$data['infocustomer'] = $this->customerm->edit_customer_data_update($id);
			}
			$data['Ediccustomer'] = 'editcustomer';
			$this->load->view('d_head',$data);
		}
		else{
			$this->load->model('customerm');
			$customer_update  = $this->customerm->customer_data_update_check($id);
			if($customer_update ){
				#the value is true 

				$data['customer_table'] = 'customer_table';
				$data['messageuodate'] = 'Data update Successfully..';
				$data['userData']       =  $this->customerm->input_data_read();
				$this->load->view('d_head',$data);
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}
	}

	#add main contact function

	public function contact_info_check(){
		$this->form_validation->set_rules('firstname', 'First name',  'trim|required|xss_clean|max_length[40]');
		// $this->form_validation->set_rules('lastname', 'Lastname',  'trim|required|xss_clean|max_length[40]');
		$this->form_validation->set_rules('name', 'Name',  'trim|required|xss_clean|max_length[40]');
		$this->form_validation->set_rules('jobposition', 'Jobposition',  'trim|required|xss_clean|max_length[40]');
		$this->form_validation->set_rules('email',   'Email', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('pnumber','Pnumber',    'trim|required|xss_clean|min_length[11]');
		// $this->form_validation->set_rules('website', 'Website', 'trim|xss_clean|valid_URL');
		$this->form_validation->set_rules('teammm', 'Team',  'trim|required|xss_clean');
		$this->form_validation->set_rules('tphone',  'Tphone', 'trim|required|xss_clean|max_length[15]');
		$this->form_validation->set_rules('addres',   'Addres','trim|required|xss_clean|max_length[100]');

		if($this->form_validation->run() == FALSE){
			$data['Contact'] = 'contact';
			$this->load->view('d_head',$data);
		}
		 else{
			$this->load->model('customerm');
			$contact_data  = $this->customerm->contact_data_check();
			if($contact_data ){
				#the value is true then redirect to page?
				$data['Contact_table'] = 'contact_table';
				$data['contactdata'] =$this->customerm->contact_input_data_read();
				$this->load->view('d_head',$data);
							
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}
	}


	#Add contac input data
	public function contact_input(){
	$data['Contact'] = 'contact';
	$data['contactdata']  =  $this->customerm->input_data_read();
	$data['salescont']  = $this->salesteamm->sales_data_show_table();
	$this->load->view('d_head',$data);
	
	}
	#Add contact table function
	public function contact_table(){

	$data['Contact_table'] = 'contact_table';
	$data['contactdata'] =$this->customerm->contact_input_data_read();
	$this->load->view('d_head',$data);
	}
	#contact delete function add

	public function customer_delete($id=null){
		if($this->customerm->contact_data_delete($id) ){
			$data['Contact_table'] = 'contact_table';
			$data['contactdata'] =$this->customerm->contact_input_data_read();
			$this->load->view('d_head',$data);
		}
		else{
			$data['homepage'] = 'home';
			$this->load->view('d_head',$data);
		}

	}

	#contact edit function create
	public function contact_edit($id=null){
		if($this->customerm->edit_conatact_data_update($id) ){
			$data['infocontact'] = $this->customerm->edit_conatact_data_update($id);
		}
			$data['Edicontact'] = 'editcontact';
			$this->load->view('d_head',$data);
	}
	#add main contact edi form validation function

	public function contact_update_data_check($id=null){
		$this->form_validation->set_rules('firstname', 'First name',  'trim|required|xss_clean|max_length[40]');
		// $this->form_validation->set_rules('lastname', 'Lastname',  'trim|required|xss_clean|max_length[40]');
		$this->form_validation->set_rules('name', 'Name',  'trim|required|xss_clean|max_length[40]');
		$this->form_validation->set_rules('jobposition', 'Jobposition',  'trim|required|xss_clean|max_length[40]');
		$this->form_validation->set_rules('email',   'Email', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('pnumber','Pnumber',    'trim|required|xss_clean|min_length[11]');
		// $this->form_validation->set_rules('website', 'Website', 'trim|xss_clean|valid_URL');
		$this->form_validation->set_rules('teammm', 'Team',  'trim|required|xss_clean');
		$this->form_validation->set_rules('tphone',  'Tphone', 'trim|required|xss_clean|max_length[15]');
		$this->form_validation->set_rules('addres',   'Addres','trim|xss_clean|max_length[100]');

		if($this->form_validation->run() == FALSE){
			if($this->customerm->edit_conatact_data_update($id) ){
			$data['infocontact'] = $this->customerm->edit_conatact_data_update($id);
			}
			$data['Edicontact'] = 'editcontact';
			$this->load->view('d_head',$data);
		}
		 else{
			$this->load->model('customerm');
			$contact_update  = $this->customerm->contacts_update_data_check($id);
			if($contact_update ){
				#the value is true then redirect to page?
				$data['Contact_table'] = 'contact_table';
				$data['messageuodate'] = 'Data update Successfully..';
				$data['contactdata'] =$this->customerm->contact_input_data_read();
				$this->load->view('d_head',$data);
							
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}
	}


	#METTING MAIN FUNCTION CALL OPTION
	public function meeting_info_check(){
		$this->form_validation->set_rules('meeting', 'Meeting',  'trim|required|xss_clean|max_length[40]');
		$this->form_validation->set_rules('responsible', 'Responsible',  'trim|required|xss_clean|max_length[40]');
		$this->form_validation->set_rules('starting', 'Starting',  'trim|required|xss_clean');
		$this->form_validation->set_rules('ending', 'Ending',  'trim|required|xss_clean');
		$this->form_validation->set_rules('location', 'Location',  'trim|required|xss_clean');

		if($this->form_validation->run() == FALSE){
			#if the condition is falsethen the error this page show!!
			$data['meeting'] = 'metting';
			$this->load->view('d_head',$data);
		}
		else{
			$this->load->model('customerm');
			$meeting_data  = $this->customerm->meeting_data_check();
			if($meeting_data ){
				#the value is true then redirect to page?
				$data['metting_table'] = 'metting_table';
				$data['meetingdata'] = $this->customerm->meeting_input_data_read();
				$this->load->view('d_head',$data);
							
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}
	}

	#meeeting input function
	public function meeting_input(){
		$data['meeting'] = 'metting';
		$data['salescont']  = $this->salesteamm->sales_data_show_table();
		$this->load->view('d_head',$data);

	}
	# metting table data read function
	public function metting_table(){
		$data['metting_table'] = 'metting_table';
		$data['meetingdata'] = $this->customerm->meeting_input_data_read();
		$this->load->view('d_head',$data);
	}
	#mettimg delete function add

	public function metting_delete($id=null){
		if($this->customerm->mettig_data_delete($id) ){
			$data['metting_table'] = 'metting_table';
			$data['meetingdata'] = $this->customerm->meeting_input_data_read();
			$this->load->view('d_head',$data);
		}
		else{
			$data['homepage'] = 'home';
			$this->load->view('d_head',$data);
		}

	}
	#metting edit function create
	public function metting_edit($id=null){
		if($this->customerm->edit_metting_data_update($id) ){
			$data['infometting'] = $this->customerm->edit_metting_data_update($id);
		}
			$data['Editmetting'] = 'editmetting';
			$this->load->view('d_head',$data);
	}
	#metting edit form validation data function create

	public function meeting_data_update_check($id=null){
		$this->form_validation->set_rules('meeting', 'Meeting',  'trim|required|xss_clean|max_length[40]');
		$this->form_validation->set_rules('responsible', 'Responsible',  'trim|required|xss_clean|max_length[40]');
		$this->form_validation->set_rules('starting', 'Starting',  'trim|required|xss_clean');
		$this->form_validation->set_rules('ending', 'Ending',  'trim|required|xss_clean');
		$this->form_validation->set_rules('location', 'Location',  'trim|required|xss_clean');

		if($this->form_validation->run() == FALSE){
			#if the condition is falsethen the error this page show!!
			if($this->customerm->edit_metting_data_update($id) ){
			$data['infometting'] = $this->customerm->edit_metting_data_update($id);
			}
			$data['Editmetting'] = 'editmetting';
			$this->load->view('d_head',$data);
		}
		else{
			$this->load->model('customerm');
			$meeting_update  = $this->customerm->meeting_update_data_check($id);
			if($meeting_update ){
				#the value is true then redirect to page?
				$data['metting_table'] = 'metting_table';
				$data['messageuodate'] = 'Data update Successfully..';
				$data['meetingdata'] = $this->customerm->meeting_input_data_read();
				$this->load->view('d_head',$data);
							
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}
	}



	# MAIN LOGGED CALL FUNCTION LOAD!!

	#form validation section 
	public function logged_info_check(){
		$this->form_validation->set_rules('date', 'Date',  'trim|required|xss_clean');
		$this->form_validation->set_rules('Call', 'CAll',  'trim|required|xss_clean');
		$this->form_validation->set_rules('contact', 'Contact',  'trim|required|xss_clean');
		$this->form_validation->set_rules('responsible', 'Responsible',  'trim|required|xss_clean');

		if($this->form_validation->run() == FALSE){
			#if the condition is falsethen the error this page show!!
			$data['logged_input'] = 'logged';
			$this->load->view('d_head',$data);
		}
		else{
			$this->load->model('customerm');
			$logged_data  = $this->customerm->logged_data_check();
			if($logged_data ){
				#the value is true then redirect to page?
				$data['logged_tables'] = 'loggedtable';
				$data['logtable']  = $this->customerm->logged_table_insert();
				$this->load->view('d_head',$data);
							
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}

	}

	public function logged_input(){
		$data['logged_input'] = 'logged';
		$data['contactdata']  =  $this->customerm->input_data_read();
		$data['salescont']  = $this->salesteamm->sales_data_show_table();
		$this->load->view('d_head',$data);
	}

	public function logged_table(){
		$data['logged_tables'] = 'loggedtable';
		$data['logtable']  = $this->customerm->logged_table_insert();
		$this->load->view('d_head',$data);
	}
	#logged delete function add

	public function logged_delete($id=null){
		if($this->customerm->logged_data_delete($id) ){
			$data['logged_tables'] = 'loggedtable';
			$data['logtable']  = $this->customerm->logged_table_insert();
			$this->load->view('d_head',$data);
		}
		else{
			$data['homepage'] = 'home';
			$this->load->view('d_head',$data);
		}

	}
	#logged edit function create
	public function logged_edit($id=null){
		if($this->customerm->edit_logged_data_update($id) ){
			$data['infologged'] = $this->customerm->edit_logged_data_update($id);
		}
			$data['Editlogged'] = 'editlogged';
			$this->load->view('d_head',$data);
	}

	#form update logged validation section 
	public function logged_update_data_check($id=null){
		$this->form_validation->set_rules('date', 'Date',  'trim|required|xss_clean');
		$this->form_validation->set_rules('Call', 'CAll',  'trim|required|xss_clean');
		$this->form_validation->set_rules('contact', 'Contact',  'trim|required|xss_clean');
		$this->form_validation->set_rules('responsible', 'Responsible',  'trim|required|xss_clean');

		if($this->form_validation->run() == FALSE){
			#if the condition is falsethen the error this page show!!
			if($this->customerm->edit_logged_data_update($id) ){
			$data['infologged'] = $this->customerm->edit_logged_data_update($id);
			}
			$data['Edilogged'] = 'editlogged';
			$this->load->view('d_head',$data);
		}
		else{
			$this->load->model('customerm');
			$logged_update  = $this->customerm->logged_data_update_check($id);
			if($logged_update ){
				#the value is true then redirect to page?
				$data['logged_tables'] = 'loggedtable';
				$data['messageuodate'] = 'Data update Successfully..';
				$data['logtable']  = $this->customerm->logged_table_insert();
				$this->load->view('d_head',$data);
							
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}

	}

}