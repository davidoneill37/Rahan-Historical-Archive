<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('graves/edit/'.$graves_item['id']); ?>
    <table><tr>
		<td><label for="typeofrecord">Type of Record</label></td>
            <td><input type="input" name="typeofrecord" size="10" value="<?php echo $graves_item['Type_of_Record'] ?>" /></td>
        </tr> 
	
        <tr>
            <td><label for="graveyard">Graveyard</label></td>
            <td><input type="input" name="graveyard" size="35" value="<?php echo $graves_item['Graveyard'] ?>" /></td>
        </tr>
		<tr>
            <td><label for="firstname">Firstname</label></td>
            <td><input type="input" name="firstname" size="35" value="<?php echo $graves_item['Firstname'] ?>" /></td>
        </tr>
		
        <tr>
            <td><label for="lastname">Lastname</label></td>
            <td><input type="input" name="lastname" size="35" value="<?php echo $graves_item['Lastname']?>" /></td>
        </tr>
		<tr>
            <td><label for="maidenname">Maiden_Name</label></td>
            <td><input type="input" name="maidenname" size="35" value="<?php echo $graves_item['Maiden_Name'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="death">Death (dd mmm yyyy)</label></td>
            <td><input type="input" name="dated" size="2" value="<?php echo $graves_item['Date_d'] ?>" />
			<input type="input" name="datem"size="3" value="<?php echo $graves_item['Date_m'] ?>"  />
			<input type="input" name="dateyear"size="4" value="<?php echo $graves_item['Date_Year'] ?>"/></td>
        </tr>
		<tr>
            <td><label for="age">Age</label></td>
            <td><input type="number" name="age" size="3" value="<?php echo $graves_item['Age'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="inscription">Inscription</label></td>
			<td><textarea name="inscription" rows="10" cols="75"><?php echo $graves_item['Inscription'] ?></textarea></td>
        </tr>
		<tr>
		
            <td><label for="headstonenumber">Headstone Number</label></td>
            <td><input type="number" name="headstonenumber" size="3" value="<?php echo $graves_item['Headstone_Number'] ?>" /></td>
        </tr>
		
		<tr>
            <td><label for="other">Other</label></td>
			<td><textarea name="other" rows="3" cols="50"><?php echo $graves_item['Other'] ?></textarea></td>			
        </tr>
        <tr>
            <td><label for="imageurl">Image URL</label></td>
			<td><input type="input" name="imageurl" size="75" value="<?php echo $graves_item['Image_Url'] ?>" /></td>	
        </tr>
		
		
		
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit graves item" /></td>
        </tr>
    </table>
</form>
