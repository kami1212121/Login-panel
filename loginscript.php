<?php
$connect=mysqli_connect('localhost','root','','gory');

session_start();
$login=$_POST['log'];
$password=$_POST['pass'];
$hashpassword=sha1($password);
$logsql="SELECT * FROM dane WHERE Login='$login'";
$pass_sql="SELECT password FROM dane WHERE password='$hashpassword'";
$q1=mysqli_query($connect,$logsql);
$q2=mysqli_query($connect,$pass_sql);
if(mysqli_num_rows($q1)>0 && mysqli_num_rows($q2)>0)
{
    header('location:http://localhost/Panel-Logowania/home.php');
    $_SESSION['user']=htmlspecialchars($login);
}
else
{
    header('location:login.html');
}

mysqli_close($connect);
?>