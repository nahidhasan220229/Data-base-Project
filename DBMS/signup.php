<?php
// Database connection
$servername = "localhost";
$username = "root"; // default WAMP username
$password = ""; // default WAMP password (usually empty)
$dbname = "cafeteria";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $gender = $conn->real_escape_string($_POST['gender']);
    $dob = $conn->real_escape_string($_POST['dob']);
    $phone = $conn->real_escape_string($_POST['phone']);

    // SQL query to insert data
    $sql = "INSERT INTO customer (username,email, password, gender, dob, phone) VALUES ('$username','$email', '$password', '$gender', '$dob', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Signup successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
