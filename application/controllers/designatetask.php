<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DesignateTask extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('task_model');
		$this->load->model('comm_model');
	}
	public function index()
	{
//		$this->load->helper(array('form','url');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('member','member', 'required|xss_clean');
		$this->form_validation->set_rules('task','task', 'required|xss_clean');
		$data['members'] = $this->comm_model->get_member();
		$data['tasks'] = $this->task_model->get_tasks();

		$this->load->view('header');
		//$this->load->view('asstask',$data);

		$memberID = $this->input->post('member');
		$taskID = $this->input->post('task');

	/*	$name = $this->input->post('name');
		$description = $this->input->post('description
	*/
		if($this->form_validation->run() == FALSE)
		{
			$data['message'] = "";
			$this->load->view('destask',$data);
		}
		else
		{
			//if($this->task_model->exists($name)==FALSE)
		
				$this->task_model->assignTask($memberID,$taskID);
				$data['message']= "Task Assigned!";
				$this->load->view('destask',$data);
			
		//	else
		//	{
		//		$data['message']= "Task name exists!";
		//		$this->load->view('task_create',$data);
				
		//	}
			
		}
	}	
}

