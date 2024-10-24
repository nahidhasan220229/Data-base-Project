<?php
include 'db_connect.php'; // Include the database connection file

$category = $_POST['category'];
$item_name = $_POST['item_name'];
$availability = $_POST['availability'];
$price = $_POST['price'];

$sql = "INSERT INTO Menu (category, item_name, availability, price) 
        VALUES ('$category', '$item_name', '$availability', $price)";

if ($conn->query($sql) === TRUE) {
    echo "Menu item added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
