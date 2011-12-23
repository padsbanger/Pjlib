<html>

<?php echo form_open('login/validate_credentials');  ?>
<?php echo form_input('username', 'Username');  ?>
<?php echo form_password('password', 'Password');  ?>
<?php echo form_submit('submit', 'Login');  ?>



</html>