<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class VerifyRegister extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('darwin','',TRUE);
		}
		
		function index()
		{
			//This method will have the credentials validation
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('voornaam', 'voornaam', 'trim|required|xss_clean');
			$this->form_validation->set_rules('tussenvoegsel', 'tussenvoegsel', 'trim|xss_clean');
			$this->form_validation->set_rules('achternaam', 'achternaam', 'trim|required|xss_clean');
			$this->form_validation->set_rules('e_mailadres', 'e_mailadres', 'trim|required|xss_clean|callback_check_e_mailadres_database');
			$this->form_validation->set_rules('wachtwoord', 'wachtwoord', 'trim|required|xss_clean');
			$this->form_validation->set_rules('gebruikers_rol', 'gebruikers_rol', 'trim|required|xss_clean');
			
			if($this->form_validation->run() == FALSE)
			{
				//Field validation failed.&nbsp; User redirected to register page
				$this->load->view('register_view');
			}
			else
			{
				//Go to login
				$this->insert_into_database();
				redirect('login', 'refresh');
			}
		}
		
		function check_e_mailadres_database()
		{
			//Field validation succeeded.&nbsp; Validate against database
			$e_mailadres = $this->input->post('e_mailadres');
			
			//query the database
			$result = $this->darwin->check_e_mailadres($e_mailadres);
			
			if($result)
			{
				return TRUE;
			}
			else
			{
				$this->form_validation->set_message('check_e_mailadres_database', 'Dit e-mailadres is al in gebruik');
				return false;
			}
		}
		
		function insert_into_database()
		{
			//Field validation succeeded.&nbsp; Validate against database
			$data = array(
			   'gebruikernr' => 'NULL', 
			   'voornaam' => $this->input->post('voornaam'), 
			   'tussenvoegsel' => $this->input->post('tussenvoegsel'), 
			   'achternaam' => $this->input->post('achternaam'), 
			   'e_mailadres' => $this->input->post('e_mailadres'), 
			   'wachtwoord' => MD5($this->input->post('wachtwoord')), 
			   'gebruikers_rol' => $this->input->post('gebruikers_rol'), 
			   'blocked' => 'NULL'
			);
			
			//query the database
			$this->darwin->register($data);
		}
	}
?>