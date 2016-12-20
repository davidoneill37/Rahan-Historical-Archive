<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('graves/create');
$options1 = array(
                  'St. Carthach’s Church Graveyard'  => 'St. Carthach’s Church Graveyard',
                  'Killickfeehan Graveyard'    => 'Killickfeehan Graveyard',
                  'Lynally Graveyard'   => 'Lynally Graveyard',
				  'Farranavilla Graveyard'   => 'Farranavilla Graveyard',
                );
				
				$options2 = array(
                  'G'  => 'G',);
				  
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
            <td><?php echo form_dropdown('typeofrecord', $options2, 'G');?></td>
        </tr>
	
		<tr>
            <td><label for="graveyard">Graveyard</label></td>
            <td><?php echo form_dropdown('graveyard', $options1, 'Graveyard1');?></td>
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
            <td><label for="maidenname">Maiden Name</label></td>
            <td><input type="input" name="maidenname" size="35" /></td>
        </tr>
		<tr>
            <td><label for="death">Death (dd mmm yyyy)</label></td>
            <td><input type="input" name="dated" size="2" min="01" max="31"/>
			<?php echo form_dropdown('datem', $options3, 'Jan');?>
			<input type="input" name="dateyear" size="4" min="1600" max="1950" /></td>
        </tr>
        <tr>
            <td><label for="age">Age</label></td>
            <td><input type="number" name="age" min="0" max="115" /></td>
        </tr>
		<tr>
            <td><label for="inscription">Inscription</label></td>
  			<td><textarea name="inscription" rows="10" cols="75"></textarea></td>
        </tr>
		<tr>
            <td><label for="headstonenumber">Headstone Number</label></td>
            <td><input type="number" name="headstonenumber" size="3" /></td>
        </tr>
        <tr>
            <td><label for="other">Other</label></td>
			<td><textarea name="other" rows="3" cols="50"></textarea></td>
        </tr>
		<tr>
            <td><label for="imageurl">Image URL</label></td>
            <td><input type="input" name="imageurl" size="75" /></td>
        </tr>
		
		
		
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create graveyard item" /></td>
        </tr>
    </table>    
</form>