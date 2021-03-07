<?php
session_start();
header("location:login.php");

$con = mysqli_connect("localhost","root","","uregister");
mysqli_select_db($con,'uregister');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = " select * from utable where name = '$name'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

/*if($num = 1){
	echo" Username Already taken";*/
//}else{
	$reg = " insert into utable(name , password) values ('$name' , '$pass')";
	mysqli_query($con, $reg);
	echo" Registration Successful";
//}
?>