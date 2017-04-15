<!--
<?php
	#categoey delete function add

	public function quatation_delete($id=null){
		if($this->modelname->category_data_delete($id) ){
				#table redirect function addd
		}
		else{
			$data['homepage'] = 'home';
			$this->load->view('d_head',$data);
		}

	}

	#dlete function add model
	public function category_data_delete($id=null){
		$this->db->delete('database-table', array('id' => $id) );

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}


	onclick=" return confirm('Are you sure delete this data');"
	id="<?php echo $cdata->id; ?>"
	href="<?php echo base_url(); ?>categoryc/category_delete/<?php echo $cdata->id; ?>" 
                                 






		edit and update function


href="<?php echo base_url(); ?>categoryc/category_edit/<?php echo $cdata->id; ?>"

#categoey Edit function add controller

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
	#edit data function  modles

	public function edit_category_data($id=null){
		$updatecheck = array(

				'id' => $id,
			);
		$query = $this->db->get_where('categorya', $updatecheck );
		if($query->num_rows() ==1){
			return $query->result();
		}
		else{
			return FALSE;
		}
	}

	#edit validation  caheck data function 

	public function category_update_data_check($id=null){
		$category 	=  $this->input->post('category');
		$update = array(

				'category'  =>  $category,
			);
		$this->db->where('id',$id);
		$query = $this->db->update('categorya', $update );
		if($this->db->affected_rows()){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
	$data['messageuodate'] = 'Data update Successfully..';
				<?php
                    if(isset($messageuodate)):
                  ?>
                    <div class="alert alert-success">
                      <?php echo $messageuodate;?>
                    </div>

                <?php endif; ?>




					<?php
                        if($infocategory) :
                        foreach ($infocategory as $catedatabase) :
                      ?>

					<?php
                        endforeach;
                      endif;
                    ?>


?>


