pop_id<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->model('Client_model');
		$clients = $this->Client_model->all();
		$data = array();
		$data['clients'] = $clients;

		// $pops['pop'] = $this->Client_model->getPop();
		// $this->load->view('pop',$pops);
		
		// $data1['pop']=$this->Client_model->getPop();
		// $this->load->view('pop',$data1);;

		$this->load->view('clients/index',$data);
		$this->load->view('admin/_footer');

	}


	public function add_client()
	{
		$this->load->model('Client_model');
	    $getPop = $this->Client_model->getPop();
		// echo "<pre>";
		// print_r($getPop);
		// exit();
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('clients/add_client',['getPop'=>$getPop]);
		$this->load->view('admin/_footer');
	}

	public function create()
	{
		$this->load->model('Client_model');
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
			$formArray['phone'] = $this->input->post('phone');
			$formArray['address'] = $this->input->post('address');
			$formArray['pop'] = $this->input->post('pop_id');
			print_r($formArray);
			$this->Client_model->create($formArray);
			$this->session->set_flashdata('success','Client Added Successfully!');
			redirect(base_url().'index.php/Client');
		//}
	}

	public function edit($clientId)
	{
		$this->load->model('Client_model');
		$getPop = $this->Client_model->getPop();
		$client = $this->Client_model->getClient($clientId);
		$data = array(
		    'client' => $client,
		    'getPop' => $getPop,
		);
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('clients/edit_client',$data);
		$this->load->view('admin/_footer');
	}

	public function update($id){
		$this->load->model('Client_model');
		//update user
		$formArray = array();
		$formArray['name'] = $this->input->post('name');
		$formArray['phone'] = $this->input->post('phone');
		$formArray['address'] = $this->input->post('address');
		$formArray['pop'] = $this->input->post('pop_id');
		$this->Client_model->updateClient($id,$formArray);
		$this->session->set_flashdata('success','Client Updated Successfully!');
		redirect(base_url().'index.php/client/index');		
	}

	function delete($clientId)
		{
			$this->load->model('Client_model');
			$client = $this->Client_model->getClient($clientId);
			if(empty($client))
			{
			$this->session->set_flashdata('failure','Record not found in Database');
			redirect(base_url().'index.php/client/index');
			}
			$this->Client_model->deleteClient($clientId);
			$this->session->set_flashdata('success','Client deleted Successfully!');
			redirect(base_url().'index.php/client/index');
		}
	
}
