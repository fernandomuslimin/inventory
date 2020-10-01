<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Model
{
	public function getLoginData($username)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);

		return $this->db->get()->row();
	}
}

/* End of file login.php */
