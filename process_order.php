<?php
include 'db_connect.php'; // Include the database connection

$customer_id = $_POST['customer_id'];
$table_number = $_POST['table_number'];
$menu_item_id = $_POST['menu_item']; // ID of the selected menu item
$quantity = $_POST['quantity'];
$feedback = $_POST['feedback'];

// Retrieve selected menu item details (price) from the database
$item_query = "SELECT price FROM Menu WHERE menu_id = $menu_item_id";
$item_result = $conn->query($item_query);

if ($item_result->num_rows > 0) {
    $item = $item_result->fetch_assoc();
    $total_price = $item['price'] * $quantity; // Calculate total price based on quantity

    // Insert the order into the database
    $sql = "INSERT INTO `Order` (customer_id, table_number, menu_item_id, quantity, feedback, total_price) 
            VALUES ($customer_id, $table_number, $menu_item_id, $quantity, '$feedback', $total_price)";

    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error: Menu item not found!";
}

$conn->close();
?>
