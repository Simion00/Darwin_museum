<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Collections extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function index()
		{
			$data['links'] = "<li><a href='homepage'>homepage</a></li>";
			$data['links'] .= "<li><a href='login'>login</a></li>";
			$this->load->view('collections_view', $data);
		}
	}
?>