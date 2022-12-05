<?php

/**
 * Description of Export Controller
 * @author Hadson Paredes
 * @email  info@hadsonpar.com
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{
	// declare private variable
	private $_userID;
	private $_name;
	private $_userName;
	private $_email;
	private $_password;
	private $_status;

	public function setUserID($userID)
	{
		$this->_userID = $userID;
	}
	public function setName($name)
	{
		$this->_name = $name;
	}
	public function setUserName($userName)
	{
		$this->_userName = $userName;
	}
	public function setEmail($email)
	{
		$this->_email = $email;
	}
	public function setPassword($password)
	{
		$this->_password = $password;
	}
	public function setStatus($status)
	{
		$this->_status = $status;
	}

	//function create User
	public function createUser()
	{
		$data = array(
			'name' => $this->_name,
			'email' => $this->_email,
			'user_name' => $this->_userName,
			'password' => $this->_password,
			'status' => $this->_status,
		);
		$this->db->insert('user', $data);
		return $this->db->insert_id();
	}
}