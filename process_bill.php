<?php
include 'db_connect.php';

$total_amount = $_POST['total_amount'];
$payment_method = $_POST['payment_method'];

$sql = "INSERT INTO Billing (total_amount, payment_method) 
        VALUES ($total_amount, '$payment_method')";

if ($conn->query($sql) === TRUE) {
    echo "Bill created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
