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
		//$this->load->model('Client_model');
		//$users = $this->User_model->all();
		//$data = array();
		//$data['users'] = $users;
		//$this->load->view('list',$data);

		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('vendor/add_vendor');
		$this->load->view('admin/_footer');
	}
}
