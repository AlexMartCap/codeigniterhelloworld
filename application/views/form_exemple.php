<?php if(($lastname) && (firstname!="")) : ?>
Hola <?php $lastname . ", " . $firstname:?>
<?php else:?>
A que esperes per donarme el teu nom!
<?php endif ;?>

<form action="<?php echo "base_url('index.php/simpatic/form_exemple');?>"method="get">
First name: <input type="text" name="firstname"><br>
Last name: <input type="text" name="lastname">

<input type="submit" value="Submit">
</form>