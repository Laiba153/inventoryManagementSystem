<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');

		$this->load->model('Product_model');
		$products = $this->Product_model->all();
		$data = array();
		$data['products'] = $products;
		$this->load->view('product/index',$data);

		$this->load->view('admin/_footer');
	}

	public function add_product()
	{
		//$this->load->model('Client_model');
		//$users = $this->User_model->all();
		//$data = array();
		//$data['users'] = $users;
		//$this->load->view('list',$data);

		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('product/add_products');
		$this->load->view('admin/_footer');
	}

	public function create()
	{
		$this->load->model('Product_model');
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
			$formArray['amount'] = $this->input->post('amount');
			$formArray['type'] = $this->input->post('type');
			$formArray['serial'] = $this->input->post('serial');
			
			print_r($formArray);

			$this->Product_model->create($formArray);
			$this->session->set_flashdata('success','Product Added Successfully!');
			redirect(base_url().'index.php/Product');
		//}
	}

	public function edit($proId)
	{
		$this->load->model('Product_model');
		$product = $this->Product_model->getProduct($proId);
		$data = array();
		$data['product'] = $product;
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('product/edit_product',$data);
		$this->load->view('admin/_footer');
	}

	public function update($id){
		$this->load->model('Product_model');
		//update user
		$formArray = array();
			$formArray['name'] = $this->input->post('name');
			$formArray['amount'] = $this->input->post('amount');
			$formArray['type'] = $this->input->post('type');
			$formArray['serial'] = $this->input->post('serial');

			$this->Product_model->updateProduct($id,$formArray);
			$this->session->set_flashdata('success','Product Updated Successfully!');
			redirect(base_url().'index.php/product/index');		
	}

	function delete($proId)
		{
			$this->load->model('Product_model');
			$product = $this->Product_model->getProduct($proId);
			if(empty($product))
			{
			$this->session->set_flashdata('failure','Record not found in Database');
			redirect(base_url().'index.php/product/index');
			}
			$this->Product_model->deleteProduct($proId);
			$this->session->set_flashdata('success','Product deleted Successfully!');
			redirect(base_url().'index.php/product/index');
		}
	

}
