<html>
    <head>
			<title>Usuwanie ksiażki</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
			  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>inc/css/style.css" />
   
    </head>

    <body>
	
				<div id="header">

						<div class="wrap2">
						<img src="<?php echo base_url();?>inc/img/logo.png"/>
						</div>

					</div>

			<div class="wrap">

		<div id="content">
	
        <h1>Usuwanie książki</h1>
		<p>Książka zostanie usunięta z bazy i przeniesiona do archiwum</p>
        <form name="inputBook" id="inputbook" action="<?=base_url();?>index.php/active_ctrl/del" method="post">
            <p>
                <label>Tytuł książki</label>
                : <?php echo $book->tytul;?>
				 <input type="hidden" name="tytul" value="<?php echo $book->tytul;?>"/>
                <input type="hidden" name="id" size="100" value="<?php echo $book->id;?>"/>
            </p>
            <p>
                <label>Imie autora</label>
				<input type="hidden" name="imie_autor" value="<?php echo $book->imie_autor;?>"/>
                : <?php echo $book->imie_autor;?>
            </p>
			<p>
                <label>Nazwisko autora</label>
					<input type="hidden" name="nazwisko_autor" value="<?php echo $book->nazwisko_autor;?>"/>
                : <?php echo $book->nazwisko_autor;?>
            </p>
            <p>
                <label>Wydawnictwo</label>
				<input type="hidden" name="wydawnictwo" value="<?php echo $book->wydawnictwo;?>"/>
                : <?php echo $book->wydawnictwo;?>
            </p>
			<p>
                <label>Rok wydania</label>
				<input type="hidden" name="rok_wydania" value="<?php echo $book->rok_wydania;?>"/>
                : <?php echo $book->rok_wydania;?>
            </p>
			<p>
	            <label>Kategoria</label>
				<input type="hidden" name="kategoria" value="<?php echo $book->kategoria;?>"/>
	            : <?php echo $book->kategoria;?>
	       </p>
			
            <p>
				<h3>Czy jesteś pewnien że chcesz usunąć tą książkę ?<h3>
                <input type="submit" name="submit" value="Usuń książkę" />
				</form> 
				<a href="<?php echo base_url();?>/index.php/active_ctrl" class="powrot">Nie usuwaj</a>
            </p>
        </form>
        		</div>
			</div>
		
    </body>
</html>

