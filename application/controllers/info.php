<?php

class Info extends CI_Controller {

	function index()
	{
		phpinfo();
	}

	public function test_date()
	{
		$this->load->helper('date');

		echo date_mysql();
	}

	public function ci_version()
	{
		echo CI_VERSION; // echoes something like 1.7.1
	}
	
	public function test_readJson()
	{
		$path = BASEPATH. "../application/logs/stat/test.json";
		//$path = "/Applications/MAMP/htdocs/visasmart_dev/application/logs/stat/test.json";
		//echo $path;
		$string = file_get_contents($path);
		//echo $string;
		$json_a=json_decode($string,true);
		//echo  $json_a['John'][status];
		//echo  $json_a['Jennifer'][status];

		$jsonIterator = new RecursiveIteratorIterator(
		    new RecursiveArrayIterator(json_decode($string, TRUE)),
		    RecursiveIteratorIterator::SELF_FIRST);

		foreach ($jsonIterator as $key => $val) {
		    if(is_array($val)) {
		        echo "$key:<br />";
		    } else {
		        echo "$key => $val<br />";
		    }
		}

		return;
	}

	public function test_readJson2()
	{
		$path = BASEPATH. "../application/logs/stat/test.json";
		$string = file_get_contents($path);
		$json_a = json_decode($string, true);

		foreach ($json_a as $person_name => $person_a) {
		    echo $person_a['status'];
		}
	}

	public function test_readJson3()
	{
		$path = BASEPATH. "../application/logs/stat/test.json";
		$string = file_get_contents($path);
		$json = json_decode($string, true);

		foreach ($json as $key => $row) {
		    echo $row['status'];
		}
	}

	public function md5_test($value='')
	{
		echo md5($value);
	}

	public function sha1_test($value='')
	{
		echo "->$value<-<br />";
		echo sha1($value) . "<br />";

		$this->load->library('encrypt');
		echo $this->encrypt->sha1($value) . "<br />";
	}
	public function sha1_test2($value='')
	{
		$this->load->library('encrypt');
	}

	public function encode($value='')
	{
		$msg = "this is a secret.";
		$this->load->library('encrypt');
		$encoded = $this->encrypt->encode($msg);
		$decoded = $this->encrypt->decode($encoded);

		echo $encoded . "<br />";
		echo $decoded . "<br />";
	}
	public function encode_with_key($mykey='')
	{
		$key = 'hi';
		$msg = "this is a secret.";
		$this->load->library('encrypt');
		$encoded = $this->encrypt->encode($msg, $key);
		
		$decoded = $this->encrypt->decode($encoded, $mykey);

		echo $encoded . "<br />";
		echo $decoded . "<br />";
	}

	public function xss_filter()
	{
		// xss filtering
		$this->input->post('comment', true);
	}

	public function allowed_char($value='')
	{
		echo "You passed me '$value'";
	}
	
	function start(){
		echo 'hi';
	}
	function server()
	{
		print_r($_SERVER);
	}
	
	function db_test()
	{
		$this->load->model('bank_model');
		$ret = $this->bank_model->test();
		print_r($ret);
	}
	
	function db_appdisco_user()
	{
		$this->load->model('appdisco_staff_model');
		$ret = $this->appdisco_staff_model->get_appdisco_user();
		print_r(count($ret));
	}
	
	function char()
	{
		$args = $this->uri->uri_to_assoc(3, $schema);
		extract($args, EXTR_OVERWRITE);
		
		echo $nickname . '<br />';
		echo htmlspecialchars_decode($nickname) . '<br />';
		echo mb_convert_encoding($nickname,'HTML-ENTITIES','utf-8') . '<br />';
		echo '%EB%A9%B4%EC%9A%B0' . '<br />';
		
		
	}
	
	function ctime()
	{
		$date = new DateTime(date(), new DateTimeZone('Asia/Seoul'));
		echo $date->format('Y-m-d H:i:s') . "\n";
		
		return;
		
		$now = date("Y-m-d H:i:s");
		echo $now;
	}
	function sayHi(){
		echo "HI";
	}
}