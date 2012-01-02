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

 
	<?php echo form_open('active_ctrl/search'); ?>
		<div>
			<?php echo form_label('Tytul:', 'tytul'); ?>
			<?php echo form_input('tytul', set_value('tytul'), 'id="tytul"'); ?>
		</div>

		<div>
			<?php echo form_label('Kategoria:', 'kategoria'); ?>
			<?php echo form_dropdown('kategoria', $category_options, 
				set_value('kategoria'), 'id="kategoria"'); ?>
		</div>

		<div>
			<?php echo form_label('Rok wydania:', 'rok_wydania'); ?>
			<?php echo form_dropdown('rok_wydania_comparison', 
				array('gt' => '>', 'gte' => '>=', 'eq' => '=', 'lte' => '<=', 'lt' => '<') , 
				set_value('rok_wydania_comparison'), 'id="rok_wydania_comparison"'); ?>
			<?php echo form_input('rok_wydania', set_value('rok_wydania'), 'id="rok_wydania"'); ?>
		</div>

		<div>
			<?php echo form_submit('action', 'Wyszukaj'); ?>
		</div>

	<?php echo form_close(); ?>


        <table border="0" cellpadding="0" cellspacing="2">
            <tr><td colspan="8" class="noneborder"><?php echo anchor('active_ctrl/add',"<strong>Dodaj książkę</strong>"); ?> <?php echo anchor('active_ctrl/archives',"<strong>| Archiwum</strong>"); ?>
				<?php echo anchor('active_ctrl/wyszukaj',"<strong>|<u> Wyszukaj</u></strong>"); ?>	
				<?php echo anchor('active_ctrl/change_pass',"<strong>| Zmień hasło</strong>"); ?>
			<?php echo anchor('login/logout',"<strong>| Wyloguj</strong>"); ?>	
			
			</tr>

			<div>
				Znaleziono <?php echo $num_results; ?> książek.
			</div>

			
				


					<?php foreach($fields as $field_name => $field_display): ?>


					<td id="heading" <?php if ($sort_by == $field_name) echo "class=\"sort_$sort_order\"" ?>>
						<?php echo anchor("active_ctrl/index/$field_name/" .
							(($sort_order == 'asc' && $sort_by == $field_name) ? 'desc' : 'asc') ,
							$field_display); ?>
					</td>
					
					<?php endforeach; ?>

		          </td>

				<tbody>
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
				</tbody>

			</table>

		<?php echo "<div id='pagination'>".$this->pagination->create_links()."</div>"?>
		
			</div>
			</div>
			</div>
					
			
		</div>
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
