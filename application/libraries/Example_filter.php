<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Example_filter
{

	public function __construct()
	{
		$this->CI = &get_instance();
	}

	public function check_auth()
	{
		// Cek apakah pengguna sudah login
		if (!$this->CI->session->userdata('user')) {
			// Redirect ke halaman login jika belum login
			redirect('auth');
		}
	}
}
