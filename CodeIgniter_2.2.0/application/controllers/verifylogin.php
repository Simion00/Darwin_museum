<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class VerifyLogin extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('darwin','',TRUE);
			$this->load->helper('date');
		}
		
		function index()
		{
			//This method will have the credentials validation
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('e_mailadres', 'e_mailadres', 'trim|required|xss_clean');
			$this->form_validation->set_rules('wachtwoord', 'wachtwoord', 'trim|required|xss_clean|callback_check_database');
			
			if($this->form_validation->run() == FALSE)
			{
				//Field validation failed.&nbsp; User redirected to login page
				$data['links'] = "<li><a href='homepage'>homepage</a></li>";
				$data['links'] .= "<li><a href='collections'>collections</a></li>";
				$data['links'] .= "<li><a href='visit'>visit</a></li>";
				$this->load->helper(array('form'));
				$this->load->view('login_view', $data);
			}
			else
			{
				//Go to private area
				redirect('home', 'refresh');
			}
		}
		
		function check_database($wachtwoord)
		{
			//Field validation succeeded.&nbsp; Validate against database
			$e_mailadres = $this->input->post('e_mailadres');
			
			//query the database
			$result = $this->darwin->login($e_mailadres, $wachtwoord);
			
			//date - time
			$datestring = "Year: %Y Month: %m Day: %d";
			$timestring = "%h:%i %a";
			$time = time();
			
			//log
			$filename = '/log.txt';
			$file = 'log.txt';
			if (!file_exists($filename))
			{
				$content = "log file";
				$fp = fopen("/log.txt","wb");
				fwrite($fp, $content);
				fclose($fp);
			}
			
			if($result > 0)
			{
				$sess_array = array();
				foreach($result as $row)
				{
					$sess_array = array(
						'gebruikernr' => $row->gebruikernr, 
						'e_mailadres' => $row->e_mailadres, 
						'gebruikers_rol' => $row->gebruikers_rol
					);
					$this->session->set_userdata('logged_in', $sess_array);
				}
				
				//log
				// The new person to add to the file + next line
				foreach($result as $row)
				{
					$person = "voornaam = ".$row->voornaam." ".
								"tussenvoegsel = ".$row->tussenvoegsel." ".
								"achternaam = ".$row->achternaam." ".
								"e_mailadres = ".$row->e_mailadres." ".
								"gebruikers_rol = ".$row->gebruikers_rol." ".
								"datum = ".mdate($datestring, $time)." ".
								"tijd = ".mdate($timestring, $time)." ".
								"status = succesvol ".PHP_EOL;
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
				// Write the contents to the file, 
				// using the FILE_APPEND flag to append the content to the end of the file
				// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
				file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
				
				return TRUE;
			}
			else
			{
				//query the database
				$result_email = $this->darwin->check_e_mailadres_login($e_mailadres);
				if($result_email)
				{
					$result_wachtwoord = $this->darwin->check_wachtwoord($e_mailadres, $wachtwoord);
					if($result_wachtwoord)
					{
						$this->form_validation->set_message('check_database', "Dit account is geblokeerd");
						
						//query the database
						$result_user_blocked = $this->darwin->get_user_blocked($e_mailadres);
						
						//log
						// The new person to add to the file + next line
						foreach($result_user_blocked as $row)
						{
							$person = "voornaam = ".$row->voornaam." ".
										"tussenvoegsel = ".$row->tussenvoegsel." ".
										"achternaam = ".$row->achternaam." ".
										"e_mailadres = ".$row->e_mailadres." ".
										"gebruikers_rol = ".$row->gebruikers_rol." ".
										"datum = ".mdate($datestring, $time)." ".
										"tijd = ".mdate($timestring, $time)." ".
										"status = blocked ".PHP_EOL;
						}
						// Write the contents to the file, 
						// using the FILE_APPEND flag to append the content to the end of the file
						// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
						file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
						
						return false;
					}
					else
					{
						//query the database
						$result_user = $this->darwin->get_user($e_mailadres);
						if($result_user)
						{
							$this->form_validation->set_message('check_database', "Dit wachtwoord = ".$wachtwoord." is ongeldig");
							
							//log
							// The new person to add to the file + next line
							foreach($result_user as $row)
							{
								$person = "voornaam = ".$row->voornaam." ".
											"tussenvoegsel = ".$row->tussenvoegsel." ".
											"achternaam = ".$row->achternaam." ".
											"e_mailadres = ".$row->e_mailadres." ".
											"wachtwoord = ".$wachtwoord." ".
											"gebruikers_rol = ".$row->gebruikers_rol." ".
											"datum = ".mdate($datestring, $time)." ".
											"tijd = ".mdate($timestring, $time)." ".
											"status = errorW ".PHP_EOL;
								$blocked = (int)$row->blocked + 1;
								$geblocked = $row->geblocked;
								if ($blocked == 3)
								{
									$geblocked = 1;
								}
								$data = array(
									'gebruikernr' => $row->gebruikernr, 
									'voornaam' => $row->voornaam, 
									'tussenvoegsel' => $row->tussenvoegsel, 
									'achternaam' => $row->achternaam, 
									'e_mailadres' => $row->e_mailadres, 
									'wachtwoord' => $row->wachtwoord, 
									'gebruikers_rol' => $row->gebruikers_rol, 
									'blocked' => $blocked, 
									'geblocked' => $geblocked
								);
								
								//query the database
								$this->darwin->update_login($data);
							}
							// Write the contents to the file, 
							// using the FILE_APPEND flag to append the content to the end of the file
							// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
							file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
							
							return false;
						}
						else
						{
							$this->form_validation->set_message('check_database', "Dit account is geblokeerd");
							
							//query the database
							$result_user_blocked = $this->darwin->get_user_blocked($e_mailadres);
							
							//log
							// The new person to add to the file + next line
							foreach($result_user_blocked as $row)
							{
								$person = "voornaam = ".$row->voornaam." ".
											"tussenvoegsel = ".$row->tussenvoegsel." ".
											"achternaam = ".$row->achternaam." ".
											"e_mailadres = ".$row->e_mailadres." ".
											"gebruikers_rol = ".$row->gebruikers_rol." ".
											"datum = ".mdate($datestring, $time)." ".
											"tijd = ".mdate($timestring, $time)." ".
											"status = blocked ".PHP_EOL;
							}
							// Write the contents to the file, 
							// using the FILE_APPEND flag to append the content to the end of the file
							// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
							file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
							
							return false;
						}
					}
				}
				else
				{
					$this->form_validation->set_message('check_database', "Dit e-mailadres = ".$e_mailadres." is ongeldig");
					
					//log
					// The new person to add to the file + next line
					$person = "voornaam = onbekend tussenvoegsel = onbekend achternaam = onbekend e_mailadres = ".$e_mailadres." gebruikers_rol = onbekend ".
								"datum = ".mdate($datestring, $time)." ".
								"tijd = ".mdate($timestring, $time)." status = errorE ".PHP_EOL;
					// Write the contents to the file, 
					// using the FILE_APPEND flag to append the content to the end of the file
					// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
					file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
					
					return false;
				}
				$this->form_validation->set_message('check_database', "Dit is een ongebruikenlijke error contact de admin zo snell als mogenlijk");
				return false;
			}
		}
	}
?>