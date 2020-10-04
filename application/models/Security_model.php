<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Security_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function check_session()
	{
		$session_data = $this->session->userdata('session_data');
		if (empty($session_data)) {
			$this->session->sess_destroy();

			redirect('auth');

			return true;
		}
	}

	public function getSessionData()
	{
		return $this->session->userdata('session_data');
	}
}

/* End of file Security_model.php */
