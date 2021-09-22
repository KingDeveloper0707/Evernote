
<?php
	class Find_notes_model extends CI_Model{
	
		//---------------------------------------------------
		// get all notes with id for server-side datatable processing (ajax based)
		public function get_all_notes(){
			/*
			//$array = array('is_active' => 1);
			$this->db->where('is_active', 1);	
			$this->db->order_by('created_at', 'DESC');
			$query = $this->db->get('ci_templates');
			return $result = $query->result_array();
			*/

			$this->db->select('ci_templates.id, ci_templates.subject, ci_templates.content, ci_templates.created_at, ci_templates.updated_at, ci_templates.user_id, ci_templates.tags, ci_templates.companies, ci_templates.notetypes, ci_users.username, ci_users.position_title, ci_users.company, ci_users.expertise, ci_users.is_admin');
			$this->db->from('ci_templates');
			$this->db->where('ci_templates.is_active', 1);	
			$this->db->join('ci_users', 'ci_templates.user_id = ci_users.id', 'left');
			$this->db->order_by('ci_templates.id', 'DESC');
			$this->db->group_by('ci_templates.id');
			
			$query = $this->db->get();
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

		//Get current user name
		public function get_current_username($id){
			
			$this->db->select('username');
			$this->db->where('id', $id);
			$query = $this->db->get('ci_users');
		
			return $result = $query->row();
		}


		//counts of notes by id
		public function get_counts_notes_by_user(){
			$array = array('is_active' => '1');
			$this->db->where($array);
			$counts = $this->db->count_all_results('ci_templates');
			return $counts;
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

		//insert comments 
		public function create_comment($data) {
			$this->db->insert('ci_comments', $data);
			$insert_id = $this->db->insert_id();
			return $insert_id;
		}


		// get user info by id
		public function get_user_info_by_id($id){
			
			$this->db->where('id', $id);			
			$query = $this->db->get('ci_users');
			
			return $result = $query->row_array();
		}

		// get Note info by id
		public function get_note_info_by_id($id){
			
			$this->db->where('id', $id);			
			$query = $this->db->get('ci_templates');
			
			return $result = $query->row_array();
		}

		//Get Tags info 
		public function get_tags_info_by_id(){
			
						
			$query = $this->db->get('ci_tags');
			
			return $result = $query->result_array();
		}

		//Get Companies info 
		public function get_companies_info_by_id(){
			
						
			$query = $this->db->get('ci_companies');
			
			return $result = $query->result_array();
		}


		//Get Note types info 
		public function get_notetypes_info_by_id(){
			
						
			$query = $this->db->get('ci_notetypes');
			
			return $result = $query->result_array();
		}

		//Get Users info 
		public function get_users_info(){
					
								
			$query = $this->db->get('ci_users');
			
			return $result = $query->result_array();
		}

		//Get Company info
		public function get_companys_info() {

			$this->db->distinct();

			$this->db->select('company');
			
			$query = $this->db->get('ci_users');
			

			return $result = $query->result_array();
		}

		//Get Expertise info
		public function get_expertise_info() {

			$this->db->distinct();

			$this->db->select('expertise');
			
			$query = $this->db->get('ci_users');
			

			return $result = $query->result_array();
		}


		//Get Position info
		public function get_position_info() {

			$this->db->distinct();

			$this->db->select('position_title');
			
			$query = $this->db->get('ci_users');
			

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


		//add comapnies table
		public function insert_companies($data){
			$this->db->insert('ci_companies', $data);
			$new_id = $this->db->insert_id();
			return $new_id;
		}


		//add comapnies table
		public function insert_notetypes($data){
			$this->db->insert('ci_notetypes', $data);
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

		//Get current companynames
		public function get_current_companyname($id){
			
			$this->db->select('companies');
			$this->db->where('id', $id);
			$query = $this->db->get('ci_templates');
			return $result = $query->row();
		}

		//Get current notetypenames
		public function get_current_notetypename($id){
			
			$this->db->select('notetypes');
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

