<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Type Of Record</strong></td>
		<td><strong>First Name</strong></td>
        <td><strong>Family Name</strong></td>
		<td><strong>Year</strong></td>
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($parish as $parish_item): ?>
        <tr>
            <td><?php echo $parish_item['Type_of_Record']; ?></td>
			<td><?php echo $parish_item['Firstname']; ?></td>
            <td><?php echo $parish_item['Family_Name']; ?></td>
			<td><?php echo $parish_item['Event_Year']; ?></td>
            <td>
                <a href="<?php echo site_url('parish/view/'.$parish_item['id']); ?>">View</a> | 
                <a href="<?php echo site_url('parish/edit/'.$parish_item['id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('parish/delete/'.$parish_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
    			
    </tr>
<?php endforeach; ?>
</table>