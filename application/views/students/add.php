<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<?php
    echo form_open('/students/add_student');
    echo form_error();
    echo validation_errors();
        echo form_input([
            'name'=>'fullname', 
            'placeholder'=>'fullname'
        ]);
        echo form_input([
            'name'=>'faculty_id', 
            'placeholder'=>'faculty code'
        ]);
        echo form_input([
            'name'=>'group_id', 
            'placeholder'=>'group code'
        ]);
        echo form_submit([
            'value' => 'Submit'
        ]);

    echo form_close(); 

?>