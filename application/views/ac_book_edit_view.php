
<html>
    <head>
		<title>Edycja książki</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
       <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>inc/css/style.css" />
    </style>
    </head>

    <body>
	
			<div id="header">

					<div class="wrap2">
					<img src="<?php echo base_url() ?>inc/img/logo.gif" width="100px" height="100px"/>
					</div>

				</div>

		<div class="wrap">

	<div id="content">
	
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
        		</div>
			</div>
		
    </body>
</html>

