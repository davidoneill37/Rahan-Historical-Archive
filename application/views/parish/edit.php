<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('parish/edit/'.$parish_item['id']); ?>
    <table>
        <tr>
		<td><label for="typeofrecord">Type of Record</label></td>
            <td><input type="input" name="typeofrecord" size="10" value="<?php echo $parish_item['Type_of_Record'] ?>" /></td>
        </tr> 
        <tr>
			<td><label for="eventd">Date of Baptism (dd mmm yyyy)</label></td>
            <td><input type="input" name="eventd" size="2" value="<?php echo $parish_item['Event_D'] ?>" />
			<input type="input" name="eventm" size="3" value="<?php echo $parish_item['Event_M'] ?>"  />
			<input type="input" name="eventyear"size="4" value="<?php echo $parish_item['Event_Year'] ?>"/></td>
        </tr>
		<tr>
            <td><label for="firstname">Firstname</label></td>
            <td><input type="input" name="firstname" size="35" value="<?php echo $parish_item['Firstname'] ?>" /></td>
        </tr>
		
        <tr>
            <td><label for="groomfirstname">Groom First Name</label></td>
            <td><input type="input" name="groomfirstname" size="35" value="<?php echo $parish_item['Groom_Firstname']?>" /></td>
        </tr>
		
        <tr>
            <td><label for="familyname">Family Name</label></td>
            <td><input type="input" name="familyname" size="35" value="<?php echo $parish_item['Family_Name']?>" /></td>
        </tr>
		<tr>
            <td><label for="bridefirstname">Bride First Name</label></td>
            <td><input type="input" name="bridefirstname" size="35" value="<?php echo $parish_item['Bride_Firstname'] ?>" /></td>
        </tr>
		
		<tr>
            <td><label for="maidenname">Maiden Name</label></td>
            <td><input type="input" name="maidenname" size="35" value="<?php echo $parish_item['Maiden_Name']?>" /></td>
        </tr>
		<tr>
		<td><label for="Sex">Sex</label></td>
            <td><input type="input" name="sex"  size="6" value="<?php echo $parish_item['Sex'] ?>" /></td>
        </tr>
		<tr>
			<td><label for="fathersfirstname">Fathers First Name</label></td>
  			 <td><input type="input" name="fathersfirstname" size="35" value="<?php echo $parish_item['Fathers_First_Name'] ?>"/></td>
        </tr>
		
        <tr><td><label for="fatherssurname">Fathers Surname</label></td>
			 <td><input type="input" name="fatherssurname" size="35"value="<?php echo $parish_item['Fathers_Surname'] ?>"  /></td>
		</tr>
		<tr>
			<td><label for="mothersfirstname">Mothers First Name</label></td>
  			 <td><input type="input" name="mothersfirstname" size="35" value="<?php echo $parish_item['Mothers_First_Name'] ?>"/></td>
        </tr>
		
		<tr>
            <td><label for="mothersmaidenname">Mothers Maiden Name</label></td>
		   	<td><input type="input" name="mothersmaidenname" size="35" value="<?php echo $parish_item['Mothers_Maiden_Name'] ?>" /></td>
        
		</tr>
		<tr>
			<td><label for="witness1firstname">Witnness 1 First Name</label></td>
  			 <td><input type="input" name="witness1firstname" size="35" value="<?php echo $parish_item['Witness1_Firstname'] ?>" /></td>
        </tr>
		<tr>
			<td><label for="witness1surname">Witnness 1 Last Name</label></td>
  			 <td><input type="input" name="witness1surname" size="35" value="<?php echo $parish_item['Witness1_Surname'] ?>" /></td>
        </tr>
		<tr>
			<td><label for="witness2firstname">Witnness 2 First Name</label></td>
  			 <td><input type="input" name="witness2firstname" size="35" value="<?php echo $parish_item['Witness2_Firstname'] ?>" /></td>
        </tr>
		<tr>
			<td><label for="witness2surname">Witnness 2 Last Name</label></td>
  			 <td><input type="input" name="witness2surname" size="35" value="<?php echo $parish_item['Witness2_Surname'] ?>" /></td>
        </tr>
        <tr>
			<td><label for="reference">Reference</label></td>
            <td><input type="input" name="reference" size="10" value="<?php echo $parish_item['Reference'] ?>"/></td>
        </tr>
		
		<br>
            <td><input type="submit" name="submit" value="Edit Parish Baptismal item" /></td>
        </tr>
    </table>
</form>