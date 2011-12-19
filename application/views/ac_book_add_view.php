<!-- SIMPLE ACTIVE RECORD APPLICATION     -->
<!-- http://www.palgenep-center.com       -->
<!-- views : book_add_view.php            -->

<html>
    <head>
        <title>SIMPLE ACTIVE RECORD APPLICATION - Add - Palgenep Center</title>
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
        <h1>FORM INPUT BOOK</h1>
        <form name="inputBook" id="inputbook" action="save_data" method="post">
            <p>
                <label>Book Name</label>
                <input type="text" name="book_name" size="100"/>
            </p>
            <p>
                <label>Author</label>
                <input type="text" name="author" size="30" />
            </p>
            <p>
                <label>Publisher</label>
                <input type="text" name="publisher" size="30" />
            </p>
            <p>
                <input type="submit" name="submit" value="SAVE" />
            </p>
        </form>
        
    </body>
</html>

