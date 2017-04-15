<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quatationc extends CI_Controller {
	#common file read data check
	public function __construct(){
		parent::__construct();

		#load customer_model model
		$this->load->model('customerm');

		$this->load->model('salesteamm');

		$this->load->model('quationm');

		$this->load->model('productm');

		#check login data in the user
		if(!$this->customerm->is_user_logged_in()){
			redirect('logincontrol');
		}
		
	}
	public function index(){
		redirect('d_head');
	}
	public function quatation_info_check(){
		$this->form_validation->set_rules('quotation', 'Quotation',  'trim|required|xss_clean');
		$this->form_validation->set_rules('date', 'Date',  'trim|required|xss_clean');
		$this->form_validation->set_rules('customer', 'Customer',  'trim|required|xss_clean');
		$this->form_validation->set_rules('salesperson', 'Salesperson',  'trim|required|xss_clean');
		$this->form_validation->set_rules('duedate', 'Duedate',  'trim|required|xss_clean');
		$this->form_validation->set_rules('status', 'Status',  'trim|required|xss_clean');
		$this->form_validation->set_rules('payment', 'Payment',  'trim|required|xss_clean');
		$this->form_validation->set_rules('product', 'Product',  'trim|required|xss_clean');
		$this->form_validation->set_rules('quantity', 'Quantity',  'trim|required|xss_clean');
		$this->form_validation->set_rules('unitprice', 'Unitprice',  'trim|required|xss_clean');
		$this->form_validation->set_rules('taxes', 'Taxes',  'trim|required|xss_clean');
		$this->form_validation->set_rules('totalprice', 'Totalprice',  'trim|required|xss_clean');

		if($this->form_validation->run() == FALSE){
			$data['quatationdata'] = 'quationinput';
			$this->load->view('d_head',$data);
		}
		else{
			$this->load->model('quationm');
			$quotation_data  = $this->quationm->quotation_data_check();
			if($quotation_data ){
				#the value is true then redirect to page?
				$data['quatatable'] = 'quatationtable';
				$data['quatetablea']  = $this->quationm->quotation_data_show_table();
				$this->load->view('d_head',$data);
							
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}
	}

		#show data in sales table load
	public function quatation_table(){
		$data['quatatable'] = 'quatationtable';
		$data['quatetablea']  = $this->quationm->quotation_data_show_table();
		$this->load->view('d_head',$data);
	}
		#load sale input table
	public function quatationc_input(){

		$data['quatationdata'] = 'quationinput';
		$data['quotetionpro']  = $this->productm->produc_data_show_table();
		$data['contactdata']  =  $this->customerm->input_data_read();
		$data['salequat']  = $this->salesteamm->sales_data_show_table();
		$this->load->view('d_head',$data);
	}

	#qoaation delete function add

	public function quatation_delete($id=null){
		if($this->quationm->quation_data_delete($id) ){
				#table redirect function addd
			$data['quatatable'] = 'quatationtable';
			$data['quatetablea']  = $this->quationm->quotation_data_show_table();
			$this->load->view('d_head',$data);
		}
		else{
			$data['homepage'] = 'home';
			$this->load->view('d_head',$data);
		}

	}
	#quatetion edit function create

	public function quatation_edit($id=null){
		if($this->quationm->edit_qutetion_data($id) ){
			$data['infoquatetion'] = $this->quationm->edit_qutetion_data($id);
		}
			$data['Editqutetion'] = 'editqutetion';
			$this->load->view('d_head',$data);
	}
	#qutetion form validation update
	public function quatation_update_check($id=null){
		$this->form_validation->set_rules('quotation', 'Quotation',  'trim|required|xss_clean');
		$this->form_validation->set_rules('date', 'Date',  'trim|required|xss_clean');
		$this->form_validation->set_rules('customer', 'Customer',  'trim|required|xss_clean');
		$this->form_validation->set_rules('salesperson', 'Salesperson',  'trim|required|xss_clean');
		$this->form_validation->set_rules('status', 'Status',  'trim|required|xss_clean');
		$this->form_validation->set_rules('product', 'Product',  'trim|required|xss_clean');
		$this->form_validation->set_rules('quantity', 'Quantity',  'trim|required|xss_clean');
		$this->form_validation->set_rules('unitprice', 'Unitprice',  'trim|required|xss_clean');
		$this->form_validation->set_rules('taxes', 'Taxes',  'trim|required|xss_clean');
		$this->form_validation->set_rules('totalprice', 'Totalprice',  'trim|required|xss_clean');

		if($this->form_validation->run() == FALSE){
			if($this->quationm->edit_qutetion_data($id) ){
			$data['infoquatetion'] = $this->quationm->edit_qutetion_data($id);
			}
			$data['Editqutetion'] = 'editqutetion';
			$this->load->view('d_head',$data);
		}
		else{
			$this->load->model('quationm');
			$quotation_data  = $this->quationm->quotation_update_check($id);
			if($quotation_data ){
				#the value is true then redirect to page?
				$data['quatatable'] = 'quatationtable';
				$data['messageuodate'] = 'Data update Successfully..';
				$data['quatetablea']  = $this->quationm->quotation_data_show_table();
				$this->load->view('d_head',$data);
							
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}
	}
	public function quotation_confirm($id){
		$this->db->where('id',$id);
		$update = array(
				'status' =>"unpaid invoice",	
			);
		$query = $this->db->update('quatation', $update );
		
			redirect('quatationc/quatation_table');
		}
}
