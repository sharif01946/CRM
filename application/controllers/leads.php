<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leads extends CI_Controller {
	#common file read data check
	public function __construct(){
		parent::__construct();

		#load customer_model model
		$this->load->model('customerm');

		$this->load->model('leadsm');
		$this->load->model('salesteamm');

		#check login data in the user
		if(!$this->customerm->is_user_logged_in()){
			redirect('logincontrol');
		}
		
	}
	public function index(){
		redirect('d_head');
	}

	public function leads_table(){
		$data['leads_table'] 	= 'leads_table';
		$data['leadsdata'] 	=	$this->leadsm->lead_data_show_table();
		$this->load->view('d_head',$data);
	}

	public function leads_input(){
	$data['leads_input'] 	= 'leads_input';
	$data['contactdata']  	=  $this->customerm->input_data_read();
	$data['salest']  		= $this->salesteamm->sales_data_show_table();
	$this->load->view('d_head',$data);
	}

	public function leads_info_check(){
		$this->form_validation->set_rules('date', 'Date',  'trim|required|xss_clean');
		// $this->form_validation->set_rules('opportunity', 'Opportunity',  'trim|required|xss_clean|max_length[50]');
		$this->form_validation->set_rules('name', 'Name',  'trim|required|xss_clean|max_length[40]');
		$this->form_validation->set_rules('contact', 'Contact',  'trim|required|xss_clean|min_length[4]');
		$this->form_validation->set_rules('country', 'Country',  'trim|required|xss_clean|max_length[40]');
		$this->form_validation->set_rules('email',   'Email', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('pnumber','Pnumber',    'trim|required|xss_clean|min_length[11]');
		$this->form_validation->set_rules('teammm', 'Team',  'trim|required|xss_clean');
		$this->form_validation->set_rules('tphone',  'Tphone', 'trim|required|xss_clean|max_length[15]');
		$this->form_validation->set_rules('addres',   'Addres','trim|required|xss_clean|max_length[100]');

		if($this->form_validation->run() == FALSE){
			$data['leads_input'] = 'leads_input';
			$this->load->view('d_head',$data);
		}
		 else{
			$this->load->model('leadsm');
			$leads_data  = $this->leadsm->leads_data_check();
			if($leads_data ){
				#the value is true then redirect to page?
				$data['leads_table'] = 'leads_table';
				$data['leadsdata']  = $this->leadsm->lead_data_show_table();
				$this->load->view('d_head',$data);
							
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}

	}

	#leads delete function add
	public function leads_delete($id=null){
		if($this->leadsm->leads_data_delete($id) ){
				#table redirect function addd
			$data['leads_table'] 	= 'leads_table';
			$data['leadsdata'] 	=	$this->leadsm->lead_data_show_table();
			$this->load->view('d_head',$data);
		}
		else{
			$data['homepage'] = 'home';
			$this->load->view('d_head',$data);
		}
	}

	#leads edit funcion create
	public function leads_edit($id=null){
		if($this->leadsm->edit_leads_data($id) ){
			$data['infoleads'] = $this->leadsm->edit_leads_data($id);
		}
			$data['Editleads'] = 'editleads';
			$this->load->view('d_head',$data);
	}


	#leadsedite form validation function
	public function leads_info_update_check($id=null){
		$this->form_validation->set_rules('date', 'Date',  'trim|required|xss_clean');
		// $this->form_validation->set_rules('opportunity', 'Opportunity',  'trim|required|xss_clean|max_length[50]');
		$this->form_validation->set_rules('name', 'Name',  'trim|required|xss_clean|max_length[40]');
		$this->form_validation->set_rules('contact', 'Contact',  'trim|required|xss_clean|min_length[4]');
		$this->form_validation->set_rules('country', 'Country',  'trim|required|xss_clean|max_length[40]');
		$this->form_validation->set_rules('email',   'Email', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('pnumber','Pnumber',    'trim|required|xss_clean|min_length[11]');
		$this->form_validation->set_rules('teammm', 'Team',  'trim|required|xss_clean');
		$this->form_validation->set_rules('tphone',  'Tphone', 'trim|required|xss_clean|max_length[15]');
		$this->form_validation->set_rules('addres',   'Addres','trim|xss_clean|max_length[100]');

		if($this->form_validation->run() == FALSE){
			if($this->leadsm->edit_leads_data($id) ){
			$data['infoleads'] = $this->leadsm->edit_leads_data($id);
			}
			$data['Editleads'] = 'editleads';
			$this->load->view('d_head',$data);
		}
		 else{
			$this->load->model('leadsm');
			$leads_update  = $this->leadsm->leads_update_data_check($id);
			if($leads_update ){
				#the value is true then redirect to page?
				$data['leads_table'] = 'leads_table';
				$data['messageuodate'] = 'Data update Successfully..';
				$data['leadsdata']  = $this->leadsm->lead_data_show_table();
				$this->load->view('d_head',$data);
							
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}

	}

}