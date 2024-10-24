<?php
include 'db_connect.php'; // Include database connection

// Query to get available menu items from the database
$menu_query = "SELECT menu_id, item_name, price FROM Menu WHERE availability = 'yes'";
$menu_result = $conn->query($menu_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Order</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Create New Order</h1>
    <form action="process_order.php" method="post">
        <label for="customer_id">Customer ID:</label>
        <input type="number" name="customer_id" id="customer_id" required><br>

        <label for="table_number">Table Number:</label>
        <input type="number" name="table_number" id="table_number" required><br>

        <label for="menu_item">Select Menu Item:</label>
        <select name="menu_item" id="menu_item" required>
            <option value="">--Select Item--</option>
            <?php
            // Fetch and display menu items dynamically from the database
            if ($menu_result->num_rows > 0) {
                while($row = $menu_result->fetch_assoc()) {
                    echo "<option value='" . $row['menu_id'] . "'>" . $row['item_name'] . " - $" . $row['price'] . "</option>";
                }
            } else {
                echo "<option value=''>No items available</option>";
            }
            ?>
        </select><br>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" required><br>

        <label for="feedback">Feedback:</label>
        <textarea name="feedback" id="feedback"></textarea><br>

        <input type="submit" value="Place Order">
    </form>
</body>
</html>
