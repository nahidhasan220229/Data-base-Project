<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Staff Management</h1>
    <form action="process_staff.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="role">Role:</label>
        <input type="text" name="role" id="role" required><br>

        <label for="availability">Availability:</label>
        <input type="text" name="availability" id="availability" required><br>

        <label for="salary">Salary:</label>
        <input type="number" step="0.01" name="salary" id="salary" required><br>

        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" id="phone_number" required><br>

        <input type="submit" value="Add Staff">
    </form>
</body>
</html>
