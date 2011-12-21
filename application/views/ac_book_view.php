<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
        <title>SIMPLE ACTIVE RECORD APPLICATION - Palgenep Center</title>

    <style>
        td {
            border:1px #0134c5 solid;
            padding:5px;
            font-size: 12px;
        }
        td .noneborder {
            border:none;
        }
        body {
            font-family: tahoma;
            font-size: 12px;
        }
    </style>
    </head>
    
    <body>
        <h1><?php echo anchor('active_ctrl',"STRONA GŁÓWNA") ?> </h1>
        <p><?php echo $this->session->flashdata('pesan');?></p>
        <table border="0" cellpadding="0" cellspacing="2">
            <tr><td colspan="8" class="noneborder"><?php echo anchor('active_ctrl/add',"<strong>Dodaj książkę</strong>"); ?></tr>
            <tr>
                <td bgcolor="#999999"><strong>NO</strong></td>
                <td bgcolor="#999999"><strong>Tytuł książki</strong></td>
                <td bgcolor="#999999"><strong>Imie autora</strong></td>
				<td bgcolor="#999999"><strong>Nazwisko autora</strong></td>
                <td bgcolor="#999999"><strong>Wydawnictwo</strong></td>
				<td bgcolor="#999999"><strong>Rok wydania</strong></td>
				<td bgcolor="#999999"><strong>Kategoria</strong></td>
                <td bgcolor="#999999"><strong>Czynności</strong></td>
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
    </body>
</html>
