<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<?php
    echo form_open('/person/add_person');
    echo form_error();
    echo validation_errors();
        echo form_input([
            'name'=>'firstname', 
            'placeholder'=>'Ім’я'
        ]);
        echo form_input([
            'name'=>'secondname', 
            'placeholder'=>'По батькові'
        ]);
        echo form_input([
            'name'=>'lastname', 
            'placeholder'=>'Прізвище'
        ]);
        echo 'СТАТЬ:  ';
        echo 'male';
        echo form_radio('sex', '1', TRUE, null);
        echo 'female';
        echo form_radio('sex', '0', FALSE, null);
        echo form_input([
            'name'=>'passport', 
            'placeholder'=>'Серія та нормер паспорта'
        ]);
     $options = array(
            'notype'        => 'Оберіть тип',
            'student'       => 'Студент',
            'aspirant'      => 'Аспірант',
            'staff'         => 'Співробітник',
           
    );
        
    echo form_dropdown('type', $options, 'large');


        echo form_submit([
            'value' => 'Submit'
        ]);

    echo form_close(); 

?>