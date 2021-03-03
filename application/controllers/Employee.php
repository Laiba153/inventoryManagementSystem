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
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('employee/add_employee');
		$this->load->view('admin/_footer');
	}

	public function create()
	{
		$this->load->model('Employee_model');
		//form validation libarary already included in autoload
		/*$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('cnic','CNIC/NTN','required');
		$this->form_validation->set_rules('sales','Sales','required');
		$this->form_validation->set_rules('hold_tax','With Holding Tax (%)','required');
		$this->form_validation->set_rules('sale_tax','Sales Tax (%)','required');
		//$this->form_validation->set_rules('email','Email','required|valid_email');

		if($this->form_validation->run() == false)
		{
			$this->load->view('Vendor/index');
		}
		else
		{*/
			//Save vendor to database
			$formArray = array();
			$formArray['name'] = $this->input->post('name');
			$formArray['department'] = $this->input->post('department');
			$formArray['phone'] = $this->input->post('phone');
			$formArray['email'] = $this->input->post('email');
			$formArray['designation'] = $this->input->post('designation');

			print_r($formArray);

			$this->Employee_model->create($formArray);
			$this->session->set_flashdata('success','Employee Added Successfully!');
			redirect(base_url().'index.php/Employee');
		//}
	}

	public function edit($empId)
	{
		$this->load->model('Employee_model');
		$employee = $this->Employee_model->getEmployee($empId);
		$data = array();
		$data['employee'] = $employee;
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('employee/edit_employee',$data);
		$this->load->view('admin/_footer');
	}

	public function update($id){
		$this->load->model('Employee_model');
		//update user
			$formArray = array();
			$formArray['name'] = $this->input->post('name');
			$formArray['department'] = $this->input->post('department');
			$formArray['phone'] = $this->input->post('phone');
			$formArray['email'] = $this->input->post('email');
			$formArray['designation'] = $this->input->post('designation');

			$this->Employee_model->updateEmployee($id,$formArray);
			$this->session->set_flashdata('success','Employee Updated Successfully!');
			redirect(base_url().'index.php/employee/index');		
	}

	function delete($empId)
		{
			$this->load->model('Employee_model');
			$employee = $this->Employee_model->getEmployee($empId);
			if(empty($employee))
			{
			$this->session->set_flashdata('failure','Record not found in Database');
			redirect(base_url().'index.php/employee/index');
			}
			$this->Employee_model->deleteEmployee($empId);
			$this->session->set_flashdata('success','Employee deleted Successfully!');
			redirect(base_url().'index.php/employee/index');
		}
	

}
