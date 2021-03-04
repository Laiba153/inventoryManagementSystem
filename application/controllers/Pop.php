<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pop extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->model('Pop_model');
		$pops = $this->Pop_model->all();
		$data = array();
		$data['pops'] = $pops;
		$this->load->view('pop/index',$data);
		$this->load->view('admin/_footer');

	}


	public function add_pop()
	{
		$this->load->model('Pop_model');
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('pop/add_pop');
		$this->load->view('admin/_footer');
	}

	public function create()
	{
		$this->load->model('Pop_model');
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
			$formArray['location'] = $this->input->post('location');
			print_r($formArray);
			$this->Pop_model->create($formArray);
			$this->session->set_flashdata('success','Pop Added Successfully!');
			redirect(base_url().'index.php/Pop');
		//}
	}

	public function edit($popId)
	{
		$this->load->model('Pop_model');
		$pop = $this->Pop_model->getPop($popId);
		$data = array();
		$data['pop'] = $pop;
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('pop/edit_pop',$data);
		$this->load->view('admin/_footer');
	}

	public function update($id){
		$this->load->model('Pop_model');
		//update user
		$formArray = array();
		$formArray['name'] = $this->input->post('name');
		$formArray['location'] = $this->input->post('location');
		$this->Pop_model->updatePop($id,$formArray);
		$this->session->set_flashdata('success','Pop Updated Successfully!');
		redirect(base_url().'index.php/pop/index');		
	}

	function delete($popId)
		{
			$this->load->model('Pop_model');
			$pop = $this->Pop_model->getPop($popId);
			if(empty($pop))
			{
			$this->session->set_flashdata('failure','Record not found in Database');
			redirect(base_url().'index.php/pop/index');
			}
			$this->Pop_model->deletePop($popId);
			$this->session->set_flashdata('success','Pop deleted Successfully!');
			redirect(base_url().'index.php/pop/index');
		}
	
}
