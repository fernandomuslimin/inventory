<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Req_inventory_model extends CI_Model
{

	public function initInventoryList()
	{
		$this->db->select(['id', 'goods_name']);
		return $this->db->get('master_inventory')->result();
	}

	public function addInventoryOrder($data)
	{
		return $this->db->insert('inventory_order', $data);
	}
}

/* End of file Req_inventory_model.php */
