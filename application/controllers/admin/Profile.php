<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('admin/admin_model', 'admin_model');
		$this->load->model('activity_model','activity_model');
	}
	//-------------------------------------------------------------------------
	public function index(){
		if($this->input->post('submit')){
			$data = array(
				'username' => $this->input->post('username'),
				'firstname' => $this->input->post('firstname'),
				'position_title' => $this->input->post('position_title'),
				'email' => $this->input->post('email'),
				'company' => $this->input->post('company'),
				'expertise' => $this->input->post('expertise'),
				'bio' => $this->input->post('bio'),
				'updated_at' => date('Y-m-d H:i:s'),
			);
			$data = $this->security->xss_clean($data);
			$result = $this->admin_model->update_user($data);
			if($result){

				// Add User Activity
				$this->activity_model->add(6);

				$this->session->set_flashdata('msg', 'Profile has been Updated Successfully!');
				redirect(base_url('admin/profile'), 'refresh');
			}
		}
		else{
			$id = $this->session->userdata('admin_id');

			$data['user'] = $this->admin_model->get_user_detail();
			$data['counts'] = $this->admin_model->get_my_counts_notes_by_id ($id);
			$data['title'] = 'Profile';
			$data['view'] = 'admin/profile';
			
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
				$data['user'] = $this->admin_model->get_user_detail();
				$data['view'] = 'admin/profile';
				$this->load->view('layout', $data);
			}
			else{
				$data = array(
					'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
				);
				$data = $this->security->xss_clean($data);
				$result = $this->admin_model->change_pwd($data, $id);
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

			$data['user'] = $this->admin_model->get_user_detail();
			$data['counts'] = $this->admin_model->get_my_counts_notes_by_id ($id);
			$data['title'] = 'User Profile';
			$data['view'] = 'admin/profile';
			$this->load->view('layout', $data);
		}
	}


	public function datatable_json(){		
		$id = $this->session->userdata('admin_id');

		$records = $this->admin_model->get_all_notes_by_id($id);

		$data = array();
		

		


		foreach ($records as $row)
		{
			
			
				$data[] = array(

					'<input type="checkbox" class="chkclass"  value="'. $row['id'] .'">',
					$row['subject'],
					$row['created_at'],
				);
			
				
		}

		$recods["data"] = $data;
	
		echo json_encode($recods);						   
	}

	//-------------------------------------------------------------------------
	public function delete_notes(){
		$ids = $this->input->post('ids');
 
		$records = $this->admin_model->del($ids);

		if ($records)
			echo json_encode(['success'=>"Item Deleted successfully."]);
	}

}

?>	