<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingredient Purchase Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Record Ingredient Purchase</h1>
    <form action="process_ingredient_purchase.php" method="post">
        <label for="name">Ingredient Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" required><br>

        <label for="unit_price">Unit Price:</label>
        <input type="number" step="0.01" name="unit_price" id="unit_price" required><br>

        <input type="submit" value="Record Purchase">
    </form>
</body>
</html>
