<h2><?php echo $title; ?></h2>
 
 
<?php echo form_open('parish/view/'.$parish_item['id']); ?>
    <table>
        <tr>
            <td><b>Type of Record </b></td>
            <td><?php echo $parish_item['Type_of_Record'] ?></td>
        </tr>
		<tr>
            <td><b>Event Day</b></td>
            <td><?php echo $parish_item[ 'Event_D']?></td>
        </tr>
		<tr>
            <td><b>Event Month </b></td>
            <td><?php echo $parish_item[ 'Event_M']?></td>
        </tr>
		<tr>
            <td><b>Event Year </b></td>
            <td><?php echo $parish_item[ 'Event_Year']?></td>
        </tr>
		<tr>
            <td><b>Firstname (Baptismal) </b></td>
            <td><?php echo $parish_item['Firstname'] ?></td>
        </tr>
        
		<tr>
            <td><b>Groom First Name </b></td>
            <td><?php echo $parish_item['Groom_Firstname'] ?></td>
        </tr>
        <tr>
            <td><b>Family Name (B and M) </b></td>
            <td><?php echo $parish_item['Family_Name']?></td>
        </tr>
		<tr>
            <td><b>Bride First Name </b></td>
            <td><?php echo $parish_item['Bride_Firstname'] ?></td>
        </tr>
		<tr>
            <td><b>Bride Maiden Name </b></td>
            <td><?php echo $parish_item['Maiden_Name'] ?></td>
        </tr>
		<tr>
            <td><b>Sex </b></td>
            <td><?php echo $parish_item['Sex'] ?></td>
        </tr>
        <tr>
            <td><b>Fathers First Name </b></td>
			<td><?php echo $parish_item['Fathers_First_Name'] ?></td>
        </tr>
		<tr>
            <td><b>Fathers Surname </b></td>
			<td><?php echo $parish_item['Fathers_Surname'] ?></td>
        </tr>
		<tr>
            <td><b>Mothers First Name </b></td>
			<td><?php echo $parish_item['Mothers_First_Name'] ?></td>
        </tr>
		<tr>
			<td><b> Mothers Maiden Name </b></td>
            <td><?php echo $parish_item['Mothers_Maiden_Name'] ?></td>
        </tr>
		<tr>		
            <td><b>Witness1 First Name </b></td>
            <td><?php echo $parish_item['Witness1_Firstname'] ?></td>
        </tr>
		<tr>		
            <td><b>Witness1 Last Name </b></td>
            <td><?php echo $parish_item['Witness1_Surname'] ?></td>
        </tr>
		<tr>		
            <td><b>Witness2 First Name </b></td>
            <td><?php echo $parish_item['Witness2_Firstname'] ?></td>
        </tr>
		<tr>		
            <td><b>Witness2 Last Name </b></td>
            <td><?php echo $parish_item['Witness2_Surname'] ?></td>
        </tr>
		<tr>		
            <td><b>Reference </b></td>
            <td><?php echo $parish_item['Reference'] ?></td>
        </tr>
		
    </table>
</form>