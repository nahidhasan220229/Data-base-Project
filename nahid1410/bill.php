<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Create Bill</h1>
    <form action="process_bill.php" method="post">
        <label for="total_amount">Total Amount:</label>
        <input type="number" step="0.01" name="total_amount" id="total_amount" required><br>

        <label for="payment_method">Payment Method:</label>
        <select name="payment_method" id="payment_method" required>
            <option value="cash">Cash</option>
            <option value="card">Card</option>
            <option value="mobile_banking">Mobile Banking</option>
        </select><br>
        <br>

        <input type="submit" value="Create Bill">
    </form>
</body>
</html>
