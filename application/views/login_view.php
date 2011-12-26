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
				<img src="<?php echo base_url();?>inc/img/logo.gif" width="100px" height="100px"/>
				</div>
			
			</div>
	
	<div class="wrap">
	   
		<div id="content">


<div id="login_form">
<form name="inputBook" id="inputbook" action="<?=base_url();?>index.php/login/validate_credentials" method="post">



 <input type="text" name="username"/>
  <input type="password" name="password" />


<?php echo form_submit('submit', 'Zaloguj');  ?>

<?php echo form_close(); ?>
<?php echo validation_errors(); ?>
<p><?php  echo $this->session->flashdata('pesan'); ?></p>
	
	
		<div id="footer">
				<p>&copy; 2011  <a href="http://gdansk.pjwstk.edu.pl">PJWSTK Gdańsk</a></p>
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


