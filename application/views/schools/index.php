<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        
		<td><strong>School</strong></td>
		<td><strong>First Name</strong></td>
        <td><strong>Last Name</strong></td>
		<td><strong>Registration Number</strong></td>
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($schools as $schools_item): ?>
        <tr>
            <td><?php echo $schools_item['School']; ?></td>
			<td><?php echo $schools_item['Firstname']; ?></td>
            <td><?php echo $schools_item['Lastname']; ?></td>
			<td><?php echo $schools_item['Registration_Number']; ?></td>
			
            <td>
                <a href="<?php echo site_url('schools/view/'.$schools_item['id']); ?>">View</a> | 
                <a href="<?php echo site_url('schools/edit/'.$schools_item['id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('schools/delete/'.$schools_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>