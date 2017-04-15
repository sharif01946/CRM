<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class paymentc extends CI_Controller {
	#common file read data check
	public function __construct(){
		parent::__construct();

		#load customer_model model
		$this->load->model('customerm');

		$this->load->model('paymentm');

		#check login data in the user
		if(!$this->customerm->is_user_logged_in()){
			redirect('logincontrol');
		}
		
	}
	public function index(){
		redirect('d_head');
	}

	#payment team main function

	public function payment_info_check(){
		$this->form_validation->set_rules('invoice', 'Invoice','trim|required|xss_clean');
		$this->form_validation->set_rules('date', 'Date',  'trim|required|xss_clean');
		$this->form_validation->set_rules('paymentmethod', 'Paymentmethod',  'trim|required|xss_clean');
		$this->form_validation->set_rules('amount', 'Amount',  'trim|required|xss_clean');

		if($this->form_validation->run() == FALSE){
			$data['paymentinput']  = 'paymentinput';
			$this->load->view('d_head',$data);
		}
		else{
			$this->load->model('paymentm');
			$payment_method  = $this->paymentm->payment_data_check();
			if($payment_method ){
				#the value is true then redirect to page?
				$data['paymenttabl']  = 'paymnettable';
				$data['messagdate'] = 'Payment receive Successfully..';
				$data['paymnetdata']  = $this->paymentm->paymnet_data_show_table();
				$this->load->view('d_head',$data);
							
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}
	}
	#payment input function add
	public function payment_input(){
		$data['paymentinput']  = 'paymentinput';
		$this->load->view('d_head',$data);
	}
	#payment table function add
	public function payment_table(){
		$data['paymenttabl']  = 'paymnettable';
		$data['paymnetdata']  = $this->paymentm->paymnet_data_show_table();
		$this->load->view('d_head',$data);
	}

	#categoey delete function add

	public function payment_delete($id=null){
		if($this->paymentm->payment_data_delete($id) ){
				#table redirect function addd
			$data['paymenttabl']  = 'paymnettable';
			$data['paymnetdata']  = $this->paymentm->paymnet_data_show_table();
			$this->load->view('d_head',$data);
		}
		else{
			$data['homepage'] = 'home';
			$this->load->view('d_head',$data);
		}

	}


	
}