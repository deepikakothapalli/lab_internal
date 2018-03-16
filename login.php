<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="register.css">
    </head>
    <body>
        <div>
            <h2>Login</h2>
            <form method="POST" action="logincheck.php">
                <label>username</label>
                <input type="text" name="username" placeholder="username" required><br><br>
                <label>password</label>
                <input type="password" name="password" placeholder="password" required><br><br>
                <input type="submit" value="submit">
            </form>
        </div>
    </body>
</html>