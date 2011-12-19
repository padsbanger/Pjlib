<!-- SIMPLE ACTIVE RECORD APPLICATION     -->
<!-- http://www.palgenep-center.com       -->
<!-- views : book_add_view.php            -->
<html>
    <head>
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
                <label>Book Name</label>
                <input type="text" name="book_name" size="100" value="<?php echo $book->book_name;?>"/>
                <input type="hidden" name="id" size="100" value="<?php echo $book->id;?>"/>
            </p>
            <p>
                <label>Author</label>
                <input type="text" name="author" size="30" value="<?php echo $book->author;?>"/>
            </p>
            <p>
                <label>Publisher</label>
                <input type="text" name="publisher" size="30" value="<?php echo $book->publisher;?>"/>
            </p>
            <p>
                <input type="submit" name="submit" value="UPDATE" />
            </p>
        </form>
        
    </body>
</html>

