<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rahan Admin</title>
</head>
<body>
   
   <div id="login_form">
    <h1>Login form</h1>
    <br>
    
    <?php 
    //$this->load->helper('form');
    
    echo form_open('logincontroller/login_validation'); 
    echo form_input('username', 'Username');//1st is name value 2nd is on screen and optional
    echo form_password('password', 'Password');
    echo form_submit('submit', 'Login');
       ?>
       <br>
    <?php
    echo validation_errors();
    echo form_close();
    ?>
    
</div>
    
</body>
</html>