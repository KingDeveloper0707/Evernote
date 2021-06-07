<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_settings extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('admin/admin_settings_model', 'admin_settings_model');
		$this->load->model('activity_model','activity_model');
	}
	//-------------------------------------------------------------------------
	public function index(){
		if($this->input->post('submit')){

			$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|is_unique[ci_users.email]|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
			$this->form_validation->set_rules('confirm_pwd', 'Password Confirmation', 'trim|required|matches[password]');

			if ($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('error', 'Profile has some problems!');
					redirect(base_url('admin/admin_settings'), 'refresh');
			}else{
				$data = array(
					'username' => $this->input->post('username'),
					'position_title' => $this->input->post('position_title'),
					'company' => $this->input->post('company'),
					'email' => $this->input->post('email'),
					'expertise' => $this->input->post('expertise'),
					'bio' => $this->input->post('bio'),
					'password' =>  password_hash($this->input->post('password'), PASSWORD_BCRYPT),
					'is_active' => 1,
					'is_verify' => 1,				
					'last_ip' => '',
					'created_at' => date('Y-m-d H:i:s'),
					'updated_at' => date('Y-m-d H:i:s'),
				);
	
				
				$data = $this->security->xss_clean($data);
				$result = $this->admin_settings_model->register($data);
				if($result){
	
					// Add User Activity
					$this->activity_model->add(6);
	
					$this->session->set_flashdata('msg', 'Profile has been Updated Successfully!');
					redirect(base_url('admin/admin_settings'), 'refresh');
				}
			}
			
		}
		else{
			$id = $this->session->userdata('admin_id');

			$comments_info = $this->admin_settings_model->get_comments_info();

			$data['user'] = $this->admin_settings_model->get_user_detail();
			$data['counts'] = $this->admin_settings_model->get_all_counts_notes ();
			$data['tag_counts'] = $this->admin_settings_model->get_all_counts_tags ();
			$data['user_counts'] = $this->admin_settings_model->get_all_counts_users ();
			$data['last_activity'] = $this->admin_settings_model->get_last_login($id);
			$data['delete_count'] = $this->admin_settings_model->get_my_counts_delete_notes_by_id($id);
			$data['comments_data'] = $comments_info;
			$data['title'] = 'Admin';
			$data['view'] = 'admin/Admin_settings/Admin_settings';
			
			$this->load->view('layout', $data);
		}
	}

	//-------------------------------------------------------------------------
	public function change_pwd(){
		$id = $this->session->userdata('admin_id');
		if($this->input->post('submit')){
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('confirm_pwd', 'Confirm Password', 'trim|required|matches[password]');
			if ($this->form_validation->run() == FALSE) {
				$data['user'] = $this->admin_settings_model->get_user_detail();
				$data['view'] = 'admin/profile';
				$this->load->view('layout', $data);
			}
			else{
				$data = array(
					'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
				);
				$data = $this->security->xss_clean($data);
				$result = $this->admin_settings_model->change_pwd($data, $id);
				if($result){

					// Add User Activity
					$this->activity_model->add(7);

					$this->session->set_flashdata('msg', 'Password has been changed successfully!');
					redirect(base_url('admin/profile'));
				}
			}
		}
		else{
			$id = $this->session->userdata('admin_id');

			$data['user'] = $this->admin_settings_model->get_user_detail();
			$data['counts'] = $this->admin_settings_model->get_my_counts_notes_by_id ($id);
			$data['title'] = 'Admin';
			$data['view'] = 'admin/Admin_settings/Admin_settings';
			$this->load->view('layout', $data);
		}
	}

	public function datatable_selected_user_json () {
		$id = $this->input->post('user_id');

		$records = $this->admin_settings_model->get_all_notes_by_id($id);

		$data = array();
		

		//get tags information
		$tags_info = $this->admin_settings_model->get_tags_info_by_id();
		$tags_array = array();
		$i= 0;
		foreach($tags_info as $row){
			$tags_array[$i] = array($row['id'], $row['tagname']);
			$i++;
		}


		foreach ($records as $row)
		{
			if ($row['subject'] == ""){
				$current_title = "Untitled";
			}else{
				$current_title = $row['subject'];
			}
			$tag_list = explode(",", $row['tags']);
			
			$tag_full_name = "<div class='tag_list_wrap'>";

			foreach ($tag_list as $v) { 
				foreach ($tags_array as $tag_data){
					if ($tag_data[0] == $v){
					  $tag_full_name .= '<div class="tag_list">'.$tag_data[1]. '</div>' ;

					}
				}
			}

			$tag_full_name .= "</div>";

					$title_class = "show_note_title";

						if ($row['is_active'] == 0)  
							$title_class = $title_class." inactive_title";


					$user_name = $this->admin_settings_model->get_current_username($row['user_id']);
						if($user_name != null){
							$cur_user_name = $user_name->username;
						}else {
							$cur_user_name = "";
						}

						$updated_time =  date(" M d, Y", strtotime($row['updated_at']));
				$data[] = array(
					'<div class="show_create_date">'.$updated_time.'</div><div class="'.$title_class.'">'.$current_title.'</div><div class="admin_showing_editors_wrap"><i class="material-icons">person</i>'.$cur_user_name.'</div>',
					
					$row['created_at'],
					$row['updated_at'],
					$tag_full_name,
					$row['id'],
					$row['content'],
					$row['user_id'],
					$cur_user_name,
					$row['is_active'],
				);
			
				
		}

		$recods["data"] = $data;
	
		echo json_encode($recods);	
	}



	

	public function datatable_users_json() {
        $id = $this->session->userdata('admin_id');

      
		
		$data = array();

		//get tags information
		$tags_info = $this->admin_settings_model->get_info_users();
		

		foreach ($tags_info as $row)
		{
			

			$active_state = "";
			$title_class = "show_note_title";


			if ($row['is_active'] == 0){
				$title_class = $title_class." inactive_title";
				$active_state = "Inactive";
			}else {
				$active_state = "Active";
			} 
				

			$add_Date = date(" M d, Y", strtotime($row['created_at']));  

			$login_activity = $this->admin_settings_model->get_last_login($row['id']);

			if ($login_activity) {
				$last_activity = date(" M d, Y", strtotime($login_activity['created_at']));
			}
			 

			if ($row['photo']){
				$photo_url = base_url().$row['photo'];
			}else {
				$photo_url = base_url()."public/images/user.png";
			}

				$data[] = array(
					'<input type="checkbox" class="chkclass"  value="'. $row['id'] .'">',
					'<div class="'.$title_class.'">'.$row['username'].'</div> <div class="hide_last_activity">'.$last_activity.'</div><div class="hide_photo_url">'.$photo_url.'</div>',
					'<span>'.$row['created_at'].'</span>'.'<div>'.$add_Date.'</div>',
					$row['note_counts'],						
					$row['email'],
					$active_state,
					$row['company'],
					$row['position_title'],
					$row['id'],
					$row['note_updated'],
				);
			
				
		}

		$recods["data"] = $data;
	
		echo json_encode($recods);	
	}

	//active users
	public function active_users() {
		$id = $this->input->post('user_id');
		$active_val = $this->input->post('active_val');

		if ($active_val == "Active" ){
			$data = array(
				'is_active' => 0,
			);
		}else {
			$data = array(
				'is_active' => 1,
			);
		}
		

		$edit = $this->admin_settings_model->active_inactive_users($id, $data);



	}


	public function datatable_tags_json() {
        $id = $this->session->userdata('admin_id');

      
		
		$data = array();

		//get tags information
		$tags_info = $this->admin_settings_model->get_tags_info_by_id();

		//get tag_list from ci_templates
		$tags_list = $this->admin_settings_model->get_all_tag_list();
		

		foreach ($tags_info as $row)
		{
				$user_name = $this->admin_settings_model->get_current_username($row['user_id']);
				if($user_name != null){
					$cur_user_name = $user_name->username;
				}else {
					$cur_user_name = "";
				}


				//getting usage count
				

				$usage_count = 0;
				foreach ($tags_list as $tag_list) {
					$tag_collection = explode(",",$tag_list['tags']);
					foreach ($tag_collection as $tag) { 
						if ($tag == $row['id']){
							$usage_count = $usage_count + 1;
						}
					}
				}
				

				
		        $newDate = date(" M d, Y", strtotime($row['created_at']));  

				$data[] = array(
					'<input type="checkbox" class="chkclass"  value="'. $row['id'] .'">',
					'<div class="hide_tag_name">'.$row['tagname'].'</div><input type="text" name="tagname"  value="'.$row['tagname'].'" class="input_tag_name" disabled> <i class="material-icons edit_btn">edit</i>',					
					'<div class="hide_tag_name">'.$row['created_at'].'</div>'.$newDate,							
					$cur_user_name,
					$usage_count,
					$row['id'],
				);
			
				
		}

		$recods["data"] = $data;
	
		echo json_encode($recods);	
	}


	public function rename_tags() {
		$id = $this->input->post('tag_id');
		$active_val = $this->input->post('tag_name');

		$data = array(
			'tagname' => $active_val,
		);

		$edit = $this->admin_settings_model->rename_tags($id, $data);

	}


	public function datatable_json(){		
			
        
        $id = $this->session->userdata('admin_id');

        $records = $this->admin_settings_model->get_all_notes();

				$data = array();
				

				//get tags information
				$tags_info = $this->admin_settings_model->get_tags_info_by_id();
				$tags_array = array();
				$i= 0;
				foreach($tags_info as $row){
					$tags_array[$i] = array($row['id'], $row['tagname']);
					$i++;
				}


				foreach ($records as $row)
				{
					if ($row['subject'] == ""){
						$current_title = "Untitled";
					}else{
						$current_title = $row['subject'];
					}
					$tag_list = explode(",", $row['tags']);
					$tag_full_name = "<div class='tag_list_wrap'>";

					foreach ($tag_list as $v) { 
						foreach ($tags_array as $tag_data){
							if ($tag_data[0] == $v){
							  $tag_full_name .= '<div class="tag_list">'.$tag_data[1]. '</div>' ;

							}
						}
					}

					$tag_full_name .= "</div>";

					$user_name = $this->admin_settings_model->get_current_username($row['user_id']);
						if($user_name != null){
							$cur_user_name = $user_name->username;
						}else {
							$cur_user_name = "";
						}
					
						$title_class = "show_note_title";

						if ($row['is_active'] == 0)  
							$title_class = $title_class." inactive_title";


						$add_Date = date(" M d, Y", strtotime($row['created_at']));
						$updated_Date = date(" M d, Y", strtotime($row['updated_at']));

						$data[] = array(
                            '<input type="checkbox" class="chkclass"  value="'. $row['id'] .'">',
							'<div class="'.$title_class.'">'.$current_title.'</div>',							
							'<span>'.$row['created_at'].'</span>'.'<div>'.$add_Date.'</div>',
							'<span>'.$row['updated_at'].'</span>'.'<div>'.$updated_Date.'</div>',						
							$tag_full_name,
							$row['id'],
							$row['content'],
							$row['user_id'],
							
							$row['is_active'],
						);
					
						
				}

				$recods["data"] = $data;
			
				echo json_encode($recods);		
	}

	//-------------------------------------------------------------------------
	public function delete_notes(){
		$ids = $this->input->post('ids');
 
		$records = $this->admin_settings_model->del($ids);



		if ($records){
			$this->activity_model->add(23);
			echo json_encode(['success'=>"Item Deleted successfully."]);
		}
			
	}

	//-------------------------------------------------------------------------
	public function delete_tags(){
		$id = $this->input->post('tag_id');
		$active_val = $this->input->post('tag_name');
	
		$records = $this->admin_settings_model->del_tag($id);

		if ($records)
			echo json_encode(['success'=>"Item Deleted successfully."]);
	}

	//delete users
	public function delete_users () {
		$id = $this->input->post('user_id');
		
	
		$records = $this->admin_settings_model->del_user($id);

		if ($records)
			echo json_encode(['success'=>"Item Deleted successfully."]);
	}
	

	//----Active/Inacitve Notes
	public function active_inactive_notes() {
		$id = $this->input->post('note_id');
		$active_val = $this->input->post('active_val');

		if ($active_val == 0 ){
			$data = array(
				'is_active' => 1,
			);
		}else {
			$data = array(
				'is_active' => 0,
			);
		}
		

		$edit = $this->admin_settings_model->active_inactive_notes($id, $data);
	}

	//---update notes
	public function update_notes () {
		//if($this->input->post('submit')){
			//$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
			//$this->form_validation->set_rules('content', 'Content', 'required');
			$this->form_validation->set_rules('curid', 'Curid', 'required');

			if ($this->form_validation->run() == FALSE) {
							
				$id = $this->session->userdata('admin_id');

				//get notes information
				$records = $this->notes_model->get_last_notes_by_id($id);
				//get user information
				$user_info = $this->notes_model->get_user_info_by_id($id);


				$data['title'] = 'My_Notes';
				$data['view'] = 'admin/my_notes/my_notes';
				$data['note_data'] = $records;
				$data['user_data'] = $user_info;
				$this->load->view('layout', $data);
			}
			else{
				
				$id = $this->session->userdata('admin_id');
				// Add User Activity
				$this->activity_model->add(1);

				//get tags information
				$tags_info = $this->admin_settings_model->get_tags_info_by_id();
				
				$i= 0;
				
				foreach($tags_info as $row){
					if ($row['tagname'] == $this->input->post('create_tag') ){
						$i = $row['id'];	
					}
				}

				$new_tag_id="";
				$send_tag_id = "";

				if ($i == 0){//new tag
					if ($this->input->post('create_tag') != "" ){
						$tag_data = array(
							'tagname' => $this->input->post('create_tag'),
							'created_at' => date('Y-m-d H:i:s'),
							'user_id' => $id,
						);	
						$new_tag_id = $this->admin_settings_model->insert_tags($tag_data);
						$send_tag_id = $new_tag_id;
					}
					
				}else{
					$new_tag_id = $i; //exsiting tag
				}
				
				$i=0;
				$current_tag_name = $this->admin_settings_model->get_current_tagname($this->input->post('curid'));
				$all_tags = "";
				$all_tags .= $current_tag_name->tags;
				if (strlen($all_tags) > 0){ //exsiting tag

					$tag_list = explode(",", $current_tag_name->tags);
					$same_tag = "";
					if(count($tag_list) > 0){
						foreach ($tag_list as $v) { 
						if($v == $new_tag_id){
							$same_tag = $v;
						}
						}
					}

					if(strlen($same_tag) > 0){
						//exsiting tag and inserted tag
					}else{
						if ($new_tag_id != "")
							$all_tags .= ",".$new_tag_id;
							$send_tag_id = $new_tag_id;
					}
					
				}else{
					//new first tag
					$all_tags .= $new_tag_id;
					$send_tag_id = $new_tag_id;
				}



				$data = array(
					'subject' => $this->input->post('subject'),
					'content' => $this->input->post('e_content'),
					'updated_at' => date('Y-m-d H:i:s'),
					'tags' =>$all_tags,
				);

				$this->admin_settings_model->edit_template($data, $this->input->post('curid'));
				


				//get tags information
				$all_tags_info = $this->admin_settings_model->get_tags_info_by_id();

				//get sending tag name
				$send_tag_name = "";
				foreach($all_tags_info as $row){
					if ($row['id'] == $send_tag_id ){
						$send_tag_name = $row['tagname'];	
					}
				}


				
				$send_data = array(
					'subject' => $this->input->post('subject'),
					'content' => $this->input->post('e_content'),
					'updated_at_conv' => date(" M d, Y", strtotime(date('Y-m-d H:i:s'))) ,
					'updated_at' => date('Y-m-d H:i:s') ,
					'tags' =>$all_tags,
					'all_tag_list' => $all_tags_info,
					'new_tag_name' =>$send_tag_name,
				);
				
				
				echo json_encode($send_data);	
				//$this->session->set_flashdata('msg', 'Template has been updated successfully!');
				//redirect(base_url('admin/my_notes/update_notes'));
			}
		//}
		/*
		else{
				
			$id = $this->session->userdata('admin_id');

			//get notes information
			$records = $this->notes_model->get_last_notes_by_id($id);
			//get user information
			$user_info = $this->notes_model->get_user_info_by_id($id);


			$data['title'] = 'My_Notes';
			$data['view'] = 'admin/my_notes/my_notes';
			$data['note_data'] = $records;
			$data['user_data'] = $user_info;
			$this->load->view('layout', $data);
		}*/
	}
			

	public function add_new_tag() {
		$id = $this->session->userdata('admin_id');
		$tag_name = $this->input->post('tag_name');

		$tag_data = array(
			'tagname' => $tag_name,
			'created_at' => date('Y-m-d H:i:s'),
			'user_id' => $id,
		);	
		$new_tag_id = $this->admin_settings_model->insert_tags($tag_data);

		$user_name = $this->admin_settings_model->get_current_username($id);
				if($user_name != null){
					$cur_user_name = $user_name->username;
				}else {
					$cur_user_name = "";
				}


		$orgDate = date('Y-m-d H:i:s');  
		$newDate = date(" M d, Y", strtotime($orgDate));  
		
		$send_data = array(
			'tagname' => $tag_name,
			'created_at' => $newDate,
			'user_name' => $user_name,
			'tag_id' => $new_tag_id,
		);	

		echo json_encode($send_data);	
	}

	public function create_comments () {
		$editer_id = $this->session->userdata('admin_id');
		$content = $this->input->post('comment_field');
		$note_id = $this->input->post('curid');

		$user_info = $this->admin_settings_model->get_user_info_by_id($editer_id);

		$comment_data = array(
			'content' => $content,
			'created_at' => date('Y-m-d H:i:s'),
			'user_id' => $editer_id,
			'note_id' => $note_id,
		);	

		$inputed_id = $this->admin_settings_model->create_comment($comment_data);

		$comments_data = $this->admin_settings_model->get_comments_info();

		$orgDate = date('Y-m-d H:i:s');  
		$newDate = date(" M d, Y", strtotime($orgDate));  


		$send_data = array(
			'id' => $inputed_id,
			'content' => $content,
			'created_at' => $newDate,
			'user_id' => $editer_id,
			'note_id' => $note_id,		
			'username' =>$user_info['username'],				
		);

		echo json_encode($send_data);


	}


		// Delete comment
		public function delete_comments() {
			$ids = $this->input->post('ids');
	
			$records = $this->admin_settings_model->del_comment($ids);

			if ($records)
				echo json_encode(['success'=>"Item Deleted successfully."]);


		}

}

?>	