<?php
	Class Darwin extends CI_Model
	{
		function login($e_mailadres, $wachtwoord)
		{
			$this -> db -> select('gebruikernr, voornaam, tussenvoegsel, achternaam, e_mailadres, wachtwoord, gebruikers_rol, blocked, geblocked');
			$this -> db -> from('gebruiker');
			$this -> db -> where('e_mailadres', $e_mailadres);
			$this -> db -> where('wachtwoord', MD5($wachtwoord));
			$this -> db -> where('blocked <', 3);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		
		function update_login($data)
		{
			$this->db->where('e_mailadres', $data['e_mailadres']);
			$query = $this->db->update('gebruiker', $data);
			
			if($query)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
		function register($data)
		{
			$this->db->insert('gebruiker', $data);
		}
		
		function check_e_mailadres($e_mailadres)
		{
			$this -> db -> select('e_mailadres');
			$this -> db -> from('gebruiker');
			$this -> db -> where('e_mailadres', $e_mailadres);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
		function check_e_mailadres_login($e_mailadres)
		{
			$this -> db -> select('e_mailadres');
			$this -> db -> from('gebruiker');
			$this -> db -> where('e_mailadres', $e_mailadres);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
		function check_wachtwoord($e_mailadres, $wachtwoord)
		{
			$this -> db -> select('e_mailadres, wachtwoord');
			$this -> db -> from('gebruiker');
			$this -> db -> where('e_mailadres', $e_mailadres);
			$this -> db -> where('wachtwoord', MD5($wachtwoord));
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
		function get_user($e_mailadres)
		{
			$this -> db -> select('gebruikernr, voornaam, tussenvoegsel, achternaam, e_mailadres, wachtwoord, gebruikers_rol, blocked, geblocked');
			$this -> db -> from('gebruiker');
			$this -> db -> where('e_mailadres', $e_mailadres);
			$this -> db -> where('blocked <', 3);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		
		function get_user_blocked($e_mailadres)
		{
			$this -> db -> select('voornaam, tussenvoegsel, achternaam, e_mailadres, gebruikers_rol');
			$this -> db -> from('gebruiker');
			$this -> db -> where('e_mailadres', $e_mailadres);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		
		function all_blocked()
		{
			$this -> db -> select('gebruikernr, voornaam, tussenvoegsel, achternaam, e_mailadres, wachtwoord, gebruikers_rol, blocked, geblocked');
			$this -> db -> from('gebruiker');
			$this -> db -> where('blocked', 3);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		
		function get_user_blocked_overzicht($gebruikernr)
		{
			$this -> db -> select('gebruikernr, voornaam, tussenvoegsel, achternaam, e_mailadres, wachtwoord, gebruikers_rol, blocked, geblocked');
			$this -> db -> from('gebruiker');
			$this -> db -> where('gebruikernr', $gebruikernr);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		
		function all_ever_blocked()
		{
			$this -> db -> select('gebruikernr, voornaam, tussenvoegsel, achternaam, e_mailadres, wachtwoord, gebruikers_rol, blocked, geblocked');
			$this -> db -> from('gebruiker');
			$this -> db -> where('geblocked', 1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		
		function all_artefacten_floor1()
		{
			$this -> db -> select('id, naam, omschrijving, geologische_perioden, aanschafdatum, afbeelding, zaal, locatie');
			$this -> db -> from('artefacten');
			$this -> db -> where("zaal = 1");
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		
		function all_artefacten_floor2()
		{
			$this -> db -> select('id, naam, omschrijving, geologische_perioden, aanschafdatum, afbeelding, zaal, locatie');
			$this -> db -> from('artefacten');
			$this -> db -> where("zaal = 2");
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		
		function all_artefacten_floor3()
		{
			$this -> db -> select('id, naam, omschrijving, geologische_perioden, aanschafdatum, afbeelding, zaal, locatie');
			$this -> db -> from('artefacten');
			$this -> db -> where("zaal = 3");
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
	}
?>