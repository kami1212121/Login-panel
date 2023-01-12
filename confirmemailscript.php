<?php

    $email=$_POST['mailcon'];
    if($email==123456)
    {
        header('location:login.html');
    }
    else
    {
        header('location:confirmemail.html');
    }

?>