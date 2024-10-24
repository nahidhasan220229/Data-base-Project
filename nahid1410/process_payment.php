<?php
include 'db_connect.php';

$amount = $_POST['amount'];
$payment_type = $_POST['payment_type'];

$sql = "INSERT INTO Payment (amount, payment_type) 
        VALUES ($amount, '$payment_type')";

if ($conn->query($sql) === TRUE) {
    echo "Payment recorded successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
