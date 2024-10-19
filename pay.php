<?php
// connect to the database
$conn = mysqli_connect("localhost", "username", "password", "pay");

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// get donation data from form
$name = $_POST["name"];
$email = $_POST["email"];
$amount = $_POST["amount"];

// insert donation data into database
$sql = "INSERT INTO donations (name, email, amount) VALUES ('$name', '$email', '$amount')";

if (mysqli_query($conn, $sql)) {
    echo "Donation inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// close database connection
mysqli_close($conn);
?>