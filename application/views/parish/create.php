<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); 
 
 echo form_open('parish/create'); 
 $options1 = array(
                  'B'  => 'B',
                  'M'    => 'M',
                  'D'   => 'D',
                );

 $options2 = array(
                  'female'  => 'Female',
                  'male'    => 'Male',
                );

 $options3 = array(
                  'Jan'  => 'Jan',
                  'Feb'  => 'Feb',
				  'Mar'  => 'Mar',
                  'Apr'  => 'Apr',
				  'May'  => 'May',
                  'Jun'  => 'Jun',
				  'Jul'  => 'Jul',
                  'Aug'  => 'Aug',
				  'Sep'  => 'Sep',
                  'Oct'  => 'Oct',
				  'Nov'  => 'Nov',
                  'Dec'  => 'Dec',
               
                );
?>

   
    <table>
		<tr>
            <td><label for="typeofrecord">Type of Record</label></td>
            <td><?php echo form_dropdown('typeofrecord', $options1, 'Baptismal');?></td>
        </tr>
		<tr>
            <td><label for="eventd">Date of Event (dd mmm yyyy)</label></td>
            <td><input type="input" name="eventd" size="2" min="01" max="31"/>
			<?php echo form_dropdown('eventm', $options3, 'Jan');?>
			<input type="input" name="eventyear" size="4" min="1600" max="1950" /></td>
        </tr>
		<tr>
            <td><label for="firstname">Baptised Firstname</label></td>
            <td><input type="input" name="firstname" size="35" /></td>
        </tr>
		<tr>
            <td><label for="groomfirstname">Groom First Name</label></td>
            <td><input type="input" name="groomfirstname" size="35" /></td>
        </tr>
        <tr>
            <td><label for="familyname">Family Name</label></td>
            <td><input type="input" name="familyname" size="35" /></td>
        </tr>
		
        <tr>
            <td><label for="bridefirstname">Bride First Name</label></td>
            <td><input type="input" name="bridefirstname" size="35" /></td>
        </tr>
		<tr>
            <td><label for="maidenname">Maiden Name (M)</label></td>
            <td><input type="input" name="maidenname" size="35" /></td>
        </tr>
        <tr>
            <td><label for="sex">Sex (B)</label></td>
            <td><?php echo form_dropdown('sex', $options2, 'Female');?></td>
        </tr>
		<tr>
            <td><label for="fathersfirstname">Fathers First Name (B)</label></td>
  			 <td><input type="input" name="fathersfirstname" size="35" /></td>
        </tr>
		<tr>
            <td><label for="fatherssurname">Fathers Surname (B)</label></td>
  			 <td><input type="input" name="fatherssurname" size="35" /></td>
        </tr>
		<tr>
            <td><label for="mothersfirstname">Mothers First Name (B)</label></td>
  			 <td><input type="input" name="mothersfirstname" size="35" /></td>
        </tr>
		<tr>
            <td><label for="mothersmaidenname">Mothers Maiden Name (B)</label></td>
  			 <td><input type="input" name="mothersmaidenname" size="35" /></td>
        </tr>
		<tr>
            <td><label for="witness1firstname">Witnness 1 First Name</label></td>
  			 <td><input type="input" name="witness1firstname" size="35" /></td>
        </tr><tr>
            <td><label for="witness1surname">Witness 1 Last Name</label></td>
  			 <td><input type="input" name="witness1surname" size="35" /></td>
        </tr><tr>
            <td><label for="witness2firstname">Witnness 2 First Name</label></td>
  			 <td><input type="input" name="witness2firstname" size="35" /></td>
        </tr><tr>
            <td><label for="witness2surname">Witness 2 Last Name</label></td>
  			 <td><input type="input" name="witness2surname" size="35" /></td>
        </tr>
		<tr>
            <td><label for="reference">Reference</label></td>
            <td><input type="input" name="reference" size="10" /></td>
        </tr>
        <tr>
			<br>
            <td><input type="submit" name="submit" value="Create Parish item" /></td>
        </tr>
    </table>    
</form>
