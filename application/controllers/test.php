<?php

class Test extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(true);
	}

	function index()
	{
		echo 'fdfd';
	}

	public function show_mysql_date()
	{
		$this->load->helper('date');
		echo '==';
		echo date_mysql();
		echo '==';
	}

	public function form()
	{

		$this->load->library('Form_validation');
		$this->form_validation->test();
		 
	}

}