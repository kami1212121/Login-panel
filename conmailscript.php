<?php
    $code=$_POST['mailcon'];
    if($code=='123456')
    {
        header('location:login.html');
    }
    else
    {
        header('location:conemail.html');
    }
?>