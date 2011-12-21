
<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
        <title>SIMPLE ACTIVE RECORD APPLICATION  - Edit - Palgenep Center</title>
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
        <h1>FORM EDIT BOOK</h1>
        <form name="inputBook" id="inputbook" action="<?=base_url();?>index.php/active_ctrl/update_data" method="post">
            <p>
                <label>Tytuł książki</label>
                <input type="text" name="tytul" size="100" value="<?php echo $book->tytul;?>"/>
                <input type="hidden" name="id" size="100" value="<?php echo $book->id;?>"/>
            </p>
            <p>
                <label>Imie autora</label>
                <input type="text" name="imie_autor" size="30" value="<?php echo $book->imie_autor;?>"/>
				<label>Nazwisko autora</label>
                <input type="text" name="nazwisko_autor" size="30" value="<?php echo $book->nazwisko_autor;?>"/>
            </p>
            <p>
                <label>Wydawnictwo</label>
                <input type="text" name="wydawnictwo" size="30" value="<?php echo $book->wydawnictwo;?>"/>

            </p>
			 <p>
	            <label>Rok wydania</label>
	            <input type="text" name="rok_wydania" size="30" value="<?php echo $book->rok_wydania;?>"/>

	            </p>
			<p>
		        <label>kategoria</label>
		        <input type="text" name="kategoria" size="30" value="<?php echo $book->kategoria;?>"/>

		    </p>
            <p>
                <input type="submit" name="submit" value="Uaktualnij" />
				<input type="button" value="Nic nie zmieniaj" onClick="history.go(-1);return true;"></form> 
            </p>
        </form>
        
    </body>
</html>

