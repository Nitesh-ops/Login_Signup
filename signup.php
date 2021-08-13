<?php
session_start();
header('location:index.php');

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
if($num == 1){
    echo "User already exist";
}
else{
    $ins="insert into signup(name,password) values('$email','$password')";
    mysqli_query($con,$ins);

}
?>

