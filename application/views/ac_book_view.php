<html>
    <head>
		 <title>Strona główna</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
		<link rel="stylesheet" type="text/css" href="inc/css/style.css" />
    
    </head>
    
    <body>
	
		<div id="header">
			
				<div class="wrap2">
				<img src="inc/img/logo.gif" width="100px" height="100px"/>
				</div>
			
			</div>
	
	<div class="wrap">
	   
		<div id="content">
        <h1><?php echo anchor('',"STRONA GŁÓWNA") ?> </h1>
        <p><?php echo $this->session->flashdata('pesan');?></p>
        <table border="0" cellpadding="0" cellspacing="2">
            <tr><td colspan="8" class="noneborder"><?php echo anchor('active_ctrl/add',"<strong>Dodaj książkę</strong>"); ?> <?php echo anchor('active_ctrl/history',"<strong>Archiwum</strong>"); ?></tr>
            <tr>
                <td class="heading"><strong>NO</strong></td>
                <td class="heading"><strong>Tytuł książki</strong></td>
                <td class="heading"><strong>Imie autora</strong></td>
				<td class="heading"><strong>Nazwisko autora</strong></td>
                <td class="heading"><strong>Wydawnictwo</strong></td>
				<td class="heading"><strong>Rok wydania</strong></td>
				<td class="heading"><strong>Kategoria</strong></td>
                <td class="heading"><strong>Czynności</strong></td>
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
                <td><?php echo anchor('active_ctrl/edit/'.$row->id,"Edytuj"); ?> |
                    <?php echo anchor('active_ctrl/delete/'.$row->id,"Usuń"); ?>
                </td>
                
            </tr>
            <?php $i++; } ?>
        </table>
			</div>
		</div>
    </body>
</html>
