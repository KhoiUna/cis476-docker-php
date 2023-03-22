<?php

include_once './validate.php';

// TODO: insert data gathered from the insert.php form into the database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $brand = test_input($_POST["brand"]);
    $product = test_input($_POST["product"]);
    $price = test_input($_POST["price"]);
}

$servername = "database";
$username = "root";
$password = "password";
$dbname = "officemin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO items (brand, product, price) VALUES ('$brand', '$product', '$price')";

if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// after the insert send the user back to the main menu
header("location: index.php");
