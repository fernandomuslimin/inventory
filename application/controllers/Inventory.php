<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Inventory extends CI_Controller
{

	public function index()
	{
	}

	public function addInventory()
	{
		$this->Security_model->check_session();
		$format = 'Y-m-d H:i:s';
		date_default_timezone_set('Asia/Jakarta');

		$goodsName = $this->input->post('goodsName');
		$brand = $this->input->post('brandName');
		$goodsType = $this->input->post('goodsType');
		$quantity = $this->input->post('quantity');
		$unit = $this->input->post('unit');
		$price = $this->input->post('price');

		$data = [
			'goods_name' => $goodsName,
			'brand' => $brand,
			'goods_type' => $goodsType,
			'quantity' => $quantity,
			'unit' => $unit,
			'price' => $price,
			'created_at' => date($format)
		];

		$this->load->model('Inventory_model', 'im');

		$result = $this->im->addinventory($data);
		$res = null;

		if ($result) {
			$res = [
				'msg_head' => 'Success',
				'msg_body' => 'Data has been added successfully',
				'msg_type' => 'success',
				'sg' => $result
			];
		} else {
			$res = [
				'msg_head' => 'Failed',
				'msg_body' => 'Failed to add data',
				'msg_type' => 'error'
			];
		}

		echo json_encode($res);
	}

	public function getAllInventory()
	{
		$this->Security_model->check_session();
		$this->load->model('Inventory_model', 'im');

		$inventoryList = $this->im->getAllInventory();
		$res = null;

		if ($inventoryList > 0) {
			$res = $inventoryList;
		} else {
			$res = [
				"status" => false,
				"msg_head" => "Failed",
				"msg_body" => "Failed failed to add data",
				"msg_type" => "error"
			];
		}

		echo json_encode($res);
	}

	public function getInventoryById($id)
	{
		$this->Security_model->check_session();
		$this->load->model('Inventory_model', 'im');
		$result = $this->im->getInventoryById($id);

		$res = null;

		if ($result) {
			$res = $result;
		} else {
			$res = [
				'msg_head' => 'Failed',
				'msg_body' => 'Failed to get data',
				'msg_type' => 'error'
			];
		}

		echo json_encode($res);
	}

	public function deleteInventory($id)
	{
		$this->Security_model->check_session();
		$this->load->model('Inventory_model', 'im');

		$result = $this->im->deleteInventory($id);
		$res = null;

		if ($result) {
			$res = [
				'msg_head' => 'Success',
				'msg_body' => 'Data has been deleted',
				'msg_type' => 'success'
			];
		} else {
			$res = [
				'msg_head' => 'Failed',
				'msg_body' => 'Failed to delete data',
				'msg_type' => 'error'
			];
		}

		echo json_encode($res);
	}

	public function editSelectedInventory($id)
	{
		$this->Security_model->check_session();
		$format = 'Y-m-d H:i:s';
		date_default_timezone_set('Asia/Jakarta');

		$goodsName = $this->input->post('goodsName');
		$brand = $this->input->post('brandName');
		$goodsType = $this->input->post('goodsType');
		$quantity = $this->input->post('quantity');
		$unit = $this->input->post('unit');
		$price = $this->input->post('price');

		$data = [
			'goods_name' => $goodsName,
			'brand' => $brand,
			'goods_type' => $goodsType,
			'quantity' => $quantity,
			'unit' => $unit,
			'price' => $price,
			'updated_at' => date($format)
		];

		$this->load->model('Inventory_model', 'im');

		$result = $this->im->updateSelectedInventory($id, $data);

		if ($result) {
			$res = [
				'msg_head' => 'Success',
				'msg_body' => 'Data has been updated',
				'msg_type' => 'success'
			];
		} else {
			$res = [
				'msg_head' => 'Failed',
				'msg_body' => 'Failed to update data',
				'msg_type' => 'error'
			];
		}

		echo json_encode($res);
	}
}

/* End of file Inventory.php */
