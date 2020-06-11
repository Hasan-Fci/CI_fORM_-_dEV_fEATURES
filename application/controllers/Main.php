<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		echo "test main <br>";
		$this->test1();
	}

	public function test1(){
		echo "This is test1 function";
	}
}
