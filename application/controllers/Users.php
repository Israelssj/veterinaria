<?php
/**
 * Description of Export Controller
 * @author Hadson Paredes
 * @email  info@hadsonpar.com
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model', 'user');
	}

	// Dashboard
	public function index()
	{
		$data['title'] = 'Dashboard - Hasonpar';
		$data['metaDescription'] = 'Dashboard';
		$data['metaKeywords'] = 'Dashboard';
		$this->load->view('users/confirmation', $data);
	}

	// Register
	public function register()
	{
		$data['title'] = 'Sign Up - Hadsonpar';
		$data['metaDescription'] = 'SignUp';
		$data['metaKeywords'] = 'SignUp';
		$this->load->view('users/index', $data);
	}

	// Action SignUp
	public function actionSignUp()
	{		
		$this->load->library('form_validation');

		// field name, error message, validation rules
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$this->register();
		} else {
			// post values
			$name = $this->input->post('name');
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			// set post values
			$this->user->setName($name);
			$this->user->setUserName($username);
			$this->user->setEmail($email);
			$this->user->setPassword(MD5($password));
			$this->user->setStatus(1);
			// insert values in database
			$this->user->createUser();
			redirect('users/index');
		}
	}
}