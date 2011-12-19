<!-- SIMPLE ACTIVE RECORD APPLICATION     -->
<!-- http://www.palgenep-center.com       -->
<!-- views : book_delete_view.php         -->

<html>
    <head>
        <title>SIMPLE ACTIVE RECORD APPLICATION - Delete - Palgenep Center</title>
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
        <h1>FORM DELETE BOOK</h1>
        <form name="inputBook" id="inputbook" action="<?=base_url();?>index.php/active_ctrl/del" method="post">
            <p>
                <label>Book Name</label>
                : <?php echo $book->book_name;?>
                <input type="hidden" name="id" size="100" value="<?php echo $book->id;?>"/>
            </p>
            <p>
                <label>Author</label>
                : <?php echo $book->author;?>
            </p>
            <p>
                <label>Publisher</label>
                : <?php echo $book->publisher;?>
            </p>
            <p>
                <input type="submit" name="submit" value="DELETE" />
            </p>
        </form>
        
    </body>
</html>

