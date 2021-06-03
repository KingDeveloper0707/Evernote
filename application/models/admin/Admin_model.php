<?php
	class Admin_model extends CI_Model{

		//--------------------------------------------------------------------
		public function get_user_detail(){
			$id = $this->session->userdata('admin_id');
			$query = $this->db->get_where('ci_users', array('id' => $id));
			return $result = $query->row_array();
		}
		//--------------------------------------------------------------------
		public function update_user($data){
			$id = $this->session->userdata('admin_id');
			$this->db->where('id', $id);
			$this->db->update('ci_users', $data);
			return true;
		}
		//--------------------------------------------------------------------
		public function change_pwd($data, $id){
			$this->db->where('id', $id);
			$this->db->update('ci_users', $data);
			return true;
		}

		// get all notes with id for server-side datatable processing (ajax based)
		public function get_all_notes_by_id($id){
			
			$array = array('user_id' => $id, 'is_active' => 1);
			$this->db->where($array);
			$this->db->order_by('created_at', 'DESC');
			$query = $this->db->get('ci_templates');
			return $result = $query->result_array();
		}

		//get my notes counts 
		public function get_my_counts_notes_by_id($id){
			
			$array = array('user_id' => $id, 'is_active' => 1);
			$this->db->where($array);
			$this->db->order_by('created_at', 'DESC');			
			$counts = $this->db->count_all_results('ci_templates');
			return $counts;
		}


		//Delete Notes
		public function del($ids){
			
			$this->db->where_in('id', explode(",", $ids));
			$this->db->delete('ci_templates');

			return true;
	 
			

			//$this->session->set_flashdata('msg', 'Notes has been deleted successfully!');
			//redirect(base_url('admin/users'));
		}


			//Delete Notes
			public function del_user($ids){
			
				$this->db->where_in('id', explode(",", $ids));
				$this->db->delete('ci_users');
	
				return true;
		 
				
	
				//$this->session->set_flashdata('msg', 'Notes has been deleted successfully!');
				//redirect(base_url('admin/users'));
			}

			  //Get Tags info 
		public function get_tags_info_by_id(){
			
						
			$query = $this->db->get('ci_tags');
			
			return $result = $query->result_array();
		}

		// get last notes with id for server-side datatable processing (ajax based)
		public function get_last_notes_by_id($id){
			
			$array = array('user_id' => $id, 'is_active' => 1);
			$this->db->where($array);
			$this->db->order_by('created_at', 'DESC');
			$query = $this->db->get('ci_templates');
			$ret = $query->row();
			return $ret;
		}

		// get user info by id
		public function get_user_info_by_id($id){
			
			$this->db->where('id', $id);			
			$query = $this->db->get('ci_users');
			
			return $result = $query->row_array();
		}

		//Get comments info 
		public function get_comments_info(){
			
						
			//$query = $this->db->get('ci_comments');
			
			//return $result = $query->result_array();

			
			$this->db->select('ci_comments.id, ci_comments.content, ci_comments.note_id, ci_comments.created_at, ci_comments.user_id, ci_users.username');
			$this->db->from('ci_comments');
			
			$this->db->join('ci_users', 'ci_comments.user_id = ci_users.id', 'left');
			$this->db->order_by('ci_comments.id', 'ASC');
			$this->db->group_by('ci_comments.id');
			
			$query = $this->db->get();
			return $result = $query->result_array();
		}

		//Update Notes table
		public function edit_template($data, $id){
			$this->db->where('id', $id);
			$this->db->update('ci_templates', $data);
			return true;
		}
	


		//Get current tagnames
		public function get_current_tagname($id){
			
			$this->db->select('tags');
			$this->db->where('id', $id);
			$query = $this->db->get('ci_templates');
			return $result = $query->row();
		}


		//add tagss table
		public function insert_tags($data){
			$this->db->insert('ci_tags', $data);
			$new_id = $this->db->insert_id();
			return $new_id;
		}

		//Get current user name
		public function get_current_username($id){
			
			$this->db->select('username');
			$this->db->where('id', $id);
			$query = $this->db->get('ci_users');
		
			return $result = $query->row();
		}
			

		//Get last acitivity
		public function get_last_login($id) {
			$array = array('user_id' => $id, 'activity_id' => 4);
			$this->db->where($array);
			$this->db->order_by('created_at', 'DESC');			
			$query = $this->db->get('ci_activity_log');
			return $result = $query->row_array();
		}


		//get my notes delete counts 
		public function get_my_counts_delete_notes_by_id($id){
		
			$array = array('user_id' => $id, 'activity_id' => 23);
			$this->db->where($array);
			$this->db->order_by('created_at', 'DESC');			
			$counts = $this->db->count_all_results('ci_activity_log');
			return $counts;
		}

		//update photo
		public function change_photo($data){
			$id = $this->session->userdata('admin_id');
			$this->db->where('id', $id);
			$this->db->update('ci_users', $data);
			return true;
		
		}

		//Disable profile
		public function disable_profile($data) {
			
			$id = $this->session->userdata('admin_id');
			$this->db->where('id', $id);
			$this->db->update('ci_users', $data);
			return true;
		}


		//insert comments 
		public function create_comment($data) {
			$this->db->insert('ci_comments', $data);
			$insert_id = $this->db->insert_id();
			return $insert_id;
		}

		//Delete Notes
		public function del_comment($ids){
		
			$this->db->where_in('id', explode(",", $ids));
			$this->db->delete('ci_comments');

			return true;
		
			

			//$this->session->set_flashdata('msg', 'Notes has been deleted successfully!');
			//redirect(base_url('admin/users'));
		}


	

	}

?>