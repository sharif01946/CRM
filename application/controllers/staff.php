<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
	#common file read data check
	public function __construct(){
		parent::__construct();

		#load customer_model model
		$this->load->model('customerm');
		$this->load->model('staffm');

		#check login data in the user
		if(!$this->customerm->is_user_logged_in()){
			redirect('logincontrol');
		}
		
	}
	public function index(){
		redirect('d_head');
	}
	public function add(){
		// var_dump($this->session->current_ussername != 'shariful');
		if ($this->session->current_ussername != "shariful") {				
				redirect('dashborad_control');
			}
		$data['stafftable'] = 'staff_tbl';
		$data['staffdata']  = $this->staffm->staff_data_show();
		$this->load->view('d_head',$data);
	}

	public function staff_in(){
		$data['staffin'] = 'staff_in';
		$this->load->view('d_head',$data);
	}

		public function staff_action(){
			$this->form_validation->set_rules('sname', 'Sname',  'trim|required|xss_clean|min_length[5]');
			$this->form_validation->set_rules('email', 'Email',  'trim|required|xss_clean|valid_email|is_unique[crmtable.email]');
			$this->form_validation->set_rules('pnumber', 'Pnumber',  'trim|required|xss_clean|min_length[11]');
			$this->form_validation->set_rules('password', 'Password',  'trim|required|xss_clean|min_length[6]');
			$this->form_validation->set_rules('starting', 'Starting',  'trim|required|xss_clean');

		if($this->form_validation->run() == FALSE){
				#if the condition is falsethen the error this page show!!
				$data['staffin'] = 'staff_in';
				$this->load->view('d_head',$data);
		}
		else{
			$staff_data = $this->staffm->staff_data_check();

			if($staff_data ){
				$data['stafftable'] = 'staff_tbl';
				$data['messageuodate'] = 'Staff Add Successfully..';
				$data['staffdata']  = $this->staffm->staff_data_show();
				$this->load->view('d_head',$data);
			}
			else{

				$data['staffin'] = 'staff_in';
				$this->load->view('d_head',$data);
			}
		}
	}
	public function staff_delete($id=null){
		if($this->staffm->staff_data_delete($id) ){
			$data['stafftable'] = 'staff_tbl';
			$data['staffdata']  = $this->staffm->staff_data_show();
			$this->load->view('d_head',$data);
		}
		else{
			$data['homepage'] = 'home';
			$this->load->view('d_head',$data);
		}

	}
}