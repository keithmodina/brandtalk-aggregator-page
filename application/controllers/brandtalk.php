<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brandtalk extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('general_helper');
	}
	
	public function index()
	{
		$this->load->helper('url'); 
		$this->load->view('header');
		$this->load->view('brandtalk/brandtalk_view');
	}
}