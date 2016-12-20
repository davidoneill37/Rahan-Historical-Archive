<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rahan Admin - Add user</title>
</head>
<body>
<?php
    echo form_open('adminfunctions/addUser');
    
    echo form_input('username', 'Username', $this->input->post('username'));
    
    echo form_input('password', 'Password', $this->input->post('password'));
    
    echo form_submit('newusersubmit', 'Add New User');
    
    echo validation_errors();
    
    echo form_close();
    ?>
    <a href="<?php echo base_url(); ?>adminfunctions/returnMainMenu" class="button">Return to main menu</a>
    
</body>
</html>