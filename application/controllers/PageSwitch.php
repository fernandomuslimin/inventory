<?php


defined('BASEPATH') or exit('No direct script access allowed');

class PageSwitch extends CI_Controller
{
	public function loginPage()
	{
		$this->load->view('login/login');
	}

	public function divisionPage()
	{
		$this->load->view('main/header');
		$this->load->view('main/sidebar');
		$this->load->view('division/body');
		$this->load->view('division/footer');
	}

	public function inventoryPage()
	{
		$this->load->view('main/header');
		$this->load->view('main/sidebar');
		$this->load->view('inventory/body');
		$this->load->view('inventory/footer');
	}
}

/* End of file PageSwitch.php */
