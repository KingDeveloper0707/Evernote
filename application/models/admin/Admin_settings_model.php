<?php
	class Admin_settings_model extends CI_Model{

		//--------------------------------------------------------------------
		public function get_user_detail(){
			$id = $this->session->userdata('admin_id');
			$query = $this->db->get_where('ci_users', array('id' => $id));
			return $result = $query->row_array();
		}
		//--------------------------------------------------------------------
		public function register($data){
			$this->db->insert('ci_users', $data);
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
			
			$array = array('user_id' => $id);
			$this->db->where($array);
			$this->db->order_by('created_at', 'DESC');
			$query = $this->db->get('ci_templates');
			return $result = $query->result_array();
		}

		// get all notes with id for server-side datatable processing (ajax based)
		public function get_all_notes(){
			
			$query = $this->db->get('ci_templates');
			return $result = $query->result_array();
		}

		//Get all users
		public function get_info_users() {
		
			$this->db->select(' ci_users.id, ci_users.username, ci_users.email, ci_users.company, ci_users.position_title, ci_users.is_active, ci_users.created_at, COUNT(ci_templates.user_id) AS note_counts, MAX(ci_templates.updated_at) AS note_updated');
			$this->db->from('ci_users');
			$this->db->join('ci_templates', 'ci_users.id = ci_templates.user_id', 'left');
			$this->db->order_by('ci_templates.id', 'DESC');
			$this->db->group_by('ci_users.id');
			
			$query = $this->db->get();
			return $result = $query->result_array();
		}
		

		//get all notes counts 
		public function get_all_counts_notes(){
			
			$counts = $this->db->count_all_results('ci_templates');
			return $counts;
		}

		//get all tags counts
		public function get_all_counts_tags() {
			$counts = $this->db->count_all_results('ci_tags');
			return $counts;
		}

		//get all users counts
		public function get_all_counts_users() {
			$counts = $this->db->count_all_results('ci_users');
			return $counts;
		}

        //Get Tags info 
		public function get_tags_info_by_id(){
			
						
			$query = $this->db->get('ci_tags');
			
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

		//Delete tag
		public function del_tag($ids){
			
			$this->db->where('id',$ids);
			$this->db->delete('ci_tags');

			return true;
	 
			

			//$this->session->set_flashdata('msg', 'Notes has been deleted successfully!');
			//redirect(base_url('admin/users'));
		}

		//Delete user
		public function del_user($id) {
			$this->db->where('id',$id);
			$this->db->delete('ci_users');

			return true;
	 
		}

		//Rename tags
		public function rename_tags($id, $data) {
			
			$this->db->where('id', $id);
			$this->db->update('ci_tags', $data);
			return true;
		}

		//active/inactive notes
		public function active_inactive_notes($id, $data) {
			

			$this->db->where('id', $id);
			$this->db->update('ci_templates', $data);
			return true;

		}

		//active/inactive users
		public function active_inactive_users($id, $data) {
			

			$this->db->where('id', $id);
			$this->db->update('ci_users', $data);
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

		//Get current user name
		public function get_current_username($id){
			
			$this->db->select('username');
			$this->db->where('id', $id);
			$query = $this->db->get('ci_users');
		
			return $result = $query->row();
		}

		//Insert notes   return $this->db->insert('news', $data);
		public function insert_template($data){
			$this->db->insert('ci_templates', $data);
			$insert_id = $this->db->insert_id();
			return $insert_id;
		}

		//Update Notes table
		public function edit_template($data, $id){
			$this->db->where('id', $id);
			$this->db->update('ci_templates', $data);
			return true;
		}

		

	}

?>