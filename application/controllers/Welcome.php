<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$data['contents'] = $this->load->view('user/home', '', true);
        $this->load->view('user/index', $data);

	}
}
