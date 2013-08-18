<?php

class Home extends CI_Controller {

	function index()
	{
		$this->load->view('template/header_dev');
		$this->load->view('main/home_dev');
		$this->load->view('footer');
	}

	public function dev()
	{
		$this->load->view('template/header_dev');
		$this->load->view('main/home_dev');
		// echo 'hi';
		$this->load->view('template/footer_dev');
	}

	function main()
	{
		$this->load->view('header');
		$this->load->view('main/home');
		$this->load->view('footer');	
	}

	function aboutus()
	{
		$this->load->view('header');
		$this->load->view('aboutus');
		$this->load->view('footer');
	}

}