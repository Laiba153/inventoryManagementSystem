<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');

		$this->load->model('Employee_model');
		$employees = $this->Employee_model->all();
		$data = array();
		$data['employees'] = $employees;
		$this->load->view('employee/index',$data);

		$this->load->view('admin/_footer');
	}

public function add_employee()
	{
		//$this->load->model('Client_model');
		//$users = $this->User_model->all();
		//$data = array();
		//$data['users'] = $users;
		//$this->load->view('list',$data);

		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('employee/add_employee');
		$this->load->view('admin/_footer');
	}
	

}
