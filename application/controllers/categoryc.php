<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoryc extends CI_Controller {
	#common file read data check
	public function __construct(){
		parent::__construct();

		#load customer_model model
		$this->load->model('customerm');

		$this->load->model('categorym');

		#check login data in the user
		if(!$this->customerm->is_user_logged_in()){
			redirect('logincontrol');
		}
		
	}
	public function index(){
		redirect('d_head');
	}

	#category  main function

	public function category_info_check(){
		$this->form_validation->set_rules('category', 'Category','trim|required|xss_clean|min_length[4]');

		if($this->form_validation->run() == FALSE){
			$data['catedatainput']  = 'categoryinput';
			$this->load->view('d_head',$data);
		}
		else{
			$this->load->model('categorym');
			$product_data  = $this->categorym->category_data_check();
			if($product_data ){
				#the value is true then redirect to page?
				$data['categorytable'] = 'category_table';
				$data['categorydata']  = $this->categorym->category_data_show_table();
				$this->load->view('d_head',$data);			
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}
	}

	public function category_table(){
		$data['categorytable'] = 'category_table';
		$data['categorydata']  = $this->categorym->category_data_show_table();
		$this->load->view('d_head',$data);
	}

	public function category_input(){
		$data['catedatainput']  = 'categoryinput';
		$this->load->view('d_head',$data);
	}




	#categoey delete function add

	public function category_delete($id=null){
		if($this->categorym->category_data_delete($id) ){
			$data['categorytable'] = 'category_table';
			$data['categorydata']  = $this->categorym->category_data_show_table();
			$this->load->view('d_head',$data);
		}
		else{
			$data['homepage'] = 'home';
			$this->load->view('d_head',$data);
		}

	}
	#categoey Edit function add

	public function category_edit($id=null){
		if($this->categorym->edit_category_data($id) ){
			$data['infocategory'] = $this->categorym->edit_category_data($id);
		}
			$data['Editcategory'] = 'editcategory';
			$this->load->view('d_head',$data);
	}

	#edite category validation update

	public function editcategory_info_check($id=null){
		$this->form_validation->set_rules('category', 'Category','trim|required|xss_clean|min_length[4]');

		if($this->form_validation->run() == FALSE){
			if($this->categorym->edit_category_data($id) ){
			$data['infocategory'] = $this->categorym->edit_category_data($id);
		}
			$data['Editcategory']  = 'editcategory';
			$this->load->view('d_head',$data);
		}
		 else{
			$this->load->model('categorym');
			$update_data  = $this->categorym->category_update_data_check($id);
			if($update_data){
				#the value is true then redirect to page?

				$data['categorytable'] = 'category_table';
				$data['messageuodate'] = 'Data update Successfully..';
				$data['categorydata']  = $this->categorym->category_data_show_table();
				$this->load->view('d_head',$data);			
			}
		 else{
		 	#the value is false!!
			redirect('dashborad_control');	
		 	}
		}
	}
}