<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model
{
	public function get_current_user($email)
	{
		$query = "SELECT id, name, alias, email, password FROM users WHERE email = ?";
		$value = array($email);
		return $this->db->query($query, $value)->row_array();
	}

	public function add_user($user)
	{
		$query = "INSERT INTO users (name, alias, email, password)
			VALUES (?, ?, ?, ?)";
		$value = array($user["name"], $user["alias"], $user["email_address"], $user["password"]);
		return $this->db->query($query, $value);
	}

	public function get_user_id($userid)
	{
		$query = "SELECT id, name, alias, email, password FROM users WHERE id = ?";
		$value = array($userid);
		return $this->db->query($query, $value)->result_array();
	}

}