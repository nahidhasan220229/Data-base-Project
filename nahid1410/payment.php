<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Record Payment</h1>
    <form action="process_payment.php" method="post">
        <label for="amount">Amount:</label>
        <input type="number" step="0.01" name="amount" id="amount" required><br>

        <label for="payment_type">Payment Type:</label>
        <input type="text" name="payment_type" id="payment_type" required><br>

        <input type="submit" value="Record Payment">
    </form>
</body>
</html>
