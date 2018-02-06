<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- login begin -->
LOGIN PAGE

<?php
    echo form_open();

    echo form_error();
    echo validation_errors();

    echo $formError;

    echo form_input([
        'name' => 'login',
        'placeholder' => 'Login'
    ]);
    echo form_password([
        'name' => 'password',
        'placeholder' => 'Password'
    ]);
    echo form_submit([
        'value' => 'Submit'
    ]);
    
    echo form_close();    
?>
<!-- login end -->