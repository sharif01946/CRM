<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoicec extends CI_Controller {
	#common file read data check
	public function __construct(){
		parent::__construct();

		#load customer_model model
		$this->load->model('customerm');

		$this->load->model('invoicem');

		#check login data in the user
		if(!$this->customerm->is_user_logged_in()){
			redirect('logincontrol');
		}
		
	}
	public function index(){
		redirect('d_head');
	}

	// public function invoice_info_check(){
	// 	$this->form_validation->set_rules('invoice', 'invoice',  'trim|required|xss_clean');
	// 	$this->form_validation->set_rules('date', 'Date',  'trim|required|xss_clean');
	// 	$this->form_validation->set_rules('customer', 'Customer',  'trim|required|xss_clean');
	// 	$this->form_validation->set_rules('ddate', 'Ddate',  'trim|required|xss_clean');
	// 	$this->form_validation->set_rules('totalamount', 'Totalamount',  'trim|required|xss_clean');
	// 	$this->form_validation->set_rules('status', 'Status',  'trim|required|xss_clean');
	// 	$this->form_validation->set_rules('product', 'Product',  'trim|required|xss_clean');
	// 	$this->form_validation->set_rules('quantity', 'Quantity',  'trim|required|xss_clean');
	// 	$this->form_validation->set_rules('totalprice', 'Totalprice',  'trim|required|xss_clean');
	// 	$this->form_validation->set_rules('payments', 'Payments',  'trim|required|xss_clean');

	// 	if($this->form_validation->run() == FALSE){
	// 		$data['invoiceinput'] = 'invoiceinput';
	// 		$this->load->view('d_head',$data);
	// 	}
	// 	else{
	// 		$this->load->model('invoicem');
	// 		$invoice_data  = $this->invoicem->invoice_data_check();
	// 		if($invoice_data ){
	// 			#the value is true then redirect to page?
	// 			$data['invoicetable'] = 'invoicetable';
	// 			$data['invoictablea']  = $this->invoicem->invoice_data_show_table();
	// 			$this->load->view('d_head',$data);				
	// 		}
	// 	 else{
	// 	 	#the value is false!!
	// 		redirect('dashborad_control');	
	// 	 	}
	// 	}
	// }
	

		#show data in invoice table load
	public function invoice_table(){
		$data['invoicetable'] = 'invoicetable';
		$data['invoictablea']  = $this->invoicem->invoice_data_show_table();
		$this->load->view('d_head',$data);
	}
	#invoice delete function add

	public function invoice_delete($id=null){
		if($this->invoicem->invoice_data_delete($id) ){
				#table redirect function addd
			$data['invoicetable'] = 'invoicetable';
			$data['invoictablea']  = $this->invoicem->invoice_data_show_table();
			$this->load->view('d_head',$data);
		}
		else{
			$data['homepage'] = 'home';
			$this->load->view('d_head',$data);
		}

	}

	#invoice Edit function add controller

	public function invoice_edit($id=null){
		if($this->invoicem->edit_invoice_data($id) ){
			$data['infoinvoice'] = $this->invoicem->edit_invoice_data($id);
			$data['Editivoice'] = 'editinvoice';
			$this->load->view('d_head',$data);
		}else{
			redirect("invoicec/invoice_table");
		}
		
	}

	#invoice form validation update
	public function invoice_update_check($id=null){
		$this->form_validation->set_rules('quotation', 'Quotation',  'trim|required|xss_clean');
		$this->form_validation->set_rules('date', 'Date',  'trim|required|xss_clean');
		$this->form_validation->set_rules('customer', 'Customer',  'trim|required|xss_clean');
		$this->form_validation->set_rules('duedate', 'Duedate',  'trim|required|xss_clean');
		$this->form_validation->set_rules('salesperson', 'Salesperson',  'trim|required|xss_clean');
		$this->form_validation->set_rules('status', 'Status',  'trim|required|xss_clean');
		$this->form_validation->set_rules('payment', 'Payment',  'trim|required|xss_clean');
		$this->form_validation->set_rules('product', 'Product',  'trim|required|xss_clean');
		$this->form_validation->set_rules('quantity', 'Quantity',  'trim|required|xss_clean');
		$this->form_validation->set_rules('unitprice', 'Unitprice',  'trim|required|xss_clean');
		$this->form_validation->set_rules('taxes', 'Taxes',  'trim|required|xss_clean');
		$this->form_validation->set_rules('totalprice', 'Totalprice',  'trim|required|xss_clean');

		$invoice = $this->invoicem->edit_invoice_data($id);
		
		if($this->form_validation->run() == FALSE){
			if($this->invoicem->edit_invoice_data($id) ){
			}
			$data['infoinvoice'] = $invoice;
			$data['Editivoice'] = 'editinvoice';
			$this->load->view('d_head',$data);
		}else{
			$invoice_update  = $this->invoicem->invoice_update_check($id);
			// $invoice_update = true;
			// $invoices = $this->invoicem->edit_invoice_data($id);
			// $invoice = $invoices[0];

			 // $mailto = "shariful@gmail.com";
			 // mail($mailto, "inoice paid Successfully","Inovie paid Successfully");
			if($invoice_update ){
				mail($invoice[0]->email, "inoice paid Successfully",
					"Dear customer,
					At first take my salam! your invoice payment Successfully received 
					Tahnk you !!!!
					Golobal @ INC ");
				#the value is true then redirect to page?
				// $data['invoicetable'] = 'invoicetable';
				// $data['messageuodate'] = 'Data update Successfully..';
				// $data['invoictablea']  = $this->invoicem->invoice_data_show_table();
				// $this->load->view('d_head',$data);
				$data['paymentinput']  = 'paymentinput';
				$data['infoinvoice'] = $invoice;
				$data['messageuodate'] = 'Confirmation  Message  Successfully. send to'." " .$invoice[0]->email;
				$this->load->view('d_head',$data);
				// echo "<pre>";
				// print_r($invoice);
				// echo "</pre>";
							
			}else{
				redirect('dashborad_control');	
		 	}
		}
	}


}
