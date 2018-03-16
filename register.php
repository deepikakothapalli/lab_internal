<!DOCTYPE html>
<html>
    <head>
        <title>register</title>
        <link rel="stylesheet" href="register.css">
       <script>
            function Validate()
            {
                
                /*xhttp=new XMLHttpRequest();
                xhttp.open("POST","registercheck.php",true);
                xhttp.send();-->*/
            }
        </script>
    </head>
    <body>
        <div>
            <h2>Register</h2>
            <form action="registercheck.php" action="POST">
                <label>Name</label>
                <input type="text" name="pname" placeholder="Enter your name" required><br><br>
                <label>username</label>
                <input type="text" name="user" placeholder="Enter username" required><br><br>
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter password" required><br><br>
                <label>Confirm password</label>
                <input type="password" name="confirm" placeholder="Re-enter password" required><br><br>
                <label>Address</label><br>
                <textarea rows="5" cols="40" name="address"></textarea><br><br>
                <label>phone no</label>
                <input type="text" name="phoneno" placeholder="Enter phoneno" required><br><br>
                <input type="submit" value="submit">
            </form>
        </div> 
    </body>     
</html>