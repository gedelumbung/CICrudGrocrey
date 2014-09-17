<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		/* Standard Libraries */
		$this->load->database();
		$this->load->helper('url');
		/* ------------------ */		
		
		$this->load->add_package_path(APPPATH.'third_party/grocery_crud/');

		$this->output->set_template('custom_cms');		
		
		$this->load->library('grocery_CRUD');	
	}

	function index()
	{
		$this->load->library('grocery_Exceptions');
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('tblmhs');
			$crud->set_subject('Data Mahasiswa');
			$crud->columns('nim','nama','angkatan','jurusan','program');
			
			$crud->render();
			
		}catch(Exception $e){
			$this->grocery_exceptions->show_error($e->getMessage(), $e->getTraceAsString());
		}
	}
	
}
