<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Log succesfull</title>
</head>
<body>
    <div id='logon'>
        <h2 id="hello">Hello <?php echo $_SESSION['user']; ?></h2>
        <a href="logout.php" alt="logout" id="logout">Logout</a>
    </div>
</body>
</html>