<h2><?php echo $title; ?></h2>
 
 
<?php echo form_open('graves/view/'.$graves_item['id']); ?>
    <table>
		<tr>
            <td><b>Type of Record </b></td>
            <td><?php echo $graves_item['Type_of_Record'] ?></td>
        </tr>
        <tr>
            <td><b>Graveyard </b></td>
            <td><?php echo $graves_item['Graveyard'] ?></td>
        </tr>
		<tr>
            <td><b>Firstname </b></td>
            <td><?php echo $graves_item['Firstname'] ?></td>
        </tr>
        <tr>
            <td><b>Lastname </b></td>
            <td><?php echo $graves_item['Lastname']?></td>
        </tr>
		<tr>
            <td><b>Maiden Name </b></td>
            <td><?php echo $graves_item['Maiden_Name'] ?></td>
        </tr>
        <tr>
            <td><b>Death day </b></td>
            <td><?php echo $graves_item[ 'Date_d']?></td>
        </tr>
		<tr>
            <td><b>Death month </b></td>
            <td><?php echo $graves_item[ 'Date_m']?></td>
        </tr>
		<tr>
            <td><b>Death year </b></td>
            <td><?php echo $graves_item[ 'Date_Year']?></td>
        </tr>
		<tr>
            <td><b>Age </b></td>
            <td><?php echo $graves_item['Age'] ?></td>
        </tr>
        <tr>
            <td><b>Inscription </b></td>
			<td><p name="inscription"  style="width:300px" ><?php echo $graves_item['Inscription'] ?></p></td>
        </tr>
		<tr>		
            <td><b>Headstone Number </b></td>
            <td><?php echo $graves_item['Headstone_Number'] ?></td>
        </tr>
		<tr>
            <td><b>Other </b></td>
			<td><label name="other" style="width:300px"><?php echo $graves_item['Other'] ?></td>			
        </tr>
        <tr>
            <td><b>Image URL </b></td>
			<td><?php echo $graves_item['Image_Url'] ?></td>	
        </tr>	
        
    </table>
</form>