<?php
$server="localhost";
$uname="root";
$pwd="";
$db="sample";
$con=mysqli_connect($server,$uname,$pwd,$db) or die('Failed to connect');
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$lang=$_POST['language'];
$l1="";
foreach ($lang as $values) 
{
	$l1 .=$values.",";
}
$Mobile_Number=$_POST['Mobile_Number'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$query="insert into agent values('$name','$email','$gender','$l1','$Mobile_Number','$password','$cpassword')";
if($result=mysqli_query($con,$query))
{
	echo"<script>window.location.href='asuc.php';</script>";
}
else
{
	echo"Registeration Error😒";
}

?>