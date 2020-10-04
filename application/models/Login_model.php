<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
	public function getLoginData($username)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->join('division', 'division.id = user.division_id');

		return $this->db->get()->row();
	}
}

/* End of file login.php */
