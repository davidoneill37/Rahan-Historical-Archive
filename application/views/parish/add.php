<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('parish/create'); ?>    
    <table>
       	
       
		<tr>
            <td><label for="typeofrecord">Type of Record</label></td>
            <td><input type="input" name="typeofrecord" size="1" value "B" /></td>
        </tr>
		<tr>
            <td><label for="eventd">Date of Event (dd mmm yyyy)</label></td>
            <input type="input" name="eventd" size="2"  />
			<input type="input" name="eventm"size= "3"  />
			<input type="input" name="eventyear" size ="4" /></td>
        </tr>
		<tr>
            <td><label for="firstname">First Name</label></td>
            <td><input type="input" name="firstname" size="35" /></td>
        </tr>
		
		<tr>
            <td><label for="groomfirstname">Groom Firstname</label></td>
            <td><input type="input" name="groomfirstname" size="35" /></td>
        </tr>
        <tr>
            <td><label for="familyname">Family Name</label></td>
            <td><input type="input" name="familyname" size="35" /></td>
        </tr>
		<tr>
            <td><label for="bridefirstname">Bride Firstname</label></td>
            <td><input type="input" name="bridefirstname" size="35" /></td>
        </tr
		
		<tr>
            <td><label for="maidenname">Maiden Name</label></td>
            <td><input type="input" name="maidenname" size="35" /></td>
        </tr>
		
        <tr>
            <td><label for="Sex">Sex</label></td>
            <td><input type="input" name="sex"  size="6"/></td>
        </tr>
		<tr>
            <td><label for="fathersfirstname">Fathers First Name</label></td>
  			 <td><input type="input" name="fathersfirstname" size="35" /></td>
        </tr>
		<tr>
            <td><label for="fatherssurname">Fathers Surname</label></td>
  			 <td><input type="input" name="fatherssurname" size="35" /></td>
        </tr>
		<tr>
            <td><label for="mothersfirstname">Mothers First Name</label></td>
  			 <td><input type="input" name="mothersfirstname" size="35" /></td>
        </tr>
		<tr>
            <td><label for="mothersmaidenname">Mothers Maiden Name</label></td>
  			 <td><input type="input" name="mothersmaidenname" size="35" /></td>
        </tr>
		<tr>
            <td><label for="witness1firstname">Witnness 1 First Name</label></td>
  			 <td><input type="input" name="witness1firstname" size="35" /></td>
        </tr><tr>
            <td><label for="witness1lastname">Witness 1 Last Name</label></td>
  			 <td><input type="input" name="witness1lastname" size="35" /></td>
        </tr><tr>
            <td><label for="witness2firstname">Witnness 2 First Name</label></td>
  			 <td><input type="input" name="witness2firstname" size="35" /></td>
        </tr><tr>
            <td><label for="witness2lastname">Witness 2 Last Name</label></td>
  			 <td><input type="input" name="witness2lastname" size="35" /></td>
        </tr>
		<tr>
            <td><label for="reference">Reference</label></td>
            <td><input type="input" name="reference" size="10" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create Parish item" /></td>
        </tr>
    </table>    
</form>
