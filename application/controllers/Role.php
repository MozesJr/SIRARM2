<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('role_model'); // Load model
		$this->load->library('form_validation'); // Load library form validation
		$this->template->write_view('sidenavs', 'template/default_sidenavs', true);
		$this->template->write_view('navs', 'template/default_topnavs.php', $data, true);
	}

	// Menampilkan semua role
	public function index()
	{
		$data['roles'] = $this->role_model->get_all_roles();

		// Mengambil jenis pesan dari session
		$data['alert_type'] = $this->session->flashdata('alert_type');
		$data['alert_message'] = $this->session->flashdata('alert_message');

		$this->template->write('title', 'Role Management', TRUE);
		$this->template->write('header', 'SIRARM');
		$this->template->write_view('content', 'role/index', $data, true);
		$this->template->render();
	}

	// Menambahkan role
	public function add()
	{
		$this->form_validation->set_rules('role_name', 'Role Name', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('role/add');
		} else {
			// Panggil model untuk menambahkan role
			$result = $this->role_model->add_role();

			if ($result == TRUE) {
				$this->session->set_flashdata('alert_type', 'success');
				$this->session->set_flashdata('alert_message', 'Role added successfully.');
			}

			redirect('role');
		}
	}

	// Mengedit role
	public function edit($id)
	{
		$this->form_validation->set_rules('role_name', 'Role Name', 'required');

		if ($this->form_validation->run() == FALSE) {
			// Mengambil data role berdasarkan ID
			$data['role'] = $this->role_model->get_role_by_id($id);
			$this->load->view('role/edit', $data);
		} else {
			// Panggil model untuk mengedit role
			$result = $this->role_model->edit_role($id);

			if ($result == TRUE) {
				$this->session->set_flashdata('alert_type', 'success');
				$this->session->set_flashdata('alert_message', 'Role updated successfully.');
			}

			redirect('role');
		}
	}

	// Menghapus role
	public function delete($id)
	{
		// Panggil model untuk menghapus role
		$result = $this->role_model->delete_role($id);

		if ($result == TRUE) {
			$this->session->set_flashdata('alert_type', 'success');
			$this->session->set_flashdata('alert_message', 'Role deleted successfully.');
		}

		redirect('role');
	}
}
