<?php
	Class Trip_model extends CI_Model
	{
		function ship()
		{
			$this -> db -> select('naam, afbeelding, lengte, breedte, diepgang, omschrijving, kapitein');
			$this -> db -> from('ship');
			
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
		
		function all_ligplaatsen()
		{
			$this -> db -> select('id, naam, afbeelding, omschrijving');
			$this -> db -> from('ligplaatsen');
			
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
		
		function all_artefacten()
		{
			$this -> db -> select('id, naam, omschrijving, geologische_perioden, aanschafdatum, afbeelding, zaal, locatie');
			$this -> db -> from('artefacten');
			
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
		
		function get_ligplaats_artefacten($id)
		{
			$this -> db -> select('id, naam, omschrijving, geologische_perioden, aanschafdatum, afbeelding, zaal, locatie');
			$this -> db -> from('artefacten');
			$this -> db -> where('locatie', $id);
			
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
		
		function get_artefacten($id)
		{
			$this -> db -> select('id, naam, omschrijving, geologische_perioden, aanschafdatum, afbeelding, zaal, locatie');
			$this -> db -> from('artefacten');
			$this -> db -> where('id', $id);
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
		
		function update_artefacten($data)
		{
			$this->db->where('id', $data['id']);
			$this->db->update('artefacten', $data);
		}
		
		function remove_artefacten($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->delete('artefacten'); 
			
			if($query)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
		function add_artefacten($data)
		{
			$query = $this->db->insert('artefacten', $data);
		}
	}
?>