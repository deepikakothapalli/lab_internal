<?php
    include("connection.php");
    if($_POST['password']===$_POST['confirm'])
    {
        mysqli_query($conn,"INSERT INTO register values('$_POST[pname]','$_POST[user]','$_POST[password]','$_POST[address]','$_POST[phoneno]')");
        mysqli_query($conn,"INSERT INTO `login` values('$_POST[user]','$_POST[password]')");
    }
?>