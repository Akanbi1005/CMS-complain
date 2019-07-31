<?php
class Page extends CI_Controller {

	public function index()
	{

	    $this->load->view('pages/header');
	    $this->load->view('pages/index');
	    $this->load->view('pages/footer');
	}

}
