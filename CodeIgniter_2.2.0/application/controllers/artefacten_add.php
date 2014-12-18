<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Artefacten_add extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('trip_model','',TRUE);
		}
		
		function index()
		{
			$this->load->helper(array('form', 'url'));
			$this->load->view('artefacten_add_view');
		}
	}
?>