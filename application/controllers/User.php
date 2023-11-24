<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model'); // Load model
		$this->load->model('role_model');
		$this->load->library('form_validation'); // Load library form validation
		$this->template->write_view('sidenavs', 'template/default_sidenavs', true);
		$this->template->write_view('navs', 'template/default_topnavs.php', $data, true);
	}

	// Menampilkan semua user
	public function index()
	{
		$data['users'] = $this->user_model->get_all_users();
		$data['roles'] = $this->role_model->get_all_roles();
		$this->template->write('title', 'User Management', TRUE);
		$this->template->write('header', 'SIRARM');
		$this->template->write_view('content', 'user/index', $data, true);
		$this->template->render();
	}

	// Menambahkan user
	public function add()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('real_name', 'Real Name', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('user/add');
		} else {
			// Panggil model untuk menambahkan user
			$result = $this->user_model->add_user();

			if ($result) {
				$this->session->set_flashdata('alert_type', 'success');
				$this->session->set_flashdata('alert_message', 'User added successfully.');
			} else {
				$this->session->set_flashdata('alert_type', 'error');
				$this->session->set_flashdata('alert_message', 'Failed to add user.');
			}

			redirect('user');
		}
	}

	// Mengedit user
	public function edit($id)
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('real_name', 'Real Name', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');

		if ($this->form_validation->run() == FALSE) {
			// Mengambil data user berdasarkan ID
			$data['user'] = $this->user_model->get_user_by_id($id);
			$this->load->view('user/edit', $data);
		} else {
			// Panggil model untuk mengedit user
			$result = $this->user_model->edit_user($id);

			if ($result) {
				$this->session->set_flashdata('alert_type', 'success');
				$this->session->set_flashdata('alert_message', 'User updated successfully.');
			} else {
				$this->session->set_flashdata('alert_type', 'error');
				$this->session->set_flashdata('alert_message', 'Failed to update user.');
			}

			redirect('user');
		}
	}

	// Menghapus user
	public function delete($id)
	{
		// Panggil model untuk menghapus user
		$result = $this->user_model->delete_user($id);

		if ($result) {
			$this->session->set_flashdata('alert_type', 'success');
			$this->session->set_flashdata('alert_message', 'User deleted successfully.');
		} else {
			$this->session->set_flashdata('alert_type', 'error');
			$this->session->set_flashdata('alert_message', 'Failed to delete user.');
		}

		redirect('user');
	}
}
