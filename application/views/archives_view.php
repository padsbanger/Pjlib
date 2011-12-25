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
        <h1><?php echo anchor('active_ctrl',"Archiwum") ?> </h1>
       
        <table border="0" cellpadding="0" cellspacing="2">
            <tr><td colspan="8" class="noneborder">	<tr><td colspan="8" class="noneborder">
<?php echo anchor('active_ctrl',"<strong>Strona główna</strong> |");?>

<?php echo anchor('active_ctrl/add',"<strong>Dodaj książkę</strong>"); ?> <?php echo anchor('active_ctrl/archives',"<strong>| Archiwum</strong>"); ?>
				<?php echo anchor('active_ctrl/change_pass',"<strong>| Zmień hasło</strong>"); ?>
			<?php echo anchor('login/logout',"<strong>| Wyloguj</strong>"); ?>	</tr>
            <tr>
                <td class="heading"><strong>NO</strong></td>
                <td class="heading"><strong>Tytuł książki</strong></td>
                <td class="heading"><strong>Imie autora</strong></td>
				<td class="heading"><strong>Nazwisko autora</strong></td>
                <td class="heading"><strong>Wydawnictwo</strong></td>
				<td class="heading"><strong>Rok wydania</strong></td>
				<td class="heading"><strong>Kategoria</strong></td>
                <td class="heading"><strong>Data usunięcia</strong></td>
            </tr>
            <?php 
            $i=1;
            foreach($book as $row) { ?>
            
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row->tytul;?></td>
                <td><?php echo $row->imie_autor;?></td>
				<td><?php echo $row->nazwisko_autor;?></td>
				<td><?php echo $row->wydawnictwo;?></td>
                <td><?php echo $row->rok_wydania;?></td>
				<td><?php echo $row->kategoria;?></td>
                <td><?php echo $row->data_usuniecia; ?></td>
                
            </tr>
            <?php $i++; } ?>
        </table>


			</div>
				
				<div id="footer">

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
