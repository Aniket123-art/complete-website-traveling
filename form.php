<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_POST['submit'])
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  

 $query = "INSERT INTO gettouch(name,email,message) VALUES('$name','$email','$message')";
 $data = mysqli_query($conn,$query);
 if($data){
  echo "<script>alert('Data submitted success');</script>";
 }
 else
 {
  echo "not insert data";
 }
}
?>
