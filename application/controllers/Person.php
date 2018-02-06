<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');

		$this->load->library('session');
		
		$this->load->model('Person_model');
    }
    private function isLogged(){
		return $this->session->userdata('user');
	}
    public function index(){
        if(!$this->isLogged())
            redirect('/main/login', 'refresh');
            
        $persons = $this->Person_model->get_persons();

        $data['head'] = $this->load->view('main/head', null, true);
        $data['body'] = $this->load->view('persons/list', ['persons' => $persons], true);
        $data['body'] .= $this->load->view('persons/add', null, true);
		$data['foot'] = $this->load->view('main/foot', null, true);

	//	$data['body'] .= "<pre>".print_r($this->session, true);
		
		$this->load->view('main/template', $data);
    }

    public function add_person(){
        $data = array(
            'firstname' => $this->input->post('firstname'),
            'secondname' => $this->input->post('secondname'),
            'lastname' => $this->input->post('lastname'),
            'sex' => $this->input->post('sex'),
            'passport' => $this->input->post('passport'),
            'type' => $this->input->post('type'),

        );
    
        $this->Person_model->add_person($data);
        redirect('/person', 'refresh');
     }

}