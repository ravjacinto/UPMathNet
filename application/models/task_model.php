<?php
	class Task_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}
		
		public function exists($name)
		{

			return	$this->db->simple_query("SELECT * FROM task WHERE taskname ='.$name.'");
		}	
	
		public function get_tasks()
		{
			$sql = "SELECT * FROM task";
			return $this->db->query($sql);	
		}
		public function assignTask($memberID,$taskID)
		{	
			$sql = "INSERT into taskassignment (taskID,memberID) VALUES (?,?)";
			$this->db->query($sql, array($taskID,$memberID));
		}
		public function addTask($name,$description,$eventID)
		{	
			$sql = "INSERT into task (taskname,description,progress,error,clarifications,status,eventID) VALUES (?,?,?,?,?,?,?)";
			$this->db->query($sql, array($name,$description,0.0,"none","none","designated",$eventID));
		}
	}	

