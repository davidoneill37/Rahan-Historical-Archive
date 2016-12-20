<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('schools/edit/'.$schools_item['id']); ?>
    <table>
	<tr>
		<td><label for="typeofrecord">Type of Record</label></td>
            <td><input type="input" name="typeofrecord" size="10" value="<?php echo $schools_item['Type_of_Record'] ?>" /></td>
        </tr> 
	
        <tr>
            <td><label for="School">School</label></td>
            <td><input type="input" name="school" size="50" value="<?php echo $schools_item['School'] ?>" /></td>
        </tr>
		<tr>
            <td><label for="firstname">Firstname</label></td>
            <td><input type="input" name="firstname" size="35" value="<?php echo $schools_item['Firstname'] ?>" /></td>
        </tr>
		
        <tr>
            <td><label for="lastname">Lastname</label></td>
            <td><input type="input" name="lastname" size="35" value="<?php echo $schools_item['Lastname']?>" /></td>
        </tr>
		
        <tr>
            <td><label for="dated">Date of Entry</label></td>
            <td><input type="input" name="dated" size="2" value="<?php echo $schools_item['Date_D'] ?>" />
			<input type="input" name="datem"size="3" value="<?php echo $schools_item['Date_M'] ?>"  />
			<input type="input" name="dateyear"size="4" value="<?php echo $schools_item['Date_Year'] ?>"/></td>
        </tr>
		<tr>
            <td><label for="registrationnumber">Registration Number</label></td>
            <td><input type="number" name="registrationnumber" size="3" value="<?php echo $schools_item['Registration_Number'] ?>" /></td>
        </tr>
         <tr>
            <td><label for="datebirthd">Date of Birth</label></td>
            <td><input type="input" name="datebirthd" size="2" value="<?php echo $schools_item['Datebirth_D'] ?>" />
			<input type="input" name="datebirthm"size="3" value="<?php echo $schools_item['Datebirth_M'] ?>"  />
			<input type="input" name="datebirthyear"size="4" value="<?php echo $schools_item['Datebirth_Year'] ?>"/></td>
        </tr>
		<tr>
		
            <td><label for="religion">Religion</label></td>
            <td><input type="input" name="religion" size="20" value="<?php echo $schools_item['Religion'] ?>" /></td>
        </tr>
		
        <tr>
            <td><label for="address">Address</label></td>
			<td><input type="input" name="address" size="50" value="<?php echo $schools_item['Address'] ?>" /></td>	
        </tr>
		<tr>
            <td><label for="fathersoccupation">Fathers Occupation</label></td>
            <td><input type="input" name="fathersoccupation" size="35" value="<?php echo $schools_item['Fathers_Occupation'] ?>" /></td>
        </tr>
		
		<tr>
            <td><label for="previousschool">Previous School</label></td>
            <td><input type="input" name="previousschool" size="35" value="<?php echo $schools_item['Previous_School'] ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit graves item" /></td>
        </tr>
    </table>
</form>
