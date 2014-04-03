<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddTask extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('task_model');
		$this->load->model('event_model');
	}
	public function index()
	{
//		$this->load->helper(array('form','url');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','name', 'required|xss_clean');
		$this->form_validation->set_rules('description','description', 'required|xss_clean');
		$data['events'] = $this->event_model->get_events();

		$this->load->view('header');

		$name = $this->input->post('name');
		$description = $this->input->post('description');
		$eventID = $this->input->post('event');



		if($this->form_validation->run() == FALSE)
		{
			$data['message'] = "";
			$this->load->view('task_create',$data);
		}
		else
		{
			//if($this->task_model->exists($name)==FALSE)
			{
				$this->task_model->addTask($name,$description,$eventID);
				$data['message']= "Task Created";
				$this->load->view('task_create',$data);
			}
			
		//	else
		//	{

		//		$data['message']= "Task name exists!";
		//		$this->load->view('task_create',$data);
				
		//	}
			
		}
	}	
}
