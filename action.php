<?php
// Connect to the database
$host = "localhost";
$user = "root";
$password = "";
$database = "volunteer";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the donation data from the form
$fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$campaignname = mysqli_real_escape_string($conn, $_POST["campaignname"]);

// Insert the donation data into the database
$sql = "INSERT INTO volunteers (fullname, email, campaignname) VALUES ('$fullname', '$email', '$campaignname')";

if (mysqli_query($conn, $sql)) {
  include"success1.php";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>