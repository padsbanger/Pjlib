<html>
    <head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
        <title>Usuwanie ksiażki</title>
    <style>
        td {
            border:1px #0134c5 solid;
            padding:5px;
            font-size: 12px;
        }
        body {
            font-family: tahoma;
            font-size: 12px;
        }
        label {
            width:100px;
            display: inline-block;
        }
    </style>
    </head>

    <body>
        <h1>Czy napewno chcesz usunąć tą książkę ?</h1>
        <form name="inputBook" id="inputbook" action="<?=base_url();?>index.php/active_ctrl/del" method="post">
            <p>
                <label>Tytuł książki</label>
                : <?php echo $book->tytul;?>
                <input type="hidden" name="id" size="100" value="<?php echo $book->id;?>"/>
            </p>
            <p>
                <label>Imie autora</label>
                : <?php echo $book->imie_autor;?>
            </p>
			<p>
                <label>Nazwisko autora</label>
                : <?php echo $book->nazwisko_autor;?>
            </p>
            <p>
                <label>Wydawnictwo</label>
                : <?php echo $book->wydawnictwo;?>
            </p>
			<p>
                <label>Rok wydania</label>
                : <?php echo $book->rok_wydania;?>
            </p>
			<p>
	            <label>Kategoria</label>
	            : <?php echo $book->kategoria;?>
	       </p>
			
            <p>
                <input type="submit" name="submit" value="Usuń książkę" />
            </p>
        </form>
        
    </body>
</html>

