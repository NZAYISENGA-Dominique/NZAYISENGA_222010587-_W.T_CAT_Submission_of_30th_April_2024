<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiter Profile</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Recruiter Profile -->
    <div class="container">
        <h2>Recruiter Profile</h2>
        <form id="profileForm" action="save_profile.php" method="post">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" value="John Doe">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="john.doe@example.com">

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" value="(123) 456-7890">

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="123 Main Street, Anytown">

            <label for="companyType">Company Type:</label>
            <input type="text" id="companyType" name="companyType" value="Recruitment Agency">

            <label for="companyName">Company Name:</label>
            <input type="text" id="companyName" name="companyName" value="Acme Recruiting">

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget semper nulla. Donec nec urna sed mi vehicula euismod.</textarea>

            <label for="industry">Industry:</label>
            <input type="text" id="industry" name="industry" value="Human Resources">
            
            <button type="submit">Save Profile</button>
        </form>
    </div>
</body>
</html>

<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_recruitment_management_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO recruiter_profiles (fullName, email, phone, address, companyType, companyName, description, industry) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $fullName, $email, $phone, $address, $companyType, $companyName, $description, $industry);

// Set parameters
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$companyType = $_POST['companyType'];
$companyName = $_POST['companyName'];
$description = $_POST['description'];
$industry = $_POST['industry'];

// Execute the statement
if ($stmt->execute()) {
    echo "<p>Profile saved successfully!</p>";
} else {
    echo "<p>Error: " . $stmt->error . "</p>";
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
