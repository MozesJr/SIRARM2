<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_model extends CI_Model
{

	public function get_all_roles()
	{
		// Query untuk mendapatkan semua role dari tabel
		$query = $this->db->get('role');
		return $query->result();
	}

	// Menambahkan role
	public function add_role()
	{
		$data = array(
			'role_name' => $this->input->post('role_name'),
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		);

		$result = $this->db->insert('role', $data);
		return $result;
	}

	// Mendapatkan role berdasarkan ID
	public function get_role_by_id($id)
	{
		$query = $this->db->get_where('role', array('id' => $id));
		return $query->row();
	}

	public function edit_role($id)
	{
		$data = array(
			'role_name' => $this->input->post('role_name'),
			'updated_at' => date('Y-m-d H:i:s')
		);

		$this->db->where('id', $id);
		$result = $this->db->update('role', $data);

		return $result; // Return true if success, false if failed
	}

	// Menghapus role
	public function delete_role($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->delete('role');

		return $result; // Return true if success, false if failed
	}
}
