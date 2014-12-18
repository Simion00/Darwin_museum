<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	session_start(); //we need to call PHP's session object to access it through CI
	class Home extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		 
		function index()
		{
			if($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['e_mailadres'] = $session_data['e_mailadres'];
				$data['gebruikers_rol'] = $session_data['gebruikers_rol'];
				if ($data['gebruikers_rol'] == 'admin')
				{
					$data['links'] = "<li><a href='artefacten_muteren'>artefacten_muteren</a></li>";
				}
				else if ($data['gebruikers_rol'] == 'verkoper')
				{
					$data['links'] = "<li><a href='verkoper/sell'>sell</a></li>";
				}
				else if ($data['gebruikers_rol'] == 'reisbeheerder')
				{
					$data['links'] = "<li><a href='artefacten_muteren'>artefacten_muteren</a></li>";
					$data['links'] .= "<li><a href='ligplaats_selecteren'>ligplaats_selecteren</a></li>";
				}
				else if ($data['gebruikers_rol'] == 'manager')
				{
					$data['links'] = "<li><a href='manager/get_visitors'>visitors</a></li>";
					$data['links'] .= "<li><a href='manager/get_reservations'>reservations</a></li>";
					$data['links'] .= "<li><a href='manager/weekoverview'>weekoverview</a></li>";
					$data['links'] .= "<li><a href='manager/get_woonplaats'>get_woonplaats</a></li>";
				}
				else if ($data['gebruikers_rol'] == 'systeembeheerder')
				{
					$data['links'] = "<li><a href='blocked_overzicht'>blocked_overzicht</a></li>";
					$data['links'] .= "<li><a href='ever_blocked_overzicht'>ever_blocked_overzicht</a></li>";
					$data['links'] .= "<li><a href='log_overzicht'>log_overzicht</a></li>";
				}
				else
				{
					$data['links'] = "<li><a href='homepage'>homepage</a></li>";
				}
				$data['links'] .= "<li><a href='home/logout'>Logout</a></li>";
				$this->load->view('home_view', $data);
			}
			else
			{
				//If no session, redirect to login page
				redirect('login', 'refresh');
			}
		}
		 
		function logout()
		{
			$this->session->unset_userdata('logged_in');
			session_destroy();
			redirect('home', 'refresh');
		}
	}
?>