<?php


defined('BASEPATH') or exit('No direct script access allowed');

class ReqInventory extends CI_Controller
{

	public function index()
	{
	}

	public function getSessionData()
	{
		$sessionData = $this->Security_model->getSessionData();
		return $sessionData;
	}

	public function initInventoryList()
	{
		$this->load->model('Req_inventory_model', 'rim');

		$inventoryList = $this->rim->initInventoryList();
		$res = null;

		if ($inventoryList > 0) {
			$res = $inventoryList;
		} else {
			$res = [
				'msg_head' => 'Failed',
				'msg_body' => 'Failed to init inventory',
				'msg_type' => 'error'
			];
		}

		echo json_encode($res);
	}

	public function requestinventory()
	{
		$sessData = $this->getSessionData();
		$division_id = $sessData['division_id'];
		$inventory_id = $this->input->post('goodsList');
		$qty = $this->input->post('qty');

		$dateFormat = 'Y-m-d H-i-s';
		date_default_timezone_set('Asia/Jakarta');

		$data = [
			'division_id' => $division_id,
			'master_inventory_id' => $inventory_id,
			'qty' => $qty,
			'created_at' => date($dateFormat)
		];

		$this->load->model('Req_inventory_model', 'rim');

		$result = $this->rim->addInventoryOrder($data);
		$res = null;

		if ($result) {
			$res = [
				'msg_head' => 'Success',
				'msg_body' => 'Request has been submited successfully',
				'msg_type' => 'success',
				'sg' => $result
			];
		} else {
			$res = [
				'msg_head' => 'Failed',
				'msg_body' => 'Failed to submit request',
				'msg_type' => 'error'
			];
		}

		echo json_encode($res);
	}
}

/* End of file ReqInventory.php */
