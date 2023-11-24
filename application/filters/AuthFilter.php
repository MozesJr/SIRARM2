<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthFilter
{

	public function before()
	{
		$CI = &get_instance();
		// Cek apakah pengguna sudah login
		if (!$CI->session->userdata('user')) {
			// Redirect ke halaman login jika belum login
			redirect('auth');
		}
	}

	public function after()
	{
		// Do nothing
	}
}
