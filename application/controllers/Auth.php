<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function index()
	{
		redirect('PageSwitch/loginPage');
	}

	public function getSessionData()
	{
		$sessionData = $this->Security_model->getSessionData();
		return $sessionData;
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model('Login_model');
		$result = $this->Login_model->getLoginData($username);

		if ($result) {
			if (password_verify($password, $result->password)) {
				if ($result->status == 1) {
					$sess_data = [
						'username' => $result->username,
						'name' => $result->name,
						'email' => $result->email,
						'role' => $result->role,
						'status' => $result->status,
						'division_id' => $result->division_id,
						'division_name' => $result->division_name
					];

					$this->session->set_userdata('session_data', $sess_data);

					$response = ['url' => site_url('PageSwitch/divisionPage'), 'status' => true];

					echo json_encode($response);
				} else {
					$response = array(
						"msg_head" => "Warning!",
						"msg_body" => "Your account is not active",
						"msg_type" => "warning",
						'status' => false
					);
					echo json_encode($response);
				}
			} else {
				$response = array(
					"msg_head" => "Invalid",
					"msg_body" => "Password is not correct",
					"msg_type" => "warning",
					'status' => false
				);

				echo json_encode($response);
			}
		} else {

			$response = array(
				"msg_head" => "Failed",
				"msg_body" => "User is not exist",
				"msg_type" => "error",
				'status' => false
			);

			echo json_encode($response);
			return false;
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}

/* End of file Aut.php */
