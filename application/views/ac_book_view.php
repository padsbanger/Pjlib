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
        <h1><?php echo anchor('active_ctrl',"STRONA GŁÓWNA") ?> </h1>
        <p><?php  if($this->session->flashdata('pesan')) {
	
   echo "<div id ='msg'><img src=";echo base_url()."inc/img/msg.png width='40px' height='40px' alt='msg'/><p>". $this->session->flashdata('pesan')." <a href=''id='koniec'> [ X ]</a></p></div>";} else {
	echo ''; 
}?></p>

 
        <table border="0" cellpadding="0" cellspacing="2">
            <tr><td colspan="8" class="noneborder"><?php echo anchor('active_ctrl/add',"<strong>Dodaj książkę</strong>"); ?> <?php echo anchor('active_ctrl/archives',"<strong>| Archiwum</strong>"); ?>
				<?php echo anchor('active_ctrl/display',"<strong>| Wyszukaj</strong>"); ?>	
				<?php echo anchor('active_ctrl/change_pass',"<strong>| Zmień hasło</strong>"); ?>
			<?php echo anchor('login/logout',"<strong>| Wyloguj</strong>"); ?>	
					
			</tr>        
		
			<?php foreach($fields as $field_name => $field_display): ?>
	
				
			<td id="heading" <?php if ($sort_by == $field_name) echo "class=\"sort_$sort_order\"" ?>>
				<?php echo anchor("active_ctrl/index/$field_name/" .
					(($sort_order == 'asc' && $sort_by == $field_name) ? 'desc' : 'asc') ,
					$field_display); ?>
			</td>
			<?php endforeach; ?>
			
          </td>
            
            <tr>
               		<?php foreach($films as $film): ?>
					<tr>
						<?php foreach($fields as $field_name => $field_display): ?>
						<td>
							<?php echo $film->$field_name; ?>
						</td>
						
						<?php endforeach; ?>
						 <td><?php echo anchor('active_ctrl/edit/'.$film->id,"Edytuj"); ?> |
			                    <?php echo anchor('active_ctrl/delete/'.$film->id,"Usuń"); ?>
			                </td>
					</tr>
					<?php endforeach; ?>
               
                
            </tr>

			
          
        </table>
		<?php echo "<div id='pagination'>".$this->pagination->create_links()."</div>"?>
		
			</div>
				
				<div id="footer">
						<p>&copy; 2011  <a href="http://gdansk.pjwstk.edu.pl">PJWSTK Gdańsk</a></p>
				</div>			
			
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
