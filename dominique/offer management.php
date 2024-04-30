<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offer Management</title>
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
        input[type="date"],
        input[type="number"],
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
    <!-- Offer Management Form -->
    <div class="container">
        <h2>Offer Management</h2>
        <form id="offerManagementForm" method="post">
            <label for="jobID">Job ID:</label>
            <input type="number" id="jobID" name="jobID" required>
            
            <label for="candidateID">Candidate ID:</label>
            <input type="number" id="candidateID" name="candidateID" required>

            <label for="salary">Salary:</label>
            <input type="number" id="salary" name="salary" required>

            <label for="benefits">Benefits:</label>
            <textarea id="benefits" name="benefits"></textarea>

            <label for="startDate">Start Date:</label>
            <input type="date" id="startDate" name="startDate" required>

            <label for="endDate">End Date:</label>
            <input type="date" id="endDate" name="endDate">

            <button type="submit">Extend Offer</button>
        </form>
    </div>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
        $stmt = $conn->prepare("INSERT INTO offer (job_id, candidate_id, salary, benefits, start_date, end_date) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("iiisss", $job_id, $candidate_id, $salary, $benefits, $start_date, $end_date);

        // Set parameters
        $job_id = $_POST['jobID'];
        $candidate_id = $_POST['candidateID'];
        $salary = $_POST['salary'];
        $benefits = $_POST['benefits'];
        $start_date = $_POST['startDate'];
        $end_date = $_POST['endDate'];

        // Execute the statement
        if ($stmt->execute()) {
            echo "<p>Offer extended successfully!</p>";
        } else {
            echo "<p>Error: " . $stmt->error . "</p>";
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
