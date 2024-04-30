<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        /* CSS styles */
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color:green; /* Add background color */
        }

        h2 {
            text-align: center; /* Center align the heading */
        }

        label {
            display: block;
            margin-bottom: 10px; /* Increase margin bottom for labels */
            font-weight: bold; /* Make labels bold */
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 20px); /* Adjust width to accommodate padding */
            padding: 10px; /* Increase padding */
            margin-bottom: 20px; /* Increase margin bottom for inputs */
            border: 1px solid #ccc;
            border-radius: 5px; /* Increase border radius */
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: black; /* Change button color */
            color: yellow;
            padding: 12px 24px; /* Increase padding */
            border: none;
            border-radius: 5px; /* Increase border radius */
            cursor: pointer;
            width: 100%; /* Make button full width */
            text-transform: uppercase; /* Uppercase text */
        }

        button[type="submit"]:hover {
            background-color:gray; /* Darker color on hover */
        }
    </style>
</head>
<body>
    <!-- User Registration Form -->
    <div class="container">
        <h2>User Registration</h2>
        <form id="registrationForm" action="register.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>

<?php
// Database connection
$servername = "localhost"; // Change this to your server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "online_recruitment_management_system"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    // Set parameters
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Execute the statement
    if ($stmt->execute()) {
        echo "<p>Registration successful!</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
