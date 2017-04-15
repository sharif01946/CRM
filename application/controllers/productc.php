<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productc extends CI_Controller {
	#common file read data check
	public function __construct(){
		parent::__construct();

		#load customer_model model
		$this->load->model('customerm');
		$this->load->model('categorym');


		$this->load->model('productm');

		#check login data in the user
		if(!$this->customerm->is_user_logged_in()){
			redirect('logincontrol');
		}
		
	}
	public function index(){
		redirect('d_head');
	}

	#product team main function

	public function product_info_check(){
		$this->form_validation->set_rules('product', 'Product','trim|required|xss_clean|min_length[4]');
		$this->form_validation->set_rules('category', 'Category',  'trim|required|xss_clean');
		$this->form_validation->set_rules('ptype', 'Ptype',  'trim|required|xss_clean');		
		$this->form_validation->set_rules('quantityhand', 'Quantityhand', 'trim|required|xss_clean');
		$this->form_validation->set_rules('quantityavilable', 'Quantityavilable','trim|required|xss_clean');

		if($this->form_validation->run() == FALSE){
			$data['productinput']  = 'productinput';
			$this->load->view('d_head',$data);
		}
		else{
			$this->load->model('productm');
			$product_data  = $this->productm->product_data_check();
			if($product_data ){
				#the value is true then redirect to page?
				$data['productable'] = 'producttable';
				$data['productdata']  = $this->productm->produc_data_show_table();
				$this->load->view('d_head',$data);				
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}
	}

	public function product_table(){
		$data['productable'] = 'producttable';
		$data['productdata']  = $this->productm->produc_data_show_table();
		$this->load->view('d_head',$data);
	}

	public function product_input(){
		$data['productinput']  = 'productinput';
		$data['produtc']  = $this->categorym->category_data_show_table();
		$this->load->view('d_head',$data);
	}

	#product delete function add

	public function productc_delete($id=null){
		if($this->productm->product_data_delete($id) ){
				#table redirect function addd
			$data['productable'] = 'producttable';
			$data['productdata']  = $this->productm->produc_data_show_table();
			$this->load->view('d_head',$data);
		}
		else{
			$data['homepage'] = 'home';
			$this->load->view('d_head',$data);
		}

	}
	#product edit function add

	public function productc_edit($id=null){
		if($this->productm->edit_product_data($id) ){
			$data['infoproduct'] = $this->productm->edit_product_data($id);
		}
			$data['Editproduct'] = 'editproduct';
			$this->load->view('d_head',$data);
	}
	#product edit function add

	public function product_update_check($id=null){
		$this->form_validation->set_rules('product', 'Product','trim|required|xss_clean|min_length[4]');
		$this->form_validation->set_rules('category', 'Category',  'trim|required|xss_clean');
		$this->form_validation->set_rules('ptype', 'Ptype',  'trim|required|xss_clean');
		// $this->form_validation->set_rules('status', 'Status',  'trim|required|xss_clean');
		$this->form_validation->set_rules('quantityhand', 'Quantityhand', 'trim|required|xss_clean');
		$this->form_validation->set_rules('quantityavilable', 'Quantityavilable','trim|required|xss_clean');

		if($this->form_validation->run() == FALSE){
			if($this->productm->edit_product_data($id) ){
			$data['infoproduct'] = $this->productm->edit_product_data($id);
			}
			$data['Editproduct'] = 'editproduct';
			$this->load->view('d_head',$data);
		}
		else{
			$this->load->model('productm');
			$product_update  = $this->productm->product_data_update($id);
			if($product_update ){
				#the value is true then redirect to page?
				$data['productable'] = 'producttable';
				$data['messageuodate'] = 'Data update Successfully..';
				$data['productdata']  = $this->productm->produc_data_show_table();
				$this->load->view('d_head',$data);				
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}
	}
}