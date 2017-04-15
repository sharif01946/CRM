<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salesorderc extends CI_Controller {
	#common file read data check
	public function __construct(){
		parent::__construct();

		#load customer_model model
		$this->load->model('customerm');

		$this->load->model('salesorderm');

		#check login data in the user
		if(!$this->customerm->is_user_logged_in()){
			redirect('logincontrol');
		}
		
	}
	public function index(){
		redirect('d_head');
	}
		#show data in sales table load
	public function salesorder_table(){
		$data['salestable'] = 'salesordertable';
		$data['salesdata']  = $this->salesorderm->salesorde_data_show_table();
		$this->load->view('d_head',$data);
	}
		#load sale inpt table

	#salesorder delete function add

	public function salesorder_delete($id=null){
		if($this->salesorderm->salesorder_data_delete($id) ){
				#table redirect function addd
			$data['salestable'] = 'salesordertable';
			$data['salesdata']  = $this->salesorderm->salesorde_data_show_table();
			$this->load->view('d_head',$data);
		}
		else{
			$data['homepage'] = 'home';
			$this->load->view('d_head',$data);
		}

	}
	#salesorder Edit function add controller

	public function salesorder_edit($id=null){
		if($this->salesorderm->edit_quatetion_data($id) ){
			$data['infoquatetion'] = $this->salesorderm->edit_quatetion_data($id);
		}
			$data['Editsalesorder'] = 'editsalesorder';
			$this->load->view('d_head',$data);
	}

	#qutetion form validation update
	public function salesorder_update_check($id=null){
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
			if($this->salesorderm->edit_quatetion_data($id) ){
			$data['infoquatetion'] = $this->salesorderm->edit_quatetion_data($id);
			}
			$data['Editsalesorder'] = 'editsalesorder';
			$this->load->view('d_head',$data);
		}
		else{
			$this->load->model('salesorderm');
			$salesorder_data  = $this->salesorderm->salesorder_update_check($id);
			if($salesorder_data ){
				#the value is true then redirect to page?
				$data['salestable'] = 'salesordertable';
				$data['messageuodate'] = 'Data update Successfully..';
				$data['salesdata']  = $this->salesorderm->salesorde_data_show_table();
				$this->load->view('d_head',$data);
							
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}
	}

}
