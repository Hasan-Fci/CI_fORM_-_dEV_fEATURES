<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		// echo "test main <br>";
		// $this->test1();
		$this->load->model('main_model');
		// echo "<br>";
		// echo $this->main_model->test_main();
		$this->load->view('main_view');
	}

	public function test1(){
		echo "This is test1 function";
	}
}
