<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>fetching the data</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<script type="text/javascript" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body style="background-color: burlywood;">
	<div class="container">
		<div class="row">
				<table class="table table-bordered">
					<thead>
						<th>Name</th>
						<th>Email</th>
						<th>Gender</th>
						<th>Languages</th>
						<th>Mobile Number</th>
						<th>Password</th>
					</thead>
					<tbody>
						<?php
						$server="localhost";
                        $uname="root";
                        $pwd="";
                        $db="sample";
                        $con=mysqli_connect($server,$uname,$pwd,$db) or die('Failed to connect');
                        $que="select * from agent";
                        $res=mysqli_query($con,$que);
                        while($row=mysqli_fetch_array($res))
                        {
                        	echo"<tr>";
                        	echo "<td>".$row[0]."</td>";
                        	echo "<td>".$row[1]."</td>";
                        	echo "<td>".$row[2]."</td>";
                        	echo "<td>".$row[3]."</td>";
                        	echo "<td>".$row[4]."</td>";
                        	echo "<td>".$row[5]."</td>";
          
                        	
                        }
						?>
					</tbody>
					
				</table>
			</div>
		</div>
		<form action="dashboard01.html" style="align-content: center;">
			<p align="center"><button class="btn btn-danger">close</button></p>
		</form>
	</div>

</body>
</html>