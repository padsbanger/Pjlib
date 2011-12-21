
<html>
    <head>
		<title>Dodawanie książki</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
		 <link rel="stylesheet" type="text/css" href="inc/css/style.css" />
    </head>

    <body>
        <h1>Formularz dodawania ksiażki</h1>

	
        <form name="inputBook" id="inputbook" action="save_data" method="post">
            <p>
                <label>Tytuł książki</label>
                <input type="text" name="tytul" value="<?php echo set_value('tytul') ?>" size="80"/>
            </p>
            <p>
                <label>Imie autora</label>
                <input type="text" name="imie_autor"value="<?php echo set_value('imie_autor') ?>" size="20" />
				<label>Nazwisko autora</label>
                <input type="text" name="nazwisko_autor" value="<?php echo set_value('nazwisko_autor') ?>" size="20" />
            </p>
            <p>
                <label>Wydawnictwo</label>
                <input type="text" name="wydawnictwo" value="<?php echo set_value('wydawnictwo') ?>" size="30" />
            </p>
			<p>
                <label>Rok wydania</label>
                <input type="text" name="rok_wydania" value="<?php echo set_value('rok_wydania') ?>" size="30" />
            </p>
			<p>
                <label>kategoria</label>
                <input type="text" name="kategoria" value="<?php echo set_value('kategoria') ?>" size="30" />
            </p>
						
            <p>
                <input type="submit" name="submit" value="Dodaj książkę" />
				<input type="reset" value="Wyczyść pola" />
				
            </p>
			<p>
				<input type="button" value="Anuluj" onClick="history.go(-1);return true;"></form> 
			</p>
        </form>
        
				<?php echo validation_errors(); ?>
			
		
    </body>
</html>

