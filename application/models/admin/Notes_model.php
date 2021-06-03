<?php
	class Notes_model extends CI_Model{
	
		//---------------------------------------------------
		// get all notes with id for server-side datatable processing (ajax based)
		public function get_all_notes_by_id($id){
			
			$array = array('user_id' => $id, 'is_active' => 1);
			$this->db->where($array);
			$this->db->order_by('created_at', 'DESC');
			$query = $this->db->get('ci_templates');
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

		//counts of notes by id
		public function get_counts_notes_by_user($id){
			$array = array('user_id' => $id);
			$this->db->where($array);
			$counts = $this->db->count_all_results('ci_templates');
			return $counts;
		}

		// get user info by id
		public function get_user_info_by_id($id){
			
			$this->db->where('id', $id);			
			$query = $this->db->get('ci_users');
			
			return $result = $query->row_array();
		}

		//Get Tags info 
		public function get_tags_info_by_id(){
			
						
			$query = $this->db->get('ci_tags');
			
			return $result = $query->result_array();
		}



		// Get user detial by ID
		public function get_template($id){
			$query = $this->db->get_where('ci_templates', array('id' => $id));
			return $result = $query->row_array();
		}


		//Update Notes table
		public function edit_template($data, $id){
			$this->db->where('id', $id);
			$this->db->update('ci_templates', $data);
			return true;
		}


		//add tagss table
		public function insert_tags($data){
			$this->db->insert('ci_tags', $data);
			$new_id = $this->db->insert_id();
			return $new_id;
		}

		//Get current tagnames
		public function get_current_tagname($id){
			
			$this->db->select('tags');
			$this->db->where('id', $id);
			$query = $this->db->get('ci_templates');
			return $result = $query->row();
		}

		//Insert notes   return $this->db->insert('news', $data);
		public function insert_template($data){
			$this->db->insert('ci_templates', $data);
			$insert_id = $this->db->insert_id();
			return $insert_id;
		}

		//insert comments 
		public function create_comment($data) {
			$this->db->insert('ci_comments', $data);
			$insert_id = $this->db->insert_id();
			return $insert_id;
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

		//Delete Notes
		public function del($ids){
			
			$this->db->where_in('id', explode(",", $ids));
			$this->db->delete('ci_templates');

			return true;
	 
			

			//$this->session->set_flashdata('msg', 'Notes has been deleted successfully!');
			//redirect(base_url('admin/users'));
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
