<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManageEvent extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('event_model');
	}
	public function index()
	{
//		$this->load->helper(array('form','url');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','name', 'required|xss_clean');
		$this->form_validation->set_rules('date','date', 'required|xss_clean');
		$this->form_validation->set_rules('desc','description', 'required|xss_clean');


		$this->load->view('header');

		$name = $this->input->post('name');
		$date = $this->input->post('date');
		$desc = $this->input->post('desc');
		if($this->form_validation->run() == FALSE)
		{
			$data['message'] = "";
			$this->load->view('event_create',$data);
		}
		else
		{
			//if($this->event_model->exists($name)==FALSE)
			{
				$this->event_model->addEvent($name,$date,$desc);
				$data['message']= "Event Created";
				$this->load->view('event_create',$data);
			}
			/*else
			{
				$data['message']= "Event name exists!";
				$this->load->view('event_create',$data);
				
			}*/
			
		}
	}	
}
