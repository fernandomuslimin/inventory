<?php


defined('BASEPATH') or exit('No direct script access allowed');

class PageSwitch extends CI_Controller
{
	public function loginPage()
	{
		$this->load->view('login/login');
	}

	public function getSessionData()
	{
		$sessionData = $this->Security_model->getSessionData();
		return $sessionData;
	}

	public function divisionPage()
	{
		$this->Security_model->check_session();
		$activeSession = $this->getSessionData();

		$this->load->view('main/header');
		$this->load->view('main/sidebar', $activeSession);
		$this->load->view('division/body');
		$this->load->view('division/footer');
	}

	public function inventoryPage()
	{
		$this->Security_model->check_session();
		$activeSession = $this->getSessionData();
		$this->load->view('main/header');
		$this->load->view('main/sidebar', $activeSession);
		$this->load->view('inventory/body');
	}

	public function ReqInventoryPage()
	{
		$this->Security_model->check_session();
		$activeSession = $this->getSessionData();
		$this->load->view('main/header');
		$this->load->view('main/sidebar', $activeSession);
		$this->load->view('request/reqInventory');
	}

	public function divisionReqPage()
	{
		$this->Security_model->check_session();
		$activeSession = $this->getSessionData();
		$this->load->view('main/header');
		$this->load->view('main/sidebar', $activeSession);
		$this->load->view('division_req/division_req');
	}
}

/* End of file PageSwitch.php */
