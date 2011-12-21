
<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
        <title>Dodawanie książki</title>
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
        <h1>Formularz dodawania ksiażki</h1>
        <form name="inputBook" id="inputbook" action="save_data" method="post">
            <p>
                <label>Tytuł książki</label>
                <input type="text" name="tytul" size="80"/>
            </p>
            <p>
                <label>Imie autora</label>
                <input type="text" name="imie_autor" size="20" />
				<label>Nazwisko autora</label>
                <input type="text" name="nazwisko_autor" size="20" />
            </p>
            <p>
                <label>Wydawnictwo</label>
                <input type="text" name="wydawnictwo" size="30" />
            </p>
			<p>
                <label>Rok wydania</label>
                <input type="text" name="rok_wydania" size="30" />
            </p>
			<p>
                <label>kategoria</label>
                <input type="text" name="kategoria" size="30" />
            </p>
						
            <p>
                <input type="submit" name="submit" value="Dodaj książkę" />
				<input type="reset" value="Wyczyść pola" />
				
            </p>
			<p>
				<input type="button" value="Anuluj" onClick="history.go(-1);return true;"></form> 
			</p>
        </form>
        
    </body>
</html>

