<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function user_data_match(){
		//echo "no errors for site";

		$username =  $this->input->post('username');
		$password =  $this->input->post('password');

		$databasecheck = array(
				'username'  => $username ,
				'password'  => $password ,
			);
		$datacollect = $this->db->get_where('crmtable', $databasecheck);
		if($datacollect->num_rows() == 1){
			$datainfo = array(

					'current_user_id' => $datacollect->row(0)->id,
					'current_ussername' => $username,
				);
			$this->session->set_userdata($datainfo);
			return TRUE;
		}else{

			return  FALSE;
		}
	}
	public function count_num_row(){
		$query = $this->db->get('sales');
		$total = $query->num_rows(); 
		return $total;

	}
	public function count_num_rowa(){
		$query = $this->db->get('leads');
		$total = $query->num_rows(); 
		return $total;

	}
	public function count_num_rowb(){
		$query = $this->db->get('customera');
		$total = $query->num_rows(); 
		return $total;

	}
	public function count_num_rowc(){
		$query = $this->db->get_where('quatation' ,array('status' =>"paid invoice"));
		$total = $query->num_rows(); 
		return $total;

	}
	public function count_num_rowd(){
		$query = $this->db->get('meting');
		$total = $query->num_rows(); 
		return $total;

	}
	public function count_num_rowe(){
		$query = $this->db->get_where('quatation' ,array('status' =>"unpaid invoice"));
		$total = $query->num_rows(); 
		return $total;

	}
	public function count_num_rowf(){
		$query = $this->db->get_where('quatation',array('status' =>"unpaid invoice"));
		$total = $query->num_rows(); 
		return $total;

	}
	public function count_num_rowg(){
		$query = $this->db->get('paymnet');
		$total = $query->num_rows(); 
		return $total;

	}
	public function count_num_rowh(){
		$query = $this->db->get('maincontact');
		$total = $query->num_rows(); 
		return $total;

	}
	public function is_user_logged_in(){
		return $this->session->userdata('current_user_id') !=FALSE;
	}

}