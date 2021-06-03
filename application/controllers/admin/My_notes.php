
<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class My_notes extends MY_Controller {
		public function __construct(){
				parent::__construct();
				$this->load->model('admin/notes_model','notes_model');
				$this->load->model('activity_model','activity_model');
				$this->load->library('datatable'); // loaded my custom serverside datatable library
			}
			//-----------------------------------------------------------------------
			public function index(){
				$id = $this->session->userdata('admin_id');

				//get notes information
				
				$records = $this->notes_model->get_last_notes_by_id($id);
				
					
				//get user information
				$user_info = $this->notes_model->get_user_info_by_id($id);

				//get tags information
				$tags_info = $this->notes_model->get_tags_info_by_id();
				$tags_array = array();
				$i= 0;
				foreach($tags_info as $row){
					$tags_array[$i] = array($row['id'], $row['tagname']);
					$i++;
				}


				$comments_info = $this->notes_model->get_comments_info();

				$data['title'] = 'Notes';
				$data['view'] = 'admin/my_notes/my_notes';
				$data['counts'] = $this->notes_model->get_counts_notes_by_user ($id);
				$data['note_data'] = $records;
				$data['user_data'] = $user_info;
				$data['tags_data'] = $tags_array;
				$data['comments_data'] = $comments_info;
				$this->load->view('layout', $data);
			}
			//-----------------------------------------------------------------------
			public function datatable_json(){		
				$id = $this->session->userdata('admin_id');

				$records = $this->notes_model->get_all_notes_by_id($id);

				//get user information
				$user_info = $this->notes_model->get_user_info_by_id($id);

				$data = array();
				

				//get tags information
				$tags_info = $this->notes_model->get_tags_info_by_id();
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

					$tag_full_name .='</div>';

					$orgDate = $row['updated_at'];  
					$newDate = date(" M d, Y", strtotime($orgDate));  

					$crDate = $row['created_at'];  
					$createdDate = date(" M d, Y", strtotime($crDate));  

					$delete_element = '<div class="show_create_date">'.$newDate.'</div><div class="show_note_title">'.$current_title.'</div>';
					$delete_element .= '<div class="showing_editors_wrap"><i class="material-icons">person</i>'.$user_info['username'].'</div>';
					$delete_element .='<div class="dropdown delete_note_wrap delete_note_wrap_first">';
					$delete_element .='<a href="#" class="dropdown-toggle delete_note_show_dot" data-toggle="dropdown">...</a>';
					$delete_element .= '<div class="dropdown-menu">';
					$delete_element .=	'<div class="dropdown-item delete_note_btn"> <i class="material-icons delete_btn">delete</i> Delete</div>';
				
					$delete_element .= '</div>';
					$delete_element .= '</div>';


					$tag_del = $tag_full_name;					
					$tag_del .='<div class="dropdown delete_note_wrap delete_note_wrap_second">';
					$tag_del .='<a href="#" class="dropdown-toggle delete_note_show_dot" data-toggle="dropdown">...</a>';
					$tag_del .= '<div class="dropdown-menu">';
					$tag_del .=	'<div href="#" class="dropdown-item delete_note_btn"> <i class="material-icons delete_btn">delete</i> Delete</div>';
				
					$tag_del .= '</div>';
					$tag_del .= '</div>';
					
						$data[] = array(
							$delete_element,
							$row['created_at'],
							$row['updated_at'],
							$tag_del,
							$row['id'],
							$row['content'],
							$row['user_id'],
							$tag_full_name,
							$current_title,
						
						);
					
						
				}

				$recods["data"] = $data;
			
				echo json_encode($recods);						   
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
						$tags_info = $this->notes_model->get_tags_info_by_id();
						
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
								$new_tag_id = $this->notes_model->insert_tags($tag_data);
								$send_tag_id = $new_tag_id;
							}
							
						}else{
							$new_tag_id = $i; //exsiting tag
						}
						
						$i=0;
						$current_tag_name = $this->notes_model->get_current_tagname($this->input->post('curid'));
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

						$this->notes_model->edit_template($data, $this->input->post('curid'));
						


						//get tags information
						$all_tags_info = $this->notes_model->get_tags_info_by_id();

						//get sending tag name
						$send_tag_name = "";
						foreach($all_tags_info as $row){
							if ($row['id'] == $send_tag_id ){
								$send_tag_name = $row['tagname'];	
							}
						}


							
						$orgDate = date('Y-m-d H:i:s');  
						$newDate = date(" M d, Y", strtotime($orgDate));  

						
						$send_data = array(
							'subject' => $this->input->post('subject'),
							'content' => $this->input->post('e_content'),
							'updated_at' => $newDate,
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
		

			//---Create notes
			public function create_notes () {
				//if($this->input->post('submit')){
					
					$id = $this->session->userdata('admin_id');
					$username = $this->session->userdata('username');
					
						$data = array(
							'subject' => "",
							'content' => "",
							'created_at' => date('Y-m-d H:i:s'),
							'updated_at' => date('Y-m-d H:i:s'),
							'user_id' => $id,
							'tags' => "",
							'is_active' => 1,

						);
						// Add User Activity
						$this->activity_model->add(1);
						$inputed_id = $this->notes_model->insert_template($data);
	
						
						$orgDate = date('Y-m-d H:i:s');  
						$newDate = date(" M d, Y", strtotime($orgDate));  


						$send_data = array(
							'subject' => "",
							'content' => "",
							'created_at' => date('Y-m-d H:i:s'),
							'updated_at' => date('Y-m-d H:i:s'),
							'user_id' => $id,
							'tags' => "",
							'is_active' => 1,
							'current_id' => $inputed_id,
							'user_name' => $username,
							'conver_change_time' => $newDate,
							
						);

						echo json_encode($send_data);	
						//$this->session->set_flashdata('msg', 'Template has been updated successfully!');
						//redirect(base_url('admin/my_notes/update_notes'));
					
				//}
			}

			public function create_comments () {
				$editer_id = $this->session->userdata('admin_id');
				$content = $this->input->post('comment_field');
				$note_id = $this->input->post('curid');

				$user_info = $this->notes_model->get_user_info_by_id($editer_id);


				$comment_data = array(
					'content' => $content,
					'created_at' => date('Y-m-d H:i:s'),
					'user_id' => $editer_id,
					'note_id' => $note_id,
				);	

				$inputed_id = $this->notes_model->create_comment($comment_data);

				$comments_data = $this->notes_model->get_comments_info();

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
		
				$records = $this->notes_model->del_comment($ids);

				if ($records)
					echo json_encode(['success'=>"Item Deleted successfully."]);


			}

			//-------------------------------------------------------------------------
			public function delete_notes(){
				$ids = $this->input->post('ids');
		
				$records = $this->notes_model->del($ids);

				$this->activity_model->add(23);

				if ($records)
					echo json_encode(['success'=>"Item Deleted successfully."]);
			}
	
		
	}
?>