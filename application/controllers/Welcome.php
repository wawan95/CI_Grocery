<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}


	public function index()
	{
		// $this->load->view('welcome');
		echo("<h1>Welcom to codeigniter</h1>");
		die();
	}

	public function employees()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('employees');
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}
	function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
		
	}
}
