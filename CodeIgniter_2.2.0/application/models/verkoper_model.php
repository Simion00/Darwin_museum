<?php
	Class Verkoper_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		function get_ticket_data()
		{
			$query = $this->db->query("SELECT * FROM booking
									   WHERE user_id = '0'
									   AND ticket_id = ".$this->db->insert_id()."");

			return $query->result();

		}
		function add_ticket()
		{
			$now = date('Y-m-d H:i:s');
			
			$ticket = array(
				'user_id' => 0,
				'price' => $this->session->userdata["ticket_data"]["price"], 
				'created_at' => $now
			);
			$this->db->insert('booking', $ticket);
		}
	}
?>