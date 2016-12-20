<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rahan Admin - Add story</title>
</head>
<body>
<?php
    echo form_open('adminfunctions/addStory');
    
    echo form_textarea('summary', 'Summary', $this->input->post('summary'));
    
    echo form_textarea('story', 'Story', $this->input->post('story'));
    
    echo form_submit('newstorysubmit', 'Add User Story');
    
    
    echo form_close();
    ?>
    <a href="<?php echo base_url(); ?>adminfunctions/returnMainMenu" class="button">Return to main menu</a>
    
</body>
</html>