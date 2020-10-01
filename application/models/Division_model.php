<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Division_model extends CI_Model
{
	public function addDivision($data)
	{
		return $this->db->insert('division', $data);
	}

	public function getAllDivision()
	{
		return $this->db->get('division')->result();
	}

	public function deleteDivision($id)
	{
		$this->db->where('id', $id);

		return $this->db->delete('division');
	}
}

/* End of file Division.php */
