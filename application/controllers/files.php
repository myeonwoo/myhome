<?php

class Files extends CI_Controller {

	var $file;
	var $path;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('file');
		$this->load->helper('download');
		$this->path = "application" . DIRECTORY_SEPARATOR . "test_files" . DIRECTORY_SEPARATOR;
		$this->file = $this->path . "hello.txt";
	}


	public function write_test()
	{
		$data = "Hello World";
		write_file($this->file, $data);
		echo "finished writing";
	}

	public function read_test()
	{
		echo read_file($this->file);
	}

	public function filename_test()
	{
		$files = get_filenames($this->path, true);
		print_r($files);
	}

	public function dir_file_info_test()
	{
		$files = get_dir_file_info($this->path);
		print_r($files);
	}

	public function file_info_test()
	{
		$info = get_file_info($this->file);
		print_r($info);
	}

	public function mime_test()
	{
		echo get_mime_by_extension($this->file) . "<br />";
		echo get_mime_by_extension('hello.png') . "<br />";
	}

	public function download_test()
	{
		$string = "hello";	
		force_download('foo.txt', $string);
	}

	public function test()
	{ 
		echo "DIRECTORY_SEPARATOR  ==>  ". DIRECTORY_SEPARATOR . "<br />";
		echo "APPPATH  ==>  ". APPPATH . "<br />";
		echo "BASEPATH  ==>  ". BASEPATH . "<br />";
		echo "DIRECTORY_SEPARATOR  ==>  ". DIRECTORY_SEPARATOR . "<br />";
	}
}












