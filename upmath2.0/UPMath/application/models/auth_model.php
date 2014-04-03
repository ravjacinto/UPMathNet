<?php
	class Auth_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}
		
		//authentication
		public function isMember($email,$pass)
		{	
			$query=$this->db->query("SELECT * FROM member where email ='".$email."'");
			foreach($query->result_array() as $row)
			{
				if($row['password']==$pass) return TRUE;
			}
			return FALSE;
		}
		
		public function getDetails($email)
		{
			return $query=$this->db->query("SELECT * FROM member where email ='".$email."'");
			
		}	
		public function exists($name)
		{
			return	$this->db->simple_query("SELECT * FROM member where name ='".$name."'");
		}	
		public function addMember($name,$pos,$email,$fb,$twitter,$password)
		{	
			$sql = "INSERT into member (name,position,email,fb,twitter,password) VALUES (?,?,?,?,?,?)";
			$password = hash('ripemd160',$password);
			$this->db->query($sql, array($name,$pos,$email,$fb,$twitter,$password));
		}
		public function login($name,$email,$position)
		{
			$this->session->set_userdata( array(
				'name'=>$name,
				'email'=>$email,
				'position'=>$position,
				'isLogged'=>TRUE
			)
			);
		}
}
