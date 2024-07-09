<?php

// Check if form is submitted
if (isset($_POST['submit'])) {

  // Get form data (**sanitize and validate before using!**)
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_no'];
  $password = $_POST['password'];

  // Database connection details (replace with your configuration)
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "damshi";

  // Create connection
  $conn = new mysqli($servername,$username,$password,$dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO signup (name, email,phone_no, password)
  VALUES ('$name', '$email','$phone_number' ,'$password')";
 

  $conn->close();
} else {
//   // Form not submitted
//   echo "No form data submitted";
}
?>
 