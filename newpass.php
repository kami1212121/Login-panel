<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body id="login">
    <div id="login-panel">
        <span class="rl-text"><a href="login.html" alt="login" class="link" id="active">Login</a>
        <a href="register.html" alt="register" class="link" id="noactive">Register</a></span>
            <form method="POST" action="forgotscript.php" class="login-form">
                <h3 style="color:white">Change password</h3>
                <input type="password" placeholder="New password" class="input-login" size="25" name="pass" id="newpass">
                <br><br>
                <input type="password" placeholder="Retype new password" class="input-login" size="25" name="repass" id="newrepass">
                <br><br>
                <input type="submit" value="Reset" id="log-button"><br><br>
            </form>
            
    </div>
</body>
</html>
<?php
    mysqli_close($connect);
?>