<?php
	class Comm_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}
		public function exists($name)
		{
			return	$this->db->simple_query("SELECT * FROM committee where commname ='".$name."'");
		}	
		
		public function get_member()
		{
			$sql = "SELECT * FROM Member";
			return $this->db->query($sql);	
		}
		public function get_comm()
		{
			$sql = "SELECT * FROM committee";
			return $this->db->query($sql);	
		}
		public function assCommittee($memberID,$committeeID)
		{	
			$sql = "INSERT into committeeassignment (memberID,committeeID) VALUES (?,?)";
			$this->db->query($sql, array($memberID,$committeeID));
		}
	//
		public function addCommittee($name,$function,$memberID,$eventID)
		{	
			$sql = "INSERT into committee (commname,function,head,eventID) VALUES (?,?,?,?)";
			$this->db->query($sql, array($name,$function,$memberID,$eventID));
		}
	}	

