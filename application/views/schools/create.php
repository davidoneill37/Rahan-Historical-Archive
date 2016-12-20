<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('schools/create');

 $options1 = array(
                  'The Island Parish Boys National School'  => 'The Island Parish Boys National School',
                  'Rahan Boys National School'    => 'Rahan Boys National School',
                  'Killina Girls National School'   => 'Killina Girls National School',
                );

$options2 = array(
                  'S'  => 'S',);

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
            <td><?php echo form_dropdown('typeofrecord', $options2, 'S');?></td>
        </tr>
	
		<tr>
            <td><label for="school">School</label></td>
            <td><?php echo form_dropdown('school', $options1, 'School1');?></td>
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
		<td><label for="dated">Date of Entry (dd mmm yyyy)</label></td>
            <td><input type="input" name="dated" size="2" min="01" max="31"/>
			<?php echo form_dropdown('datem', $options3, 'Jan');?>
			<input type="input" name="dateyear" size="4" min="1600" max="1950" /></td>
        </tr>
		<tr>
            <td><label for="registrationnumber">Registration Number</label></td>
            <td><input type="number" name="registrationnumber" size="4"  /></td>
        </tr>
        <tr>
            <td><label for="datebirthd">Date of Birth (dd mmm yyyy)</label></td>
            <td><input type="input" name="datebirthd" size="2" min="01" max="31"/>
			<?php echo form_dropdown('datebirthm', $options3, 'Jan');?>
			<input type="input" name="datebirthyear" size="4" min="1600" max="1950" /></td>
        </tr>
		<tr>
		
            <td><label for="religion">Religion</label></td>
            <td><input type="input" name="religion" size="35" /></td>
        </tr>
		
        <tr>
            <td><label for="address">Address</label></td>
			<td><input type="input" name="address" size="50"  /></td>	
        </tr>
		<tr>
            <td><label for="fathersoccupation">Fathers Occupation</label></td>
            <td><input type="input" name="fathersoccupation" size="35" /></td>
        </tr>
		
		<tr>
            <td><label for="previousschool">Previous School</label></td>
            <td><input type="input" name="previousschool" size="35" /></td>
        </tr>
		
		
		
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create Schools item" /></td>
        </tr>
    </table>    
</form>