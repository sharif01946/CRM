<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staffm extends CI_Model {
	public function staff_data_check(){
		$smane 		= $this->input->post('sname');
		$email 		= $this->input->post('email');
		$password 	= $this->input->post('password');
		$pnumber 	= $this->input->post('pnumber');
		$starting 	= $this->input->post('starting');

		$datacheck  = array(

			'username' 	=> $smane, 
			'email' 	=> $email, 
			'password' 	=> $password, 
			'pnumber' 	=> $pnumber, 
			'starting' 	=> $starting, 

			);

		$datainsert = $this->db->insert('crmtable',$datacheck);

		if($datainsert){
			return true;
		}else{
			return false;
		}
	}
	public function staff_data_show(){
		$query = $this->db->get('crmtable');
		$results =$query->result();
		
		return $results;
	}
	public function staff_data_delete($id=null){
		$this->db->delete('crmtable', array('id' => $id) );

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}

}