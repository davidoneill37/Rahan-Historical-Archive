<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rahan Admin - View users</title>
</head>
<body>
    
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Delete User?</th>
            </tr>
            <?php
            if($fetch_data->num_rows() > 0)//if fetch returns more than one row
            {
                foreach($fetch_data->result() as $row)//for each allows access to fetch array and run through it placing in temp var
                {
                    ?>
                    <tr>
                    <td><?php echo $row->adminID;?></td><!--Return data from each row in table and print to assigned td-->
                    <td><?php echo $row->username;?></td>
                    <td><?php echo $row->password;?></td>
                    <td><a href="#" class="delete_data" id="<?php echo $row->adminID;?>">Delete</a></td>
                    </tr>
                    <?php
                }
            }
            else//if the table is empty
            {
                ?>
                <tr><td>No data found</td></tr><!--Print this message-->
                <?php
            }
            ?>
        </table>
    </div>

    <a href="<?php echo base_url(); ?>adminfunctions/returnMainMenu" class="button">Return to main menu</a>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!--Include JQuery for delete-->
    
    <script>

    </script>
</body>
</html>