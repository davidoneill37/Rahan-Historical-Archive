<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Graveyard</strong></td>
		<td><strong>First Name</strong></td>
        <td><strong>Last Name</strong></td>
		<td><strong>Headstone No.</strong></td>
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($graves as $graves_item): ?>
        <tr>
            <td><?php echo $graves_item['Graveyard']; ?></td>
			<td><?php echo $graves_item['Firstname']; ?></td>
            <td><?php echo $graves_item['Lastname']; ?></td>
			<td><?php echo $graves_item['Headstone_Number']; ?></td>
            <td>
                <a href="<?php echo site_url('graves/view/'.$graves_item['id']); ?>">View</a> | 
                <a href="<?php echo site_url('graves/edit/'.$graves_item['id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('graves/delete/'.$graves_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
    			
    </tr>
<?php endforeach; ?>
</table>