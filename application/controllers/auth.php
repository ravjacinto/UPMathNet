<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('auth_model');
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
		//	$pass=hash('ripemd160',$this->input->post('password'));
			$pass = $this->input->post('password');
			
			if($this->auth_model->isMember($user,$pass))
			{
				$data['message'] = "";
				$this->load->view('useradmin',$data);
			}
			else
			{
				$data['error'] = "Wrong Credentials";
				$this->load->view('home',$data);
			}
		}
	}
	public function addMember ()
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
			$this->load->view('useradmin',$data);
		}
		else
		{
			if(!$this->auth_model->exists($email,$user))
			{
			$this->auth_model->addMember($user,$pos,$email,$fb,$twitter,$password);
			$data['message'] = "Member Added!";
			$this->load->view('useradmin',$data);
			}
			else
			{
			$data['message']= "Member account already exists!";
			$this->load->view('useradmin',$data);
			}	
		}
	}	
}
