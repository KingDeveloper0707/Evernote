
<?php defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'libraries/vendor/autoload.php';

use Dompdf\Dompdf;


class Find_notes extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/find_notes_model', 'find_notes_model');
		$this->load->model('activity_model', 'activity_model');
		$this->load->library('datatable'); // loaded my custom serverside datatable library
	}
	//-----------------------------------------------------------------------
	public function index()
	{
		$id = $this->session->userdata('admin_id');

		//get notes information

		$records = $this->find_notes_model->get_last_notes_by_id($id);


		//get user information
		$user_info = $this->find_notes_model->get_user_info_by_id($id);

		//get tags information
		$tags_info = $this->find_notes_model->get_tags_info_by_id();
		$tags_array = array();
		$i = 0;
		foreach ($tags_info as $row) {
			$tags_array[$i] = array($row['id'], $row['tagname']);
			$i++;
		}

		//get companies information
		$companies_info = $this->find_notes_model->get_companies_info_by_id();
		$companies_array = array();
		$i = 0;
		foreach ($companies_info as $row) {
			$companies_array[$i] = array($row['id'], $row['company_name']);
			$i++;
		}

		//get notetypes information
		$notetypes_info = $this->find_notes_model->get_notetypes_info_by_id();
		$notetypes_array = array();
		$i = 0;
		foreach ($notetypes_info as $row) {
			$notetypes_array[$i] = array($row['id'], $row['notetype_name']);
			$i++;
		}

		//Get all users
		$all_user = $this->find_notes_model->get_users_info();

		//Get company names
		$all_companies = $this->find_notes_model->get_companys_info();
		//Get Expertise names
		$all_expertise = $this->find_notes_model->get_expertise_info();
		//Get Position names
		$all_positions = $this->find_notes_model->get_position_info();


		$comments_info = $this->find_notes_model->get_comments_info();


		$data['title'] = 'Find Notes';
		$data['view'] = 'admin/find_notes/find_notes';
		$data['note_data'] = $records;
		$data['user_data'] = $user_info;
		$data['tags_data'] = $tags_array;
		$data['notetypes_data'] = $notetypes_array;
		$data['companies_data'] = $companies_array;
		$data['all_users'] = $all_user;
		$data['all_companies'] = $all_companies;
		$data['all_expertise'] = $all_expertise;
		$data['all_positions'] = $all_positions;
		$data['comments_data'] = $comments_info;
		$data['counts'] = $this->find_notes_model->get_counts_notes_by_user();
		$this->load->view('layout', $data);
	}
	//-----------------------------------------------------------------------
	public function datatable_json()
	{

		$id = $this->session->userdata('admin_id');

		$all_notes = $this->find_notes_model->get_all_notes();

		$data = array();

		$tag_id_list = $this->input->post('tag_id_list');
		$author_list = $this->input->post('author_list');
		$role_list = $this->input->post('role_list');
		$company_list = $this->input->post('company_list');
		$expertise_list = $this->input->post('expertise_list');
		$position_list = $this->input->post('position_list');



		//return;

		//get tags information
		$tags_info = $this->find_notes_model->get_tags_info_by_id();
		$tags_array = array();
		$i = 0;
		foreach ($tags_info as $row) {
			$tags_array[$i] = array($row['id'], $row['tagname']);
			$i++;
		}

		//get companies information
		$companies_info = $this->find_notes_model->get_companies_info_by_id();
		$companies_array = array();
		$i = 0;
		foreach ($companies_info as $row) {
			$companies_array[$i] = array($row['id'], $row['company_name']);
			$i++;
		}

		//get note types information
		$notetypes_info = $this->find_notes_model->get_notetypes_info_by_id();
		$notetypes_array = array();
		$i = 0;
		foreach ($notetypes_info as $row) {
			$notetypes_array[$i] = array($row['id'], $row['notetype_name']);
			$i++;
		}



		foreach ($all_notes as $row) {
			$include_state = FALSE;

			if ($row['subject'] == "") {
				$current_title = "Untitled";
			} else {
				$current_title = $row['subject'];
			}
			$tag_list = explode(",", $row['tags']);

			$tag_full_name = "<div class='tag_list_wrap' base_url='" . base_url() . "' >";

			foreach ($tag_list as $v) {
				foreach ($tags_array as $tag_data) {
					if ($tag_data[0] == $v) {
						$tag_full_name .= '<div class="tag_list" tag_id="' . $tag_data[0] . '">' . $tag_data[1] . '<div class="del_tag"><img src="' . base_url() . 'public/images/tag_delete.png"></div></div>';
					}
				}
			}

			$tag_full_name .= '</div>';


			//companies and notetypes
			$get_company_list = explode(",", $row['companies']);
			$company_full_name = "<div class='company_list_wrap' base_url='" . base_url() . "' >";

			foreach ($get_company_list as $v) {
				foreach ($companies_array as $company_data) {
					if ($company_data[0] == $v) {
						$company_full_name .= '<div class="company_list" company_id="' . $company_data[0] . '">' . $company_data[1] . '<div class="del_company"><img src="' . base_url() . 'public/images/tag_delete.png"></div></div>';
					}
				}
			}

			$company_full_name .= '</div>';
			//note type
			$notetype_list = explode(",", $row['notetypes']);
			$company_full_name .= "<div class='notetype_list_wrap' base_url='" . base_url() . "' >";

			foreach ($notetype_list as $v) {
				foreach ($notetypes_array as $notetype_data) {
					if ($notetype_data[0] == $v) {
						$company_full_name .= '<div class="notetype_list" notetype_id="' . $notetype_data[0] . '">' . $notetype_data[1] . '<div class="del_notetype"><img src="' . base_url() . 'public/images/tag_delete.png"></div></div>';
					}
				}
			}

			$company_full_name .= '</div>';




			$orgDate = $row['updated_at'];
			$newDate = date(" M d, Y", strtotime($orgDate));


			if (empty($tag_id_list) && empty($author_list) && empty($role_list) && empty($company_list) && empty($expertise_list) && empty($position_list)) {
				$data[] = array(
					'<div class="show_create_date">' . $newDate . '</div><div class="show_note_title">' . $current_title . '</div>',

					$row['created_at'],
					$row['updated_at'],
					$tag_full_name,
					$row['id'],
					$row['content'],
					$row['username'],
					$tag_full_name,
					$company_full_name,
				);
			} else {
				if (!empty($tag_id_list)) {

					foreach ($tag_id_list as $select_tag) {

						if (in_array($select_tag, $tag_list)) {
						} else {
							$include_state = TRUE;
						}
					}
				}

				if (!empty($author_list)) {

					if (in_array($row['username'], $author_list)) {
					} else {
						$include_state = TRUE;
					}
				}

				if (!empty($role_list)) {

					if (in_array($row['is_admin'], $role_list)) {
					} else {
						$include_state = TRUE;
					}
				}

				if (!empty($company_list)) {


					foreach ($company_list as $select_company) {

						if (in_array($select_company, $get_company_list)) {
						} else {
							$include_state = TRUE;
						}
					}
				}

				if (!empty($expertise_list)) {

					foreach ($expertise_list as $select_notetype) {

						if (in_array($select_notetype, $notetype_list)) {
						} else {
							$include_state = TRUE;
						}
					}
				}

				if (!empty($position_list)) {

					if (in_array($row['position_title'], $position_list)) {
					} else {
						$include_state = TRUE;
					}
				}

				if ($include_state) {
					continue;
				} else {
					$data[] = array(
						'<div class="show_create_date">' . $newDate . '</div><div class="show_note_title">' . $current_title . '</div>',

						$row['created_at'],
						$row['updated_at'],
						$tag_full_name,
						$row['id'],
						$row['content'],
						$row['username'],
						$tag_full_name,
						$company_full_name,
					);
				}
			}
		}

		$recods["data"] = $data;

		echo json_encode($recods);
	}


	//---update notes
	public function update_notes()
	{
		//if($this->input->post('submit')){
		//$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		//$this->form_validation->set_rules('content', 'Content', 'required');
		$this->form_validation->set_rules('curid', 'Curid', 'required');

		if ($this->form_validation->run() == FALSE) {

			$id = $this->session->userdata('admin_id');

			//get notes information
			$records = $this->find_notes_model->get_last_notes_by_id($id);
			//get user information
			$user_info = $this->find_notes_model->get_user_info_by_id($id);


			$data['title'] = 'My_Notes';
			$data['view'] = 'admin/my_notes/my_notes';
			$data['note_data'] = $records;
			$data['user_data'] = $user_info;
			$this->load->view('layout', $data);
		} else {

			$id = $this->session->userdata('admin_id');
			// Add User Activity
			$this->activity_model->add(1);

			//get tags information
			$tags_info = $this->find_notes_model->get_tags_info_by_id();

			$i = 0;

			foreach ($tags_info as $row) {
				if ($row['tagname'] == $this->input->post('create_tag')) {
					$i = $row['id'];
				}
			}

			$new_tag_id = "";
			$send_tag_id = "";

			if ($i == 0) { //new tag
				if ($this->input->post('create_tag') != "") {
					$tag_data = array(
						'tagname' => $this->input->post('create_tag'),
						'created_at' => date('Y-m-d H:i:s'),
						'user_id' => $id,
					);
					$new_tag_id = $this->find_notes_model->insert_tags($tag_data);
					$send_tag_id = $new_tag_id;
				}
			} else {
				$new_tag_id = $i; //exsiting tag
			}

			$i = 0;
			$current_tag_name = $this->find_notes_model->get_current_tagname($this->input->post('curid'));
			$all_tags = "";
			$all_tags .= $current_tag_name->tags;
			if (strlen($all_tags) > 0) { //exsiting tag

				$tag_list = explode(",", $current_tag_name->tags);
				$same_tag = "";
				if (count($tag_list) > 0) {
					foreach ($tag_list as $v) {
						if ($v == $new_tag_id) {
							$same_tag = $v;
						}
					}
				}

				if (strlen($same_tag) > 0) {
					//exsiting tag and inserted tag
				} else {
					if ($new_tag_id != "")
						$all_tags .= "," . $new_tag_id;
					$send_tag_id = $new_tag_id;
				}
			} else {
				//new first tag
				$all_tags .= $new_tag_id;
				$send_tag_id = $new_tag_id;
			}



			$data = array(
				'subject' => $this->input->post('subject'),
				'content' => $this->input->post('e_content'),
				'updated_at' => date('Y-m-d H:i:s'),
				'tags' => $all_tags,
			);

			$this->find_notes_model->edit_template($data, $this->input->post('curid'));



			//get tags information
			$all_tags_info = $this->find_notes_model->get_tags_info_by_id();

			//get sending tag name
			$send_tag_name = "";
			foreach ($all_tags_info as $row) {
				if ($row['id'] == $send_tag_id) {
					$send_tag_name = $row['tagname'];
				}
			}


			//get comapnies information
			$companies_info = $this->find_notes_model->get_companies_info_by_id();

			$i = 0;

			foreach ($companies_info as $row) {
				if ($row['company_name'] == $this->input->post('create_company')) {
					$i = $row['id'];
				}
			}

			$new_company_id = "";
			$send_company_id = "";

			if ($i == 0) { //new tag
				if ($this->input->post('create_company') != "") {
					$company_data = array(
						'company_name' => $this->input->post('create_company'),
						'created_at' => date('Y-m-d H:i:s'),
						'user_id' => $id,
					);
					$new_company_id = $this->find_notes_model->insert_companies($company_data);
					$send_company_id = $new_company_id;
				}
			} else {
				$new_company_id = $i; //exsiting tag
			}

			$i = 0;
			$current_company_name = $this->find_notes_model->get_current_companyname($this->input->post('curid'));
			$all_companies = "";
			$all_companies .= $current_company_name->companies;
			if (strlen($all_companies) > 0) { //exsiting tag

				$company_list = explode(",", $current_company_name->companies);
				$same_company = "";
				if (count($company_list) > 0) {
					foreach ($company_list as $v) {
						if ($v == $new_company_id) {
							$same_company = $v;
						}
					}
				}

				if (strlen($same_company) > 0) {
					//exsiting tag and inserted tag
				} else {
					if ($new_company_id != "")
						$all_companies .= "," . $new_company_id;
					$send_company_id = $new_company_id;
				}
			} else {
				//new first tag
				$all_companies .= $new_company_id;
				$send_company_id = $new_company_id;
			}



			$data = array(
				'subject' => $this->input->post('subject'),
				'content' => $this->input->post('e_content'),
				'updated_at' => date('Y-m-d H:i:s'),
				'companies' => $all_companies,
			);

			$this->find_notes_model->edit_template($data, $this->input->post('curid'));



			//get all companies information
			$all_companies_info = $this->find_notes_model->get_companies_info_by_id();

			//get sending company name
			$send_company_name = "";
			foreach ($all_companies_info as $row) {
				if ($row['id'] == $send_company_id) {
					$send_company_name = $row['company_name'];
				}
			}



			//get Note types information
			$notetypes_info = $this->find_notes_model->get_notetypes_info_by_id();

			$i = 0;

			foreach ($notetypes_info as $row) {
				if ($row['notetype_name'] == $this->input->post('create_notetype')) {
					$i = $row['id'];
				}
			}

			$new_notetype_id = "";
			$send_notetype_id = "";

			if ($i == 0) { //new tag
				if ($this->input->post('create_notetype') != "") {
					$notetype_data = array(
						'notetype_name' => $this->input->post('create_notetype'),
						'created_at' => date('Y-m-d H:i:s'),
						'user_id' => $id,
					);
					$new_notetype_id = $this->find_notes_model->insert_notetypes($notetype_data);
					$send_notetype_id = $new_notetype_id;
				}
			} else {
				$new_notetype_id = $i; //exsiting tag
			}

			$i = 0;
			$current_notetype_name = $this->find_notes_model->get_current_notetypename($this->input->post('curid'));
			$all_notetypes = "";
			$all_notetypes .= $current_notetype_name->notetypes;
			if (strlen($all_notetypes) > 0) { //exsiting tag

				$notetype_list = explode(",", $current_notetype_name->notetypes);
				$same_notetype = "";
				if (count($notetype_list) > 0) {
					foreach ($notetype_list as $v) {
						if ($v == $new_notetype_id) {
							$same_notetype = $v;
						}
					}
				}

				if (strlen($same_notetype) > 0) {
					//exsiting tag and inserted tag
				} else {
					if ($new_notetype_id != "")
						$all_notetypes .= "," . $new_notetype_id;
					$send_notetype_id = $new_notetype_id;
				}
			} else {
				//new first tag
				$all_notetypes .= $new_notetype_id;
				$send_notetype_id = $new_notetype_id;
			}



			$data = array(
				'subject' => $this->input->post('subject'),
				'content' => $this->input->post('e_content'),
				'updated_at' => date('Y-m-d H:i:s'),
				'notetypes' => $all_notetypes,
			);

			$this->find_notes_model->edit_template($data, $this->input->post('curid'));



			//get all notetypes information
			$all_notetypes_info = $this->find_notes_model->get_notetypes_info_by_id();

			//get sending notetype name
			$send_notetype_name = "";
			foreach ($all_notetypes_info as $row) {
				if ($row['id'] == $send_notetype_id) {
					$send_notetype_name = $row['notetype_name'];
				}
			}


			$send_data = array(
				'subject' => $this->input->post('subject'),
				'content' => $this->input->post('e_content'),
				'updated_at' => date('Y-m-d H:i:s'),
				'tags' => $all_tags,
				'all_tag_list' => $all_tags_info,
				'new_tag_id' => $send_tag_id,
				'new_tag_name' => $send_tag_name,
				'new_company_id' => $send_company_id,
				'new_company_name' => $send_company_name,
				'new_notetype_id' => $send_notetype_id,
				'new_notetype_name' => $send_notetype_name,
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
	public function create_notes()
	{
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
		$inputed_id = $this->find_notes_model->insert_template($data);

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

		);

		echo json_encode($send_data);
		//$this->session->set_flashdata('msg', 'Template has been updated successfully!');
		//redirect(base_url('admin/my_notes/update_notes'));

		//}
	}


	public function create_comments()
	{
		$editer_id = $this->session->userdata('admin_id');
		$content = $this->input->post('comment_field');
		$note_id = $this->input->post('curid');

		$user_info = $this->find_notes_model->get_user_info_by_id($editer_id);

		$comment_data = array(
			'content' => $content,
			'created_at' => date('Y-m-d H:i:s'),
			'user_id' => $editer_id,
			'note_id' => $note_id,
		);

		$inputed_id = $this->find_notes_model->create_comment($comment_data);

		$comments_data = $this->find_notes_model->get_comments_info();

		$orgDate = date('Y-m-d H:i:s');
		$newDate = date(" M d, Y", strtotime($orgDate));


		$send_data = array(
			'id' => $inputed_id,
			'content' => $content,
			'created_at' => $newDate,
			'user_id' => $editer_id,
			'note_id' => $note_id,
			'username' => $user_info['username'],
		);

		echo json_encode($send_data);
	}


	// Delete comment
	public function delete_comments()
	{
		$ids = $this->input->post('ids');

		$records = $this->find_notes_model->del_comment($ids);

		if ($records)
			echo json_encode(['success' => "Item Deleted successfully."]);
	}


	//-------------------------------------------------------------------------
	public function delete_tag_one()
	{
		$id = $this->input->post('id');
		$tag_id = $this->input->post('tag_id');

		$i = 0;
		$current_tag_name = $this->find_notes_model->get_current_tagname($id);
		$all_tags = "";
		$all_tags .= $current_tag_name->tags;

		$same_tag = "";

		if (strlen($all_tags) > 0) { //exsiting tag

			$tag_list = explode(",", $current_tag_name->tags);

			if (count($tag_list) > 0) {
				foreach ($tag_list as $v) {
					if ($v != $tag_id) {
						if ($same_tag == "") {
							$same_tag .= $v;
						} else {
							$same_tag .= "," . $v;
						}
					} else {
					}
				}
			}
		}

		$data = array(
			'updated_at' => date('Y-m-d H:i:s'),
			'tags' => $same_tag,
		);

		$this->find_notes_model->edit_template($data, $id);

		$send_data = array(

			'tags' => $same_tag,
		);

		//echo json_encode($send_data);
	}


	//-------------------------------------------------------------------------
	public function delete_company_one()
	{
		$id = $this->input->post('id');
		$company_id = $this->input->post('company_id');

		$i = 0;
		$current_tag_name = $this->find_notes_model->get_current_companyname($id);
		$all_tags = "";
		$all_tags .= $current_tag_name->companies;

		$same_tag = "";

		if (strlen($all_tags) > 0) { //exsiting tag

			$tag_list = explode(",", $current_tag_name->companies);

			if (count($tag_list) > 0) {
				foreach ($tag_list as $v) {
					if ($v != $company_id) {
						if ($same_tag == "") {
							$same_tag .= $v;
						} else {
							$same_tag .= "," . $v;
						}
					} else {
					}
				}
			}
		}

		$data = array(
			'updated_at' => date('Y-m-d H:i:s'),
			'companies' => $same_tag,
		);

		$this->find_notes_model->edit_template($data, $id);

		$send_data = array(

			'companies' => $same_tag,
		);

		echo json_encode($send_data);
	}



	//-------------------------------------------------------------------------
	public function delete_notetype_one()
	{
		$id = $this->input->post('id');
		$notetype_id = $this->input->post('notetype_id');

		$i = 0;
		$current_tag_name = $this->find_notes_model->get_current_notetypename($id);
		$all_tags = "";
		$all_tags .= $current_tag_name->notetypes;

		$same_tag = "";

		if (strlen($all_tags) > 0) { //exsiting tag

			$tag_list = explode(",", $current_tag_name->notetypes);

			if (count($tag_list) > 0) {
				foreach ($tag_list as $v) {
					if ($v != $notetype_id) {
						if ($same_tag == "") {
							$same_tag .= $v;
						} else {
							$same_tag .= "," . $v;
						}
					} else {
					}
				}
			}
		}

		$data = array(
			'updated_at' => date('Y-m-d H:i:s'),
			'notetypes' => $same_tag,
		);

		$this->find_notes_model->edit_template($data, $id);

		$send_data = array(

			'notetypes' => $same_tag,
		);

		echo json_encode($send_data);
	}


	public function download_pdf()
	{

		set_time_limit(0);

		if (!isset($_GET['note_id'])) {
			echo ("Not find note id");
			die();
		}

		$note_id = $_GET['note_id'];




		//get user information
		$user_info = $this->find_notes_model->get_note_info_by_id($note_id);


		$user_name = $this->find_notes_model->get_current_username($user_info['user_id']);
		if ($user_name != null) {
			$cur_user_name = $user_name->username;
		} else {
			$cur_user_name = "";
		}


		//get tags information
		$tags_info = $this->find_notes_model->get_tags_info_by_id();
		$tags_array = array();
		$i = 0;
		foreach ($tags_info as $row) {
			$tags_array[$i] = array($row['id'], $row['tagname']);
			$i++;
		}



		$tag_list = explode(",", $user_info['tags']);


		$cur_tag_list = array();

		foreach ($tag_list as $v) {
			foreach ($tags_array as $tag_data) {
				if ($tag_data[0] == $v) {
					$cur_tag_list[] = $tag_data[1];
				}
			}
		}

		//get companies information
		$companies_info = $this->find_notes_model->get_companies_info_by_id();
		$companies_array = array();
		$i = 0;
		foreach ($companies_info as $row) {
			$companies_array[$i] = array($row['id'], $row['company_name']);
			$i++;
		}



		$company_list = explode(",", $user_info['companies']);


		$cur_company_list = array();

		foreach ($company_list as $v) {
			foreach ($companies_array as $tag_data) {
				if ($tag_data[0] == $v) {
					$cur_company_list[] = $tag_data[1];
				}
			}
		}


		//get note types information
		$notetypes_info = $this->find_notes_model->get_notetypes_info_by_id();
		$notetypes_array = array();
		$i = 0;
		foreach ($notetypes_info as $row) {
			$notetypes_array[$i] = array($row['id'], $row['notetype_name']);
			$i++;
		}



		$notetype_list = explode(",", $user_info['notetypes']);


		$cur_notetype_list = array();

		foreach ($notetype_list as $v) {
			foreach ($notetypes_array as $tag_data) {
				if ($tag_data[0] == $v) {
					$cur_notetype_list[] = $tag_data[1];
				}
			}
		}

		/*
		echo $cur_user_name;
		echo "</br>";  
		echo $user_info['subject'];

		echo $user_info['content'];

		foreach ($cur_tag_list as $my_tag) {
			echo $my_tag;
			echo nl2br("\n");
		}
		*/


		$new_data = array(
			'title' => $user_info['subject'],
			'author' => $cur_user_name,
			'content' => $user_info['content'],
			'tags' => $cur_tag_list,
			'companies' => $cur_company_list,
			'notetypes' => $cur_notetype_list,
		);

		/*
		$this->load->view('admin/find_notes/pdf-table', $new_data, TRUE);

		$data['title'] = 'Find Notes';
		$data['view'] = 'admin/find_notes/pdf-table';
		$data['new_data'] = $new_data;
	
		$this->load->view('layout', $data);
		*/

		$dompdf = new Dompdf();

		$clinic_html = $this->load->view('admin/find_notes/pdf-table', $new_data, TRUE);

		$dompdf->loadHtml($clinic_html);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4', 'landscape');

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		//$dompdf->stream();
		$dompdf->stream($user_info['subject'] . "_" . $cur_user_name . "_" . $user_info['created_at'] . ".pdf");
	}


	public function download_search_pdf()
	{
		set_time_limit(0);

		if (!isset($_GET['note_ids'])) {
			echo ("Not find note id");
			die();
		}

		$tags_terms = "";
		$tags_terms = $_GET['tags_terms'];

		$author_terms = "";
		$author_terms = $_GET['author_terms'];

		$role_terms = "";
		$role_terms = $_GET['role_terms'];

		$company_terms = "";
		$company_terms = $_GET['company_terms'];

		$note_type_terms = "";
		$note_type_terms = $_GET['note_type_terms'];

		$search_paramenter = "";
		$search_paramenter = $_GET['search_paramenter'];
		


		$note_ids = $_GET['note_ids'];

		$note_array = explode(",", $note_ids);

		$send_data = array(
			'notes_data' => array(),
			'search_terms' => array()
		);

		$search_terms = array(
			'tags_terms' => $tags_terms,
			'author_terms' => $author_terms,
			'role_terms' => $role_terms,
			'company_terms' => $company_terms,
			'note_type_terms' => $note_type_terms,
			'search_paramenter' => $search_paramenter
		);

		$send_data['search_terms'][] = $search_terms;

		foreach ($note_array as $note_id) {
			//get user information
			$user_info = $this->find_notes_model->get_note_info_by_id($note_id);


			$user_name = $this->find_notes_model->get_current_username($user_info['user_id']);
			if ($user_name != null) {
				$cur_user_name = $user_name->username;
			} else {
				$cur_user_name = "";
			}


			//get tags information
			$tags_info = $this->find_notes_model->get_tags_info_by_id();
			$tags_array = array();
			$i = 0;
			foreach ($tags_info as $row) {
				$tags_array[$i] = array($row['id'], $row['tagname']);
				$i++;
			}



			$tag_list = explode(",", $user_info['tags']);


			$cur_tag_list = array();

			foreach ($tag_list as $v) {
				foreach ($tags_array as $tag_data) {
					if ($tag_data[0] == $v) {
						$cur_tag_list[] = $tag_data[1];
					}
				}
			}

			//get companies information
			$companies_info = $this->find_notes_model->get_companies_info_by_id();
			$companies_array = array();
			$i = 0;
			foreach ($companies_info as $row) {
				$companies_array[$i] = array($row['id'], $row['company_name']);
				$i++;
			}



			$company_list = explode(",", $user_info['companies']);


			$cur_company_list = array();

			foreach ($company_list as $v) {
				foreach ($companies_array as $tag_data) {
					if ($tag_data[0] == $v) {
						$cur_company_list[] = $tag_data[1];
					}
				}
			}


			//get note types information
			$notetypes_info = $this->find_notes_model->get_notetypes_info_by_id();
			$notetypes_array = array();
			$i = 0;
			foreach ($notetypes_info as $row) {
				$notetypes_array[$i] = array($row['id'], $row['notetype_name']);
				$i++;
			}



			$notetype_list = explode(",", $user_info['notetypes']);


			$cur_notetype_list = array();

			foreach ($notetype_list as $v) {
				foreach ($notetypes_array as $tag_data) {
					if ($tag_data[0] == $v) {
						$cur_notetype_list[] = $tag_data[1];
					}
				}
			}

			/*
			echo $cur_user_name;
			echo "</br>";  
			echo $user_info['subject'];

			echo $user_info['content'];

			foreach ($cur_tag_list as $my_tag) {
				echo $my_tag;
				echo nl2br("\n");
			}
			*/


			$new_data = array(
				'title' => $user_info['subject'],
				'author' => $cur_user_name,
				'content' => $user_info['content'],
				'tags' => $cur_tag_list,
				'companies' => $cur_company_list,
				'notetypes' => $cur_notetype_list,
			);

			$send_data['notes_data'][] = $new_data;
			
		}

		/*
		$this->load->view('admin/find_notes/pdf-search-table', $send_data, TRUE);

		$data['title'] = 'Find Notes';
		$data['view'] = 'admin/find_notes/pdf-search-table';
		$data['new_data'] = $new_data;
	
		$this->load->view('layout', $data);
		
        */
		
		$dompdf = new Dompdf();

		$clinic_html = $this->load->view('admin/find_notes/pdf-search-table', $send_data, TRUE);

		$dompdf->loadHtml($clinic_html);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4', 'landscape');

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		//$dompdf->stream();
		$dompdf->stream("search_PDF_".date('Y-m-d H:i:s')."_". ".pdf");
		

	}
}
?>