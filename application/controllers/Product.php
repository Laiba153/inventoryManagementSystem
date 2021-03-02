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

}
