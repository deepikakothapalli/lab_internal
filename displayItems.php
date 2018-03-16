<?php
    include("connection.php");
    $res=mysqli_query($conn,"SELECT * from details");
    echo "<table>";
    echo "<tr><th>Image</th><th></th></tr>";
   /* while($res1=mysqli_fetch_array($res))
    {
        
    }*/
?>