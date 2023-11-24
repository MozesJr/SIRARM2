<?php
class Auth_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', md5($password)); // Sesuaikan dengan metode penyimpanan password yang Anda gunakan
		$query = $this->db->get('users');

		if ($query->num_rows() == 1) {
			return $query->row();
		} else {
			return false;
		}
	}
}
