<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header("Content-Type:text/html;charset=utf-8");
class Welcome extends CI_Controller 
{
	function __construct()
	{
        parent::__construct();
	}

	function index()
	{
		$this->load->view('index');
	}
	
	function share()
	{
		$this->load->view('share');
	}
}
