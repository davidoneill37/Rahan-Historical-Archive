<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('graves/create'); ?>    
    <table>
	<tr>
            <td><label for="typeofrecord">Type of Record</label></td>
            <td><input type="input" name="typeofrecord" size="1" value "G" /></td>
        </tr>
	
       	<tr>
            <td><label for="firstname">Graveyard</label></td>
            <td><input type="input" name="graveyard" size="35" /></td>
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
            <td><label for="dated">Death (dd mmm yyyy)</label></td>
            <td><input type="input" name="dated"  /></td>
			<td><input type="input" name="datem"  /></td>
			<td><input type="input" name="dateyear"  /></td>
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
			<td><textarea name="other" rows="2" cols="50"></textarea></td>
        </tr>
		<tr>
            <td><label for="imageurl">Image URL</label></td>
            <td><input type="input" name="imageurl" size="50" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create graveyard item" /></td>
        </tr>
    </table>    
</form>
