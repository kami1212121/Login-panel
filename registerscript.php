<?php
    $connect=mysqli_connect('localhost','root','','gory');
    $login=$_POST["log"];
    $name=$_POST["name"];
    $last=$_POST["lastname"];
    $mail=$_POST["email"];
    $pass=$_POST["password"];
    $passcheck=$_POST["repass"];
    $hashpass=sha1($pass);
    $hashpass2=sha1($passcheck);
    $send="INSERT INTO dane VALUES(NULL,'$login','$name','$last','$mail','$hashpass')";
    $checklogin="SELECT Login FROM dane WHERE Login='$login'";
    $checkEmail="SELECT email FROM dane WHERE email='$mail'";
    $CheckLoginResult=mysqli_query($connect,$checklogin);
    $CheckEmailResult=mysqli_query($connect,$checkEmail);
        if(empty($login) || empty($name) || empty($last) || empty($mail) || empty($pass) || empty($passcheck))
        {
            echo "Some fields are empty";
        }
        elseif($hashpass!=$hashpass2)
        {
            echo "Password are not the same";
        }
        elseif(mysqli_num_rows($CheckLoginResult)>0)
        {
            echo "User is already taken";
        }
        elseif(mysqli_num_rows($CheckEmailResult)>0)
        {
            echo "Email is already taken";
        }
        else
        {
            mysqli_query($connect,$send);
            header('location:conemail.html');
        }
    mysqli_close($connect);
?>