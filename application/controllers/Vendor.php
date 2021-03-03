<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');

		$this->load->model('Vendor_model');
		$vendors = $this->Vendor_model->all();
		$data = array();
		$data['vendors'] = $vendors;
		$this->load->view('vendor/index',$data);

		$this->load->view('admin/_footer');
		

	}

	public function add_vendor()
	{

		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('vendor/add_vendor');
		$this->load->view('admin/_footer');
	}

	public function create()
	{
		$this->load->model('Vendor_model');
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
			$formArray['cnic'] = $this->input->post('cnic');
			$formArray['sales'] = $this->input->post('sales');
			$formArray['hold_tax'] = $this->input->post('hold_tax');
			$formArray['sale_tax'] = $this->input->post('sale_tax');

			print_r($formArray);

			$this->Vendor_model->create($formArray);
			$this->session->set_flashdata('success','Vendor Added Successfully!');
			redirect(base_url().'index.php/Vendor');
		//}
	}

	public function edit($venId)
	{
		$this->load->model('Vendor_model');
		$vendor = $this->Vendor_model->getVendor($venId);
		$data = array();
		$data['vendor'] = $vendor;
		
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('vendor/edit_vendor',$data);
		$this->load->view('admin/_footer');
		
	}

	public function update($id){
		$this->load->model('Vendor_model');
		//update user
			$formArray = array();
			$formArray['name'] = $this->input->post('name');
			$formArray['cnic'] = $this->input->post('cnic');
			$formArray['sales'] = $this->input->post('sales');
			$formArray['hold_tax'] = $this->input->post('hold_tax');
			$formArray['sale_tax'] = $this->input->post('sale_tax');
			$this->Vendor_model->updateVendor($id,$formArray);
			$this->session->set_flashdata('success','Vendor Updated Successfully!');
			redirect(base_url().'index.php/vendor/index');
				
	}
	
	function delete($venId)
		{
			$this->load->model('Vendor_model');
			$vendor = $this->Vendor_model->getVendor($venId);
			if(empty($vendor))
			{
			$this->session->set_flashdata('failure','Record not found in Database');
			redirect(base_url().'index.php/user/index');
			}
			$this->Vendor_model->deleteVendor($venId);
			$this->session->set_flashdata('success','Vendor deleted Successfully!');
			redirect(base_url().'index.php/vendor/index');
		}

}
