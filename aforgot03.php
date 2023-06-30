<?php
include('database.php');
$name=$_POST['name'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$que="update agent set password='$password',cpassword='$cpassword' where name='$name'";
if($res=mysqli_query($con,$que))
{
	echo"<script>('');window.location.href='fsuc.php';</script>";
}
else
{
	echo"<script>alert('not updated 😒');window.location.href='agent.php';</script>";
}
?>