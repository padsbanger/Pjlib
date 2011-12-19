<!-- SIMPLE ACTIVE RECORD APPLICATION     -->
<!-- http://www.palgenep-center.com       -->
<!-- views : book__view.php               -->
<html>
    <head>
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
        <h1><?php echo anchor('active_ctrl',"LIST BOOK DENGAN MENGGUNAKAN ACTIVE RECORD") ?> </h1>
        <p><?php echo $this->session->flashdata('pesan');?></p>
        <table border="0" cellpadding="0" cellspacing="2">
            <tr><td colspan="5" class="noneborder"><?php echo anchor('active_ctrl/add',"<strong>ADD</strong>"); ?></tr>
            <tr>
                <td bgcolor="#999999"><strong>NO</strong></td>
                <td bgcolor="#999999"><strong>Book Name</strong></td>
                <td bgcolor="#999999"><strong>Author</strong></td>
                <td bgcolor="#999999"><strong>Publish</strong></td>
                <td bgcolor="#999999"><strong>Action</strong></td>
            </tr>
            <?php 
            $i=1;
            foreach($book as $row) { ?>
            
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row->book_name;?></td>
                <td><?php echo $row->author;?></td>
                <td><?php echo $row->publisher;?></td>
                <td><?php echo anchor('active_ctrl/edit/'.$row->id,"Edit"); ?> |
                    <?php echo anchor('active_ctrl/delete/'.$row->id,"Delete"); ?>
                </td>
                
            </tr>
            <?php $i++; } ?>
        </table>
    </body>
</html>
