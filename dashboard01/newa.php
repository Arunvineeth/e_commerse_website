<!DOCTYPE html>

<html>

<head>

    <title>New Agend Adding</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

     <form action="newa1.php" method="post">
         <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <h2>New Agend Adding</h2>
        <hr><hr>

        <label>User Name</label>

        <input type="text" name="name" placeholder="User Name"><br>

        <label>E Mail</label>

        <input type="text" name="email" placeholder="E-Mail"><br>

        <label>Gender</label>

        <input type="radio" name="gender" class="form-check" value="male">male
        <input type="radio" name="gender" class="form-check" value="Female">Female<br>

        <label>Language Known</label>

        <input type="checkbox" name="language[]" class="form-check" value="Tamil">Tamil<br>
        <input type="checkbox" name="language[]" class="form-check" value="Hindi">Hindi<br>
        <input type="checkbox" name="language[]" class="form-check" value="English">English<br> 

        <label>Mobile Number</label>

        <input type="text" name="Mobile Number" placeholder="Mobile Number"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br> 

        <label>Confirm Password</label>

        <input type="password" name="cpassword" placeholder="Confirm Password"><br> 
 


        <p align="center" ><button  type="submit">Register</button></p>
        

     </form>

</body>

</html>