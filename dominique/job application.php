<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application</title>
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
        input[type="email"],
        input[type="file"] {
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
    <!-- Job Application Form -->
    <div class="container">
        <h2>Job Application</h2>
        <form id="jobApplicationForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="resume">Resume:</label>
            <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>

            <label for="coverLetter">Cover Letter:</label>
            <textarea id="coverLetter" name="coverLetter"></textarea>

            <button type="submit" name="submit">Submit Application</button>
        </form>
    </div>

    <!-- JavaScript code for form submission and validation -->
    <script>
        document.getElementById("jobApplicationForm").addEventListener("submit", function(event) {
            event.preventDefault();
            // Perform form validation if needed
            // Send job application data to server using AJAX or fetch API
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
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $resume = $_FILES['resume']['name'];
    $resume_tmp = $_FILES['resume']['tmp_name'];
    $coverLetter = $_POST['coverLetter'];

    // Move uploaded resume file to desired location
    $resume_path = "resumes/" . $resume;
    move_uploaded_file($resume_tmp, $resume_path);

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO job_applications (fullName, email, resume, coverLetter) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fullName, $email, $resume_path, $coverLetter);

    // Execute SQL statement
    if ($stmt->execute()) {
        echo "<script>alert('Application submitted successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
