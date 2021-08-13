<?php
session_start();

$con =mysqli_connect('localhost','root');
if($con){
    echo "connection successfull";
}else{
    echo "Unable to connect";
}

mysqli_select_db($con,'login_form');
$email=$_POST['user'];
$password=$_POST['password'];

$check="select * from signup where name='$email' && password ='$password' ";

$result=mysqli_query($con,$check);

$num=mysqli_num_rows($result);
if($num>0){
    $_SESSION['emailid']=$email;
    header('location:home.php');
}
else{
    header('location:index.php');
}
?>