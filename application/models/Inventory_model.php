<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Inventory_model extends CI_Model
{
	public function addInventory($data)
	{
		return $this->db->insert('master_inventory', $data);
	}

	public function getAllInventory()
	{
		return $this->db->get('master_inventory')->result();
	}

	public function getInventoryById($id)
	{
		$this->db->where('id', $id);

		return $this->db->get('master_inventory')->row();
	}

	public function deleteInventory($id)
	{
		$this->db->where('id', $id);

		return $this->db->delete('master_inventory');
	}

	public function updateSelectedInventory($id, $data)
	{
		$this->db->where('id', $id);

		return $this->db->update('master_inventory', $data);
	}
}

/* End of file Inventory_model.php */
