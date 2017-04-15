<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashborad_control extends CI_Controller {
	public function index(){
		$this->load->model('login_model');
		if($this->login_model->is_user_logged_in()){
			$data['homepage'] = 'home';
			$data['numrow']  = $this->login_model->count_num_row();
			$data['numrowa']  = $this->login_model->count_num_rowa();
			$data['numrowb']  = $this->login_model->count_num_rowb();
			$data['numrowc']  = $this->login_model->count_num_rowc();
			$data['numrowd']  = $this->login_model->count_num_rowd();
			$data['numrowe']  = $this->login_model->count_num_rowe();
			$data['numrowf']  = $this->login_model->count_num_rowf();
			$data['numrowg']  = $this->login_model->count_num_rowg();
			$data['numrowh']  = $this->login_model->count_num_rowh();

			

			$this->load->view('d_head',$data);
		}
		else{
			redirect('logincontrol');
		}
		
	}
	
}