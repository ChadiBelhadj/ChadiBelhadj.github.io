<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle form submission


// Get username and password from POST request
$username = $_POST['username'];
$password = $_POST['password'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Under Construction</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .message {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #ff9800;
        }
        p {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="message">
        <h1>Site Under Construction</h1>
        <p>This site is under construction and will be available until <strong>10/09/2024</strong>.</p>
    </div>
</body>
</html>
