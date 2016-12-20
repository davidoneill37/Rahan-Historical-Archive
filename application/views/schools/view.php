<h2><?php echo $title; ?></h2>
 
 
<?php echo form_open('schools/view/'.$schools_item['id']); ?>
    <table>
	<tr>
            <td><b>Type of Record </b></td>
            <td><?php echo $schools_item['Type_of_Record'] ?></td>
        </tr>
	
        <tr>
            <td><b>School Name </b></td>
            <td><?php echo $schools_item['School'] ?></td>
        </tr>
		<tr>
            <td><b>Firstname </b></td>
            <td><?php echo $schools_item['Firstname'] ?></td>
        </tr>
        <tr>
            <td><b>Lastname </b></td>
            <td><?php echo $schools_item['Lastname']?></td>
        </tr>
		  <tr>
            <td><b>Date of Entry </b></td>
            <td><?php echo $schools_item[ 'Date_D']?>
            <b> </b>
            <?php echo $schools_item[ 'Date_M']?>
			<b> </b>
            <?php echo $schools_item[ 'Date_Year']?></td>
		</tr>
		<tr>
            <td><b>Registration Number</b></td>
			<td><?php echo $schools_item['Registration_Number']?></td>
        </tr>
		
        <tr>
			<td><b>Date of Birth </b></td>
            <td><?php echo $schools_item[ 'Datebirth_D']?>
            <b> </b>
            <?php echo $schools_item[ 'Datebirth_M']?>
			<b> </b>
            <?php echo $schools_item[ 'Datebirth_Year']?></td>
        </tr>
		<tr>
            <td><b>Religion </b></td>
            <td><?php echo $schools_item['Religion'] ?></td>
        </tr>
        <tr>
            <td><b>Address </b></td>
            <td><?php echo $schools_item['Address'] ?></td>
        </tr>
		<tr>		
            <td><b>Fathers  Occupation </b></td>
            <td><?php echo $schools_item['Fathers_Occupation'] ?></td>
        </tr>
		<tr>
            <td><b>Previous School<b></td>
            <td><?php echo $schools_item['Previous_School'] ?></td>
        </tr>
		
		
       
        
    </table>
</form>