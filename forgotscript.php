<?php
    $connect=mysqli_connect('localhost','root','','gory');

    $mail=$_POST['email'];
    if(empty($mail))
    {
        header('location:forgot.html');
    }
    else
    {
        header('location:conemail.html');
    }

    mysqli_close($connect);
?>