<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Login extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function index()
		{
			$data['links'] = "<li><a href='homepage'>homepage</a></li>";
			$data['links'] .= "<li><a href='collections'>collections</a></li>";
			$data['links'] .= "<li><a href='visit'>visit</a></li>";
			$this->load->helper(array('form'));
			$this->load->view('login_view', $data);
		}
	}
?>