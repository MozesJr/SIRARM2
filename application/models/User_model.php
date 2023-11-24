<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function get_all_users()
	{
		// Menggunakan JOIN untuk mendapatkan informasi role
		$this->db->select('users.id, users.username, users.real_name, role.role_name');
		$this->db->from('users');
		$this->db->join('role', 'users.role = role.id');
		return $this->db->get()->result();
	}

	public function get_user_by_id($id)
	{
		return $this->db->get_where('users', array('id' => $id))->row();
	}

	public function add_user()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'real_name' => $this->input->post('real_name'),
			'role' => $this->input->post('role'),
			'created_at' => date('Y-m-d H:i:s')
		);

		return $this->db->insert('users', $data);
	}

	public function edit_user($id)
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'real_name' => $this->input->post('real_name'),
			'role' => $this->input->post('role'),
			'updated_at' => date('Y-m-d H:i:s')
		);

		$this->db->where('id', $id);
		return $this->db->update('users', $data);
	}

	public function delete_user($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('users');
	}
}
