<?php
include('database.php');
$name=$_POST['name'] and $password=$_POST['password'];
$que="select * from agent where name='$name'";
$res=mysqli_query($con,$que);
if($row=mysqli_fetch_array($res))
    {
    if($row['password']==$password)
    {
        echo"<script>window.location.href='dashboard01/dashboard01.html';</script>";
    }
    else
    {
        echo "<script>alert('incorrect password 😒');window.location.href='agent.php';</script>";
    }
  }
    else
    {
        echo "<script>alert('incorrect name 😒');window.location.href='agent.php';</script>";
    }

?>