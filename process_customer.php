<?php
include 'db_connect.php';

$name = $_POST['name'];
$phone_number = $_POST['phone_number'];

$sql = "INSERT INTO Customer (name, phone_number) 
        VALUES ('$name', '$phone_number')";

if ($conn->query($sql) === TRUE) {
    echo "New customer added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
