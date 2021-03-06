<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    /*public function get_user($login, $password){
        $query = $this->db
            ->from('users')
            ->where([
                'login' => $login,
                'password' => $password
            ])
            ->get();
            
        return $query->row_array();
    }*/


public function get_students(){
    $query = $this->db
    ->from('student')
    ->get();
    return $query->result_array();


}

public function delete_student_by_id($id){
    $query = $this->db 
    ->from('student')
    ->where('id', $id)
    ->delete();

}

public function add_student($student){
     return $this->db->insert('student', $student);
}

    // public function get_last_ten_entries()
    // {
    //         $query = $this->db->get('entries', 10);
    //         return $query->result();
    // }

    // public function insert_entry()
    // {
    //         $this->title    = $_POST['title']; // please read the below note
    //         $this->content  = $_POST['content'];
    //         $this->date     = time();

    //         $this->db->insert('entries', $this);
    // }

    // public function update_entry()
    // {
    //         $this->title    = $_POST['title'];
    //         $this->content  = $_POST['content'];
    //         $this->date     = time();

    //         $this->db->update('entries', $this, array('id' => $_POST['id']));
    // }

}