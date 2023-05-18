<?php
$host = "localhost";
$username = "username";
$password = "password";
$database = "sampleDB";

// Connect to database
$connection = new mysqli($host, $username, $password, $database);

// Check connection
if ($connnection->connect_error) {
  die("Connection unsuccessful: " . $connection->connect_error);
}

//Parameterized query without a prepared statement
$sql = "INSERT INTO Users (name, phone, email)
VALUES ('$user_name', '$phone_number', '$email_address')";

//Setting the parameters
$user_name = "Mary";
$phone_number = "+1 123456";
$email_address = "mary@gmail.com";

//Executing the statement
$connection->query($sql);

$connection->close();
?>
