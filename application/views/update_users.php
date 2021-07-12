<!DOCTYPE html>
<html>
<head>
    <title>test reg</title>
    <style>
        table,td{
            border: 1px solid black;
        }
        td{
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php
        foreach ($data as $row){
    ?>
    <form method="post">
        <table style="width:100%">
        <tr>
            <td>Enter your name:</td>
            <td><input type="text" name="Name" value="<?php echo $row->Name;?>"></td>
        </tr>
        <tr>
            <td>Enter your email:</td>
            <td><input type="text" name="Email" value="<?php echo $row->Email;?>"></td>
        </tr>
        <tr>
            <td>Enter your mobile:</td>
            <td><input type="text" name="Mobile" value="<?php echo $row->Mobile;?>"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center;"><input type="submit" name="update" value="Update Data"></td>
        </tr>
        </table>
    </form>
    
        <?php } ?>

</body>    
</html>