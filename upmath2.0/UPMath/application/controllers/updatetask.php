<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UpdateTask extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('task_model');
	}	
	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('progress','progress', 'required|xss_clean');
		$this->form_validation->set_rules('error','error', 'required|xss_clean');
		$this->form_validation->set_rules('clarifications','clarifications', 'required|xss_clean');
		$this->form_validation->set_rules('status','status', 'required|xss_clean');
		$data['tasks'] = $this->task_model->get_tasks();


		$this->load->view('header');

		$taskID = $this->input->post('task');
		$progress = $this->input->post('progress');
		$error = $this->input->post('error');
		$clarifications = $this->input->post('clarifications');
		$status = $this->input->post('status');



		if($this->form_validation->run() == FALSE)
		{
			$data['message'] = "";
			$this->load->view('updatetask',$data);
		}
		else
		{
			//if($this->task_model->exists($name)==FALSE)
			{
				$this->task_model->updateTask($taskID,$progress,$error,$clarifications,$status);
				$data['message']= "Task Updated";
				$this->load->view('updatetask',$data);
			}
			
		//	else
		//	{

		//		$data['message']= "Task name exists!";
		//		$this->load->view('task_create',$data);
				
		//	}
			
		}
	}	
}
