<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('schools/create'); ?>    
    <table>
		<tr>
            <td><label for="typeofrecord">Type of Record</label></td>
            <td><input type="input" name="typeofrecord" size="1" value "S" /></td>
        </tr>
	
       	<tr>
            <td><label for="School">School</label></td>
            <td><input type="input" name="school" size="50" /></td>
        </tr>
		<tr>
            <td><label for="firstname">Firstname</label></td>
            <td><input type="input" name="firstname" size="35" /></td>
        </tr>
		
        <tr>
            <td><label for="lastname">Lastname</label></td>
            <td><input type="input" name="lastname" size="35" /></td>
        </tr>
		
        <tr>
            <td><label for="dated">Date of  Entry(dd mmm yyyy)</label></td>
            <td><input type="input" name="dated"  /></td>
			<td><input type="input" name="datem"  /></td>
			<td><input type="input" name="dateyear"  /></td>
        </tr>
		<tr>
            <td><label for="registrationnumber">Registration Number</label></td>
            <td><input type="number" name="registrationnumber" size="4" /></td>
        </tr>
		<tr>
            <td><label for="datebirthd">Date of Birth(dd mmm yyyy)</label></td>
            <td><input type="input" name="datebirthd"  /></td>
			<td><input type="input" name="datebirthm"  /></td>
			<td><input type="input" name="datebirthyear"  /></td>
        </tr>
		
        
		<tr>
		
            <td><label for="religion">Religion</label></td>
            <td><input type="input" name="religion" size="3" /></td>
        </tr>
		
        <tr>
            <td><label for="address">Address</label></td>
			<td><input type="input" name="address" size="50"  /></td>	
        </tr>
		<tr>
            <td><label for="fathersoccupation">Fathers Occupation</label></td>
            <td><input type="input" name="fathersoccupation" size="35"  /></td>
        </tr>
		
		<tr>
            <td><label for="previousschool">Previous School</label></td>
            <td><input type="input" name="previousschool" size="35" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create graveyard item" /></td>
        </tr>
    </table>    
</form>
