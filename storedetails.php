<?php
    session_start();
    include("connection.php");
    $folder="images/";
    echo  $_SESSION['name'];
    $c=mysqli_query($conn,"INSERT INTO details values('$_SESSION[name]','$_POST[property]','$_POST[fileupload]','$_POST[features]','$_POST[description]',0)");
    echo $c;
    if(isset($_POST['submit'])){
        echo "Hello world";
        //$file=$folder.basename($_FILES['fileupload'],$_FILES['fileupload']['name'])
        if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$folder))
            echo "uploaded";
        else
            echo "error";
    }
    ?>
