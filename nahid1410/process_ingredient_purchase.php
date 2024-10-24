<?php
include 'db_connect.php';

$name = $_POST['name'];
$quantity = $_POST['quantity'];
$unit_price = $_POST['unit_price'];

$sql = "INSERT INTO Ingredient_Purchase (name, quantity, unit_price) 
        VALUES ('$name', $quantity, $unit_price)";

if ($conn->query($sql) === TRUE) {
    echo "Ingredient purchase recorded successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
