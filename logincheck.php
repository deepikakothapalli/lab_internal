<?php
    session_start();
    include("connection.php");
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $check=mysqli_query($conn,"SELECT password from login where username='$user'");
    $res=mysqli_query($conn,"SELECT name from `register` where username='$user'");
    if($res)
        $res1=mysqli_fetch_array($res);
    if($check)
    {
        $check1=mysqli_fetch_array($check);
        if($check1['password']===$pass)
        {
            $_SESSION['name']=$res1['name'];
            header("Location:http://localhost/project/display.php");
        }
        else   
            echo "<h1>incorrect password</h1>";
    }

