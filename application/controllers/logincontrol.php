<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logincontrol extends CI_Controller {

	public function index(){

		$this->load->model('login_model');

		if($this->login_model->is_user_logged_in()){
			redirect('dashborad_control');
		}
		else{
			$this->load->view('loginview');
		}

		
	}
	public function user_check_login_data(){
		$this->form_validation->set_rules('username',   'User Name',  'trim|xss_clean|min_length[4]');
		$this->form_validation->set_rules('password',    'Password',   'trim|xss_clean|min_length[4]');

		if($this->form_validation->run() ==  FALSE){
			$this->load->view('loginview');
		}else{
			$this->load->model('login_model');
			$result =  $this->login_model->user_data_match();
			if($result){
				redirect('dashborad_control');
			}else{
				$data['login_error'] = 'Username  or password is invalid';
				$this->load->view('loginview',$data);
			} 
		}
	}
	public function logout(){
		$this->session->unset_userdata('current_user_id');
		$this->session->unset_userdata('current_ussername');

		$this->session->sess_destroy();
		redirect('logincontrol');
	}
}