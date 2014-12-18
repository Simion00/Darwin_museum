<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Homepage extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function index()
		{
			$data['links'] = "<li><a href='login'>login</a></li>";
			$data['links'] .= "<li><a href='collections'>collections</a></li>";
			$data['links'] .= "<li><a href='trip'>trip</a></li>";
			$data['links'] .= "<li><a href='booking/reservate'>reservate</a></li>";
			$this->load->view('homepage_view', $data);
		}
	}
?>