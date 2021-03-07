<?php
session_start();


$con = mysqli_connect("localhost","root","","userregistration");
mysqli_select_db($con,'uregister');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = " select * from utable where name = '$name' && password = '$pass' ";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num = 1){
	$_SESSION['username'] = $name;
	header('location:home.php');
}else{
	header('location:login.php');
	/*$reg = " insert into utable(name , password) values ('$name' , '$pass')";
	mysqli_query($con, $reg);
	echo" Registration Successful";*/
}
?>