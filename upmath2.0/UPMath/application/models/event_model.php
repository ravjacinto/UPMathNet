<?php
	class Event_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}
		
		public function exists($name)
		{
			return	$this->db->simple_query("SELECT * FROM event where name ='".$name."'");
		}	
		
		public function get_events()
		{
			$sql = "SELECT * FROM event";
			return $this->db->query($sql);	
		}
		public function addEvent($name,$date,$desc)
		{	
			$sql = "INSERT into event (name,desiredDate,description) VALUES (?,?,?)";
			$this->db->query($sql, array($name,$date,$desc));
		}
	}	

