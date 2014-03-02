<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('auth_model');
		$this->load->model('comm_model');
	}
	public function index()
	{
//		$this->load->helper(array('form','url');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username', 'required|xss_clean');
		$this->form_validation->set_rules('password','Password', 'required|xss_clean');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['error'] = "";
			$this->load->view('home',$data);
		}
		else
		{
			$user=$this->input->post('username');
			$pass=hash('ripemd160',$this->input->post('password'));
		//	$pass = $this->input->post('password');
			
			if($this->auth_model->isMember($user,$pass))
			{	
				$data['message'] = "";
				$this->load->view('header');	
				$this->load->view('useradmin',$data);
			}
			else
			{
				$data['error'] = "Wrong Credentials";
				$this->load->view('home',$data);
			}
		}
	}
	public function assignComm()
	{
		/*$data['comms'] = $this->comm_model->get_comm();
		$data['mems']=$this->comm_model->get_member();	
		$this->load->view('header');
		$this->load->view('asscomm',$data);*/
		$this->load->library('form_validation');
		
		$data['members']=$this->comm_model->get_member();	
		$data['committees'] = $this->comm_model->get_comm();
		
		$this->load->view('header');
		
		$memberID = $this->input->post('member');
		$committeeID = $this->input->post('committee');
				
	//	if($this->form_validation->run() == FALSE)
	//	{
	//		$data['message'] = "";
	//		$this->load->view('asscomm',$data);
	//	}
	//	else
	//	{
			//if($this->comm_model->exists($name)==FALSE)
	//		{
		$data['message']= "Committee Assigned!";
				$this->comm_model->assCommittee($memberID,$committeeID);
				
				$this->load->view('asscomm',$data);
		//	}
			//else
			//{
			//	$data['message']= "Committee already assigned!";
			//	$this->load->view('asscomm',$data);
				
			//}
			
	//	}
	

	}
	
	public function addMember()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','name', 'required|xss_clean');
		$this->form_validation->set_rules('position','Position', 'required|xss_clean');
		$this->form_validation->set_rules('email','email', 'required|xss_clean');
		$this->form_validation->set_rules('fb','Facebook', 'required|xss_clean');
		$this->form_validation->set_rules('twitter','Twitter Handle', 'required|xss_clean');
		$this->form_validation->set_rules('password','Password', 'required|xss_clean|matches[password2]');
		$this->form_validation->set_rules('password2','Confirmation Password', 'required|xss_clean');
	
		$user = $this->input->post('name');
		$pos = $this->input->post('position');
		$email = $this->input->post('email');
		$fb = $this->input->post('fb');
		$twitter = $this->input->post('twitter');
		$password = $this->input->post('password');

		
		if($this->form_validation->run() == FALSE)
		{
			$data['message'] = "";
			$this->load->view('header');
			$this->load->view('useradmin',$data);
		}
		else
		{

			if($this->auth_model->exists($user))
			{
				$this->auth_model->addMember($user,$pos,$email,$fb,$twitter,$password);
				$data['message'] = "Member Added!";
				$this->load->view('header');
				$this->load->view('useradmin',$data);
			}
			else
			{
				$data['message']= "Member account already exists! ".$email." ".$this->auth_model->exists($user);
				$this->load->view('header');
				$this->load->view('useradmin',$data);
			}	
		}
	}	
}
