<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rahan Admin</title>
</head>
<body>
    <h1>Main menu</h1>
    <br>
    <table>
        <th>Admin details</th>
        <tr>
            <td><a href="<?php echo base_url(); ?>adminfunctions/showUsers">View</a></td>
            <td><a href="<?php echo base_url(); ?>adminfunctions/addUserPage">Add</a></td>
            <td><a href="#" class="button">Edit</a></td>
            <td><a href="#" class="button">Delete</a></td>
        </tr>
        <th>User stories</th>
        <tr>
            <td><a href="#" class="button">View</a></td>
            <td><a href="<?php echo base_url(); ?>adminfunctions/addUserStory">Add</a></td>
            <td><a href="#" class="button">Edit</a></td>
            <td><a href="#" class="button">Delete</a></td>
        </tr>
        <th>Database Admin</th>
        <tr>
            <td><a href="<?php echo base_url(); ?>Schools/index">Schools</a></td>
            <td><a href="<?php echo base_url(); ?>Graves/index">Graves</a></td>
            <td><a href="<?php echo base_url(); ?>Parish/index">Parish</a></td>
        </tr>
    </table>
    
    <br>
    <?php echo anchor('logincontroller', 'logout');?>
</body>
</html>