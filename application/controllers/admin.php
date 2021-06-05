<?php
defined('BASEPATH') OR exit('No direct script access allowed');

error_reporting(E_ALL);

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('htmltopdf_model');
		$this->load->library('pdf');
	}

	public function index()
	{	
		$this->load->view('admin/login');
	}

    public function dashboard()
	{	
		$this->load->view('admin/dashboard');
	}
    public function viewgroup()
	{	
		$this->load->view('admin/viewgroup');
	}
    public function addgroup()
	{	
		$this->load->view('admin/addgroup');
	}
}
