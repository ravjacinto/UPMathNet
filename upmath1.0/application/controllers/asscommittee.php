<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AssignCommittee extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('comm_model');
	}
	public function index()
	{
//		$this->load->helper(array('form','url');
		$this->load->library('form_validation');
	//	$this->form_validation->set_rules('name','name', 'required|xss_clean');
	//	$this->form_validation->set_rules('function','function', 'required|xss_clean');
	

		$data['members']=$this->comm_model->get_member();	
		$data['committees'] = $this->comm_model->get_comm();
		
		$this->load->view('header');

		
		$memberID = $this->input->post('member');
		$committeeID = $this->input->post('committee');

		//
		
		
	//	if($this->form_validation->run() == FALSE)
	//	{
	//		$data['message'] = "";
	//		$this->load->view('asscomm',$data);
	//	}
	//	else
	//	{
			//if($this->comm_model->exists($name)==FALSE)
		//	{
				$this->comm_model->assCommittee($memberID,$committeeID);
				$data['message']= "Committee Assigned";
				$this->load->view('asscomm',$data);
		//	}
			//else
			//{
			//	$data['message']= "Committee exists!";
			//	$this->load->view('comm_create',$data);
				
			//}
			
	//	}
	}
		
}
