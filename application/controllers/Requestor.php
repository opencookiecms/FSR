<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requestor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Codeigniter : Write Less Do More
		$this->load->model('Datahandler');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('form_validation');
		//$this->load->model('Projek_model');
	}

	public function index()
	{
		$this->load->database();

		$this->form_validation->set_rules('requestorname','Please insert Requestor Name','required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header.php');
			$this->load->view('template/sidebar');
			$this->load->view('template/nav');
			$this->load->view('pages/requestform');
			$this->load->view('template/footer.php');
		}
		else
		{
			$this->Datahandler->setRequestor();
			redirect(base_url('Requestor/requestorlist'));
		}

	}

	public function Requestorlist()
	{
		$data['get_details'] = $this->Datahandler->getRequestor();


		$this->load->view('template/header.php');
		$this->load->view('template/sidebar');
		$this->load->view('template/nav');
		$this->load->view('pages/request_list',$data);
		$this->load->view('template/footer');
	}
}
