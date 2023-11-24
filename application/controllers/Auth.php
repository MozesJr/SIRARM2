<?php
class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->auth_model->login($username, $password);

		if ($user) {
			$this->session->set_userdata('user', $user);
			redirect('example'); // Ganti 'dashboard' dengan URL halaman setelah login
		} else {
			$data['error'] = 'Invalid username or password';
			$this->load->view('login', $data);
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user');
		redirect('auth');
	}
}
