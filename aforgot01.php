<?php
include('database.php');
$email = $_POST['email'];
$que="select * from agent where email='$email'";
$res=mysqli_query($con,$que);
if($row=mysqli_fetch_array($res))
{
    use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require 'C:\xampp\htdocs\text\Agent\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\text\Agent\PHPMailer\src\SMTP.php';
require 'C:\xampp\htdocs\text\Agent\PHPMailer\src\Exception.php';

$mail = new PHPMailer(true);

// SMTP configuration
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; // Replace with your SMTP host
$mail->SMTPAuth = true;
$mail->Username = 'panicstorytime@gmail.com'; // Replace with your email address
$mail->Password = 'onazuxrrqksxavvi'; // Replace with your email password
$mail->Port = 465; // Replace with your SMTP port
$mail->SMTPSecure = 'ssl'; // Replace with the appropriate encryption (tls or ssl)

// Sender and recipient settings
$mail->setFrom('panicstorytime@gmail.com', 'AV Tech'); // Replace with your email and name
$mail->addAddress($email); // Send the email to the user

// Email content
$mail->isHTML(true);
$mail->Subject = 'Welcome ';
$mail->Body = ",<br><br>Your password will be there please note it";

// Check if the email is sent successfully
if ($mail->send()) {
    // Your Password will sent Your Email Succesf
    // You can add any additional logic or success message here
} else {
    // Email sending failed
    // You can add any error handling or error message here
}

// Close the statement and database connection

$con->close();

// Redirect the user to the contact.php page
header("Location: contact.php");
exit();
?>
}
else
{
    echo"<script>alert('Not verified')</script>";
}
?>




