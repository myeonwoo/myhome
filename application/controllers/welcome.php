<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	function index()
	{
		$this->load->helper('url');
		$this->load->view('welcome_message');
	}

	public function say()
	{
		echo 'hello';
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */