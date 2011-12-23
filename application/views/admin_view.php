<html>
    <head>
		 <title>Strona główna</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>inc/js/jquery.cookie.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>inc/css/style.css" />
    
    </head>
    
    <body>

	
	
		<div id="header">
			
				<div class="wrap2">
				<img src="<?php echo base_url();?>inc/img/logo.gif" width="100px" height="100px"/>
				
				</div>
			
			</div>
			<div class="wrap">

				<div id="content">

<?php echo form_open('admin'); ?>


<?php echo form_input ('username', 'username'); ?>


<?php echo form_input ('password', 'password'); ?>

<?php echo form_submit ('submit', 'Submit'); ?>

<?php echo form_close(); ?>


<p><?php  echo $this->session->flashdata('pesan'); ?>

</div>
<div>
	</body>
</hmlt>
