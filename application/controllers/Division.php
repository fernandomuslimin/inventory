<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Division extends CI_Controller
{

	public function index()
	{
	}

	public function addDivision()
	{
		$this->Security_model->check_session();
		$divisionName = $this->input->post('divisionName');
		$data = [
			'division_name' => $divisionName
		];

		$this->load->model('Division_model');
		$result = $this->Division_model->addDivision($data);

		if ($result) {
			$res = [
				"status" => true,
				"msg_head" => "Success",
				"msg_body" => "Data added successfully",
				"msg_type" => "success"
			];

			echo json_encode($res);
		} else {
			$res = [
				"status" => false,
				"msg_head" => "Failed",
				"msg_body" => "Failed failed to add data",
				"msg_type" => "error"
			];

			echo json_encode($res);
		}
	}

	public function getAllDivision()
	{
		$this->Security_model->check_session();
		$this->load->model('Division_model');
		$divisionList = $this->Division_model->getAllDivision();
		$res = null;

		if ($divisionList > 0) {
			$res = $divisionList;
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

	public function deleteDivision($id)
	{
		$this->Security_model->check_session();
		$this->load->model('Division_model');

		$result = $this->Division_model->deleteDivision($id);

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

	public function getDivisionById($id)
	{
		$this->Security_model->check_session();
		$this->load->model('Division_model');
		$result = $this->Division_model->getDivisionById($id);

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

	public function updateSelectedDivision($id)
	{
		$this->Security_model->check_session();
		$this->load->model('Division_model');

		$divisionName = $this->input->post('divisionName');
		$data = ['division_name' => $divisionName];

		$result = $this->Division_model->updateSelectedDivision($id, $data);

		if ($result) {
			$res = [
				'msg_head' => 'Success',
				'msg_body' => 'Data has been updated',
				'msg_type' => 'success',
				'sg' => $result
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

/* End of file Division.php */
