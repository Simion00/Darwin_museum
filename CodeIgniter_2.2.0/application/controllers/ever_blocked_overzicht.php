<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Ever_blocked_overzicht extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('darwin','',TRUE);
		}
		
		function index()
		{
			//security
			$session_data = $this->session->userdata('logged_in');
			$data['gebruikers_rol'] = $session_data['gebruikers_rol'];
			if ($data['gebruikers_rol'] != 'systeembeheerder') { redirect('homepage', 'refresh'); }
			//create table
			$data['table'] = $this->blocked_table();
			$this->load->view('ever_blocked_overzicht_view', $data);
		}
		
		function blocked_table()
		{
			//query the database
			$result = $this->darwin->all_ever_blocked();
			
			if($result)
			{
				$table = "";
				foreach($result as $row)
				{
					$table .= "<tr>
						<td>".$row->gebruikernr."</td>
						<td>".$row->voornaam."</td>
						<td>".$row->tussenvoegsel."</td>
						<td>".$row->achternaam."</td>
						<td>".$row->e_mailadres."</td>
						<td>".$row->wachtwoord."</td>
						<td>".$row->gebruikers_rol."</td>
						<td>".$row->blocked."</td>
						<td>".$row->geblocked."</td>
					</tr>";
				}
				return $table;
			}
			else
			{
				return "table error please teport this in the faq as soon as posible";
			}
		}
	}
?>