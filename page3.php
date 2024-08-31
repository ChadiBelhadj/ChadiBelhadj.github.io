<?php
session_start();
$server = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'project';

// Create connection
$conn = new mysqli($server, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and password from POST request
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare SQL statement
$stmt = $conn->prepare("SELECT password FROM user WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($stored_password);

if ($stmt->fetch()) {
    // Verify the password
    if (password_verify($password, $stored_password)) {
        echo "Login successful";
    } else {
        echo "Invalid password";
    }
} else {
    echo "Invalid username";
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
