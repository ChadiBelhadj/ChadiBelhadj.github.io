<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Connect to the database
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "project";
    $conn = new mysqli($server, $user, $pass, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the posted data
    $username = $_POST["nusername"];
    $password = $_POST["npassword"];

    //checking if the username is used 
    $ss=$conn->prepare("SELECT username FROM user WHERE username=?  ");
    $ss->bind_param('s',$username);
    $ss->execute();
$ss->bind_result($used_usernames);
$ss->store_result();
if($ss->num_rows>0){
    echo"username already in use ";
}elseif($ss->num_rows<1){


// Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close()
    $conn->close();
} else {
    echo "Invalid request method.";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Created successfully</h1>
</body>
</html>
