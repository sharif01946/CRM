<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salesteam extends CI_Controller {
	#common file read data check
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

	#sales team main function

	public function sales_info_check(){
		$this->form_validation->set_rules('salesname', 'Salesname',  'trim|required|xss_clean|min_length[4]');
		$this->form_validation->set_rules('invoicet', 'Invoicet',  'trim|required|xss_clean');
		$this->form_validation->set_rules('invoicef', 'Invoicef',  'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('actualinvoiced', 'Actualinvoiced',  'trim|required|xss_clean');

		if($this->form_validation->run() == FALSE){
			$data['salesinput']  = 'salesinput';
			$this->load->view('d_head',$data);
		}
		else{
			$this->load->model('salesteamm');
			$sales_data  = $this->salesteamm->salesteam_data_check();
			if($sales_data ){
				#the value is true then redirect to page?
				$data['salestable'] = 'sales_table';
				$data['salestablea']  = $this->salesteamm->sales_data_show_table();
				$this->load->view('d_head',$data);
							
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}
	}


	public function sales_table(){
		$data['salestable'] = 'sales_table';
		$data['salestablea']  = $this->salesteamm->sales_data_show_table();
		$this->load->view('d_head',$data);
	}

	public function sales_input(){
		$data['salesinput']  = 'salesinput';
		$this->load->view('d_head',$data);
	}
	#salesteam delete function add

	public function salesteam_delete($id=null){
		if($this->salesteamm->salesteam_data_delete($id) ){
				#table redirect function addd
			$data['salestable'] = 'sales_table';
			$data['salestablea']  = $this->salesteamm->sales_data_show_table();
			$this->load->view('d_head',$data);
		}
		else{
			$data['homepage'] = 'home';
			$this->load->view('d_head',$data);
		}

	}
	#sales team eidt function

	public function salesteam_edit($id=null){
		if($this->salesteamm->edit_salesteam_data($id) ){
			$data['infosalesteam'] = $this->salesteamm->edit_salesteam_data($id);
		}
			$data['Editsalesteam'] = 'editsalesteam';
			$this->load->view('d_head',$data);
		}

		#salesteam  form validation function 

		public function sales_editdata_check($id=null){
		$this->form_validation->set_rules('salesname', 'Salesname',  'trim|required|xss_clean|min_length[4]');
		$this->form_validation->set_rules('invoicet', 'Invoicet',  'trim|required|xss_clean');
		$this->form_validation->set_rules('invoicef', 'Invoicef',  'trim|required|xss_clean');
		$this->form_validation->set_rules('actualinvoiced', 'Actualinvoiced',  'trim|required|xss_clean');

		if($this->form_validation->run() == FALSE){
			if($this->salesteamm->edit_salesteam_data($id) ){
			$data['infosalesteam'] = $this->salesteamm->edit_salesteam_data($id);
		}
			$data['Editsalesteam'] = 'editsalesteam';
			$this->load->view('d_head',$data);
		}
		else{
			$this->load->model('salesteamm');
			$sales_update  = $this->salesteamm->salesteam_data_update_check($id);
			if($sales_update ){
				#the value is true then redirect to page?
				$data['salestable'] = 'sales_table';
				$data['messageuodate'] = 'Data update Successfully..';
				$data['salestablea']  = $this->salesteamm->sales_data_show_table();
				$this->load->view('d_head',$data);
							
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}
	}		

}