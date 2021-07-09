<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanError extends CI_Controller {
  
	public function index()
	{
		$this->load->view('404');
	}
}
