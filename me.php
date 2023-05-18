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

// Parameterized query with prepared the statement
// Includes placeholders
$statement = $connection->prepare("INSERT INTO Users (name, phone, email) VALUES (?, ?, ?)");

// Binding the parameter values
$statement->bind_param("sss", $name, $phone, $email);

//Setting the parameters
$name = "John";
$phone = "+1 254789";
$email = "john@myapp.com";

//Executing the statement
$statement->execute();

$statement->close();

$connection->close();
?>
