<?php
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
		$this->load->view('clients/index',$data);

		$this->load->view('admin/_footer');
	}

	public function add_client()
	{
		//$this->load->model('Client_model');
		//$users = $this->User_model->all();
		//$data = array();
		//$data['users'] = $users;
		//$this->load->view('list',$data);

		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('clients/add_client');
		$this->load->view('admin/_footer');
	}

}
