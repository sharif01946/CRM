<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maincontactc extends CI_Controller {
	#common file read data check
	public function __construct(){
		parent::__construct();

		#load customer_model model
		$this->load->model('customerm');

		$this->load->model('maincontactm');

		$this->load->model('salesteamm');

		#check login data in the user
		if(!$this->customerm->is_user_logged_in()){
			redirect('logincontrol');
		}
		
	}
	public function index(){
		redirect('d_head');
	}

	#sales team main function

	public function maincontact_info_check(){
		$this->form_validation->set_rules('date', 'Date',  'trim|required|xss_clean');
		$this->form_validation->set_rules('calldescrip', 'Calldescrip',  'trim|required|xss_clean');
		$this->form_validation->set_rules('contact', 'Contact',  'trim|required|xss_clean');
		$this->form_validation->set_rules('responsible', 'Responsible',  'trim|required|xss_clean');

		if($this->form_validation->run() == FALSE){
			$data['maincontact']  = 'maincontactinput';
			$this->load->view('d_head',$data);
		}
		else{
			$this->load->model('maincontactm');
			$maincontact_data  = $this->maincontactm->maincontact_data_check();
			if($maincontact_data ){
				#the value is true then redirect to page?
				$data['maincontactab'] = 'maincontactable';
				$data['contactdata']  = $this->maincontactm->maincontact_data_show_table();
				$this->load->view('d_head',$data);			
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}
	}

	public function maincontact_table(){
		$data['maincontactab'] = 'maincontactable';
		$data['contactdata']  = $this->maincontactm->maincontact_data_show_table();
		$this->load->view('d_head',$data);
	}

	public function maincontact_input(){
		$data['maincontact']  = 'maincontactinput';
		$data['contactdata']  =  $this->customerm->input_data_read();
		$data['salequat']  = $this->salesteamm->sales_data_show_table();
		$this->load->view('d_head',$data);
	}

	public function maincontac_delete($id=null){
		if($this->maincontactm->maincontact_data_delete($id) ){
			$data['maincontactab'] = 'maincontactable';
			$data['contactdata']  = $this->maincontactm->maincontact_data_show_table();
			$this->load->view('d_head',$data);
		}
		else{
			$data['homepage'] = 'home';
			$this->load->view('d_head',$data);
		}

	}
}