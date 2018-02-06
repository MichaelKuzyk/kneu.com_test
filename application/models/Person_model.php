<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }


    public function get_persons(){
        $query = $this->db
            ->from('person')
            ->get();
            
        return $query->result_array();
    }
    public function add_person($persons){
        return $this->db->insert('person', $persons);


    }


}