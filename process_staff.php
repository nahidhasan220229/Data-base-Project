<?php
include 'db_connect.php';

$name = $_POST['name'];
$role = $_POST['role'];
$availability = $_POST['availability'];
$salary = $_POST['salary'];
$phone_number = $_POST['phone_number'];

$sql = "INSERT INTO Staff (name, role, availability, salary, phone_number) 
        VALUES ('$name', '$role', '$availability', $salary, '$phone_number')";

if ($conn->query($sql) === TRUE) {
    echo "New staff member added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
