<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Blocked_overzicht extends CI_Controller
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
			$this->load->view('blocked_overzicht_view', $data);
		}
		
		function blocked_table()
		{
			//query the database
			$result = $this->darwin->all_blocked();
			
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
						<td>
							<a href='blocked_overzicht/update_database/".$row->gebruikernr."'>
								<img src='../assets/images/drop.png' alt='drop' />
							</a>
						</td>
					</tr>";
				}
				return $table;
			}
			else
			{
				return "table error please teport this in the faq as soon as posible";
			}
		}
		
		function update_database($gebruikernr)
		{
			//query the database
			$user = $this->darwin->get_user_blocked_overzicht($gebruikernr);
			//Field validation succeeded.&nbsp; Validate against database
			foreach($user as $row)
			{
				$data = array(
				   'gebruikernr' => $row->gebruikernr, 
				   'voornaam' => $row->voornaam, 
				   'tussenvoegsel' => $row->tussenvoegsel, 
				   'achternaam' => $row->achternaam, 
				   'e_mailadres' => $row->e_mailadres, 
				   'wachtwoord' => $row->wachtwoord, 
				   'gebruikers_rol' => $row->gebruikers_rol, 
				   'blocked' => 0, 
				   'geblocked' => $row->geblocked
				);
				//query the database
				$this->darwin->update_login($data);
			}
			redirect('blocked_overzicht', 'refresh');
		}
	}
?>