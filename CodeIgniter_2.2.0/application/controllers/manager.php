<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Manager extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('manager_model','',TRUE);
			$this->load->helper('date');
		}
		
		//first page for the manager to see upon login
		function index()
		{
			redirect('home', 'refresh');
		}
		
		function get_visitors()
		{
			//get reservation data
			$data['reservations'] = $this->manager_model->get_visitors_data();
			//get all the creation dates
			$data['created_at'] = $this->manager_model->get_reservation_dates();
			//load the view
			$this->load->view('visitors', $data);
		}
		
		function show_visitors()
		{
			//get date that was just selected
			$data['visitors'] = $this->manager_model->get_given_date_ticket($_POST);
			//load the view with all the visitors
			$this->load->view("visitors_per_day", $data);
		}
		
		function get_day_data()
		{
			$data['reservations'] = $this->manager_model->get_given_date($_POST);
			$this->load->view("reservations_per_day", $data);

		}
		
		function get_reservations()
		{
			$data['reservations'] = $this->manager_model->get_reservation_data();
			$data['created_at'] = $this->manager_model->get_reservation_dates_only();
			$this->load->view('reservations', $data);
		}
		
		function weekoverview()
		{
			//date - time
			$datestring = "%Y-%m-";
			$day = "%d";
			$time = time();
			$week = mdate($datestring, $time);
			$day_week = mdate($day, $time);
			$day_end = (int)$day_week - 7;
			$week_string = (string)$day_end;
			$week_end = $week. $week_string;
			//get date that was just selected
			$data['visitors'] = $this->manager_model->get_given_date_ticket($week_string);
			//load the view with all the visitors
			$this->load->view("visitors_per_week", $data);
		}
		
		function get_woonplaats()
		{
			//get reservation data
			$data['reservations'] = $this->manager_model->get_visitors_data();
			//get all the creation dates
			$data['created_at'] = $this->manager_model->get_reservation_dates();
			//load the view
			$this->load->view('visitors_woonplaats', $data);
		}
		
		function show_woonplaats_overzicht()
		{
			//get date that was just selected
			$data['visitors'] = $this->manager_model->get_given_date_ticket($_POST);
			//load the view with all the visitors
			$this->load->view("visitors_per_woonplaats", $data);
		}
	}
?>