<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManageCommittee extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('auth_model');
		$this->load->model('comm_model');
		$this->load->model('event_model');
	}
	public function index()
	{
//		$this->load->helper(array('form','url');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','name', 'required|xss_clean');
		$this->form_validation->set_rules('function','function', 'required|xss_clean');
	

		$data['members']=$this->comm_model->get_member();	
		$data['events'] = $this->event_model->get_events();
		
		$this->load->view('header');

		$name = $this->input->post('name');
		$function = $this->input->post('function');
		$memberID = $this->input->post('member');
		$eventID = $this->input->post('event');

		//
		
		
		if($this->form_validation->run() == FALSE)
		{
			$data['message'] = "";
			$this->load->view('comm_create',$data);
		}
		else
		{
			//if($this->comm_model->exists($name)==FALSE)
			{
				$this->comm_model->addCommittee($name,$function,$memberID,$eventID);
				$data['message']= "Committee Created";
				$this->load->view('comm_create',$data);
			}
			//else
			//{
			//	$data['message']= "Committee exists!";
			//	$this->load->view('comm_create',$data);
				
			//}
			
		}
	}
		
}
