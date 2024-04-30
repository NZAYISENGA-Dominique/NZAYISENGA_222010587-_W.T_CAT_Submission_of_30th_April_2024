<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Management</title>
    <style>
        /* CSS styles */
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Job Management Form -->
    <div class="container">
        <h2>Job Management</h2>
        <form id="jobManagementForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="jobTitle">Job Title:</label>
            <input type="text" id="jobTitle" name="jobTitle" required>

            <label for="department">Department:</label>
            <input type="text" id="department" name="department" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <button type="submit" name="submit">Create Job</button>
        </form>
    </div>

    <!-- JavaScript code for form submission and validation -->
    <script>
        document.getElementById("jobManagementForm").addEventListener("submit", function(event) {
            event.preventDefault();
            // Perform form validation
            // Send job management data to server using AJAX or fetch API
        });
    </script>
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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Retrieve form data
    $jobTitle = $_POST['jobTitle'];
    $department = $_POST['department'];
    $description = $_POST['description'];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO jobs (jobTitle, department, description) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $jobTitle, $department, $description);

    // Execute SQL statement
    if ($stmt->execute()) {
        echo "<script>alert('Job created successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
