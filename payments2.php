<?php
// connect to the database
$host = "localhost";
$user = "root";
$password = "";
$database = "donations";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// get donation data from form
$fullname = mysqli_real_escape_string($conn,$_POST["fullname"]);
$email = mysqli_real_escape_string($conn,$_POST["email"]);
$address =mysqli_real_escape_string($conn, $_POST["address"]);
$city = mysqli_real_escape_string($conn,$_POST["city"]);
$state =mysqli_real_escape_string($conn, $_POST["state"]);
$zip =mysqli_real_escape_string($conn, $_POST["zip"]);
$cardname =mysqli_real_escape_string($conn, $_POST["cardname"]);
$cardnum =mysqli_real_escape_string($conn, $_POST["cardnum"]);
$expmonth =mysqli_real_escape_string($conn, $_POST["expmonth"]);
$expyear =mysqli_real_escape_string($conn, $_POST["expyear"]);
$amount = mysqli_real_escape_string($conn, $_POST["amount"]);
$cvv =mysqli_real_escape_string($conn, $_POST["cvv"]);

// insert donation data into database
$sql="INSERT INTO details (fullname, email, address, city, state, zip, cardname, cardnum, expmonth, expyear, amount, cvv) VALUES ('$fullname','$email','$address','$city','$state','$zip','$cardname','$cardnum','$expmonth','$expyear','$amount','$cvv')";

if (mysqli_query($conn, $sql)) {
  include 'success.php';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
