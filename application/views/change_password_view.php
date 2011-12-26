<html>
    <head>
		 <title>Strona główna</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>inc/js/jquery.cookie.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>inc/css/style.css" />
    
    </head>
    
    <body>
	<div id="fadein">
	<script>
	$(document).ready(function(){	
		$('#msg').delay(500).fadeIn(800);
	});
	
	
	
	
	</script>
	
	
		<div id="header">
			
				<div class="wrap2">
				<img src="<?php echo base_url();?>inc/img/logo.png"/>
				</div>
			
			</div>
	
	<div class="wrap">
	   
		<div id="content">


<?php echo form_open('active_ctrl/changepassword');  ?>
<p>
<label for="password">Aktualne hasło</label>

<input type="text" name="password" id="password" />
</p>
<p>
<label for="newpassword1">Nowe hasło</label>
<input type="text" name="newpassword1" id="newpassword1" />
</p>
<p>
<label for="newpassword2">Potwierdź nowe hasło</label>
<input type="text" name="newpassword2" id="newpassword2" />
</p>
<input type="submit" value="Zmień hasło" />


<?php echo form_close(); ?>
<div class="error">
		<?php echo validation_errors(); ?>

<?php echo ($this->session->flashdata('pesan')); ?>
</div>
	<input type="button" value="Anuluj" onClick="history.go(-1);return true;">

	</div>
	</div>
	<script>
	$(function () {
	  if ($.cookie("loaded") != "true") {
	      $('#fadein').hide().fadeIn("3500");
		
	      $.cookie("loaded", "true",{ expires: new Date() });
	  } else {
		var div = document.getElementById('fadein');
		div.style.display='block';
	}
	});
	</script>
</body>
</html>
