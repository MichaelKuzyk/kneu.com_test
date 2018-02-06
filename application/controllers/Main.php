<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');

		$this->load->library('session');
		
		$this->load->model('Main_model');
	}

	private function isLogged(){
		return $this->session->userdata('user');
	}
	private function loginUser($user){
		$this->session->set_userdata('user', $user);
	}
	private function logoutUser(){
		$this->session->sess_destroy();
	}

	private function getUser(){
		return $this->session->userdata('user');
	}

	public function index()
	{
		if(!$this->isLogged())
			redirect('/main/login', 'refresh');

		$data['head'] = $this->load->view('main/head', null, true);
		$data['body'] = $this->load->view('main/index', $this->getUser(), true);
		$data['foot'] = $this->load->view('main/foot', null, true);

		$data['body'] .= "<pre>".print_r($this->session, true);
		
		$this->load->view('main/template', $data);
    }
    
	public function login()
	{
		if($this->isLogged())
			redirect('/', 'refresh');

		$loginData["formError"] = "";
			
		if($this->input->post('login')){
			$user = $this->Main_model->get_user($this->input->post('login'), $this->input->post('password'));
			if($user){
				$this->loginUser($user);
				redirect('/', 'refresh');
			}
			else{
				//TODO: Rewrite
				$loginData["formError"] = "Wrong login or password";
			}
		}

		$data['head'] = $this->load->view('main/head', null, true);
		$data['body'] = $this->load->view('main/login', $loginData, true);
		$data['foot'] = $this->load->view('main/foot', null, true);

		$data['body'] .= "<pre>".print_r($this->session, true);

		$this->load->view('main/template', $data);
	}

	public function logout(){
		$this->logoutUser();
		redirect('/login', 'refresh');
	}
}




