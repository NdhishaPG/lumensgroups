<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {

	
	public function index()
	{
		$data['contents'] = $this->load->view('user/about', '', true);
        $this->load->view('user/index', $data);

	}
}
