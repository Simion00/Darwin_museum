<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Visit extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function index()
		{
			$data['links'] = "<li><a href='homepage'>homepage</a></li>";
			$data['links'] .= "<li><a href='login'>login</a></li>";
			$data['links'] .= "<li><a href='collections'>collections</a></li>";
			$this->load->view('visit_view', $data);
		}
	}
?>