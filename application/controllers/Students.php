<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');

		$this->load->library('session');
		
		$this->load->model('Students_model');
    }
    
    public function index(){
        $students = $this->Students_model->get_students();

        $data['head'] = $this->load->view('main/head', null, true);
        $data['body'] = $this->load->view('students/list', ['students' => $students], true);
        $data['body'] .= $this->load->view('students/add', null, true);

        $data['foot'] = $this->load->view('main/foot', null, true);

        $this->load->view('main/template', $data);
    }

    public function delete_student($id){
       $this->Students_model->delete_student_by_id($id);
       redirect('/students', 'refresh');
    }

    public function add_student(){
        $data = array(
            'fullname' => $this->input->post('fullname'),
            'faculty_id' => $this->input->post('faculty_id'),
            'group_id' => $this->input->post('group_id')
        );
    
        $this->Students_model->add_student($data);
        redirect('/students', 'refresh');
     }

}