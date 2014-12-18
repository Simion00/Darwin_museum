<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Verify_artefacten_muteren_form extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('trip_model','',TRUE);
		}
		
		function index()
		{
			//This method will have the credentials validation
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('naam', 'naam', 'trim|required|xss_clean');
			$this->form_validation->set_rules('omschrijving', 'omschrijving', 'trim|required|xss_clean');
			$this->form_validation->set_rules('geologische_perioden', 'geologische_perioden', 'trim|required|xss_clean');
			$this->form_validation->set_rules('aanschafdatum', 'aanschafdatum', 'trim|required|xss_clean');
			$this->form_validation->set_rules('afbeelding', 'afbeelding', 'trim|required|xss_clean');
			$this->form_validation->set_rules('zaal', 'zaal', 'trim|required|xss_clean');
			$this->form_validation->set_rules('locatie', 'locatie', 'trim|required|xss_clean');
			
			if($this->form_validation->run() == FALSE)
			{
				//Field validation failed.&nbsp; User redirected to register page
				$this->load->view('artefacten_muteren_form_view');
			}
			else
			{
				//Go to login
				$this->update_database();
				redirect('artefacten_muteren', 'refresh');
			}
		}
		
		function update_database()
		{
			//Field validation succeeded.&nbsp; Validate against database
			$data = array(
			   'id' => $this->input->post('id'), 
			   'naam' => $this->input->post('naam'), 
			   'omschrijving' => $this->input->post('omschrijving'), 
			   'geologische_perioden' => $this->input->post('geologische_perioden'), 
			   'aanschafdatum' => $this->input->post('aanschafdatum'), 
			   'afbeelding' => $this->input->post('afbeelding'), 
			   'zaal' => $this->input->post('zaal'), 
			   'locatie' => $this->input->post('locatie'), 
			);
			
			//query the database
			$this->trip_model->update_artefacten($data);
		}
	}
?>