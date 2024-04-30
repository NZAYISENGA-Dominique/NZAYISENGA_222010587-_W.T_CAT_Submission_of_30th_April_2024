<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interview Scheduling</title>
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

    input[type="date"],
    input[type="text"],
    select {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
    }

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
  <div class="container">
    <h2>Interview Scheduling</h2>
    <form id="interviewSchedulingForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <label for="interviewDate">Interview Date:</label>
      <input type="date" id="interviewDate" name="interviewDate" required>
  
      <label for="location">Location:</label>
      <input type="text" id="location" name="location" required>
  
      <label for="interviewType">Interview Type:</label>
      <select id="interviewType" name="interviewType" required>
        <option value="phone">Phone</option>
        <option value="video">Video</option>
        <option value="in_person">In Person</option>
      </select>
  
      <label for="interviewerName">Interviewer Name:</label>
      <input type="text" id="interviewerName" name="interviewerName" required>

      <label for="interviewFeedback">Interview Feedback:</label>
      <textarea id="interviewFeedback" name="interviewFeedback"></textarea>

      <button type="submit">Schedule Interview</button>
    </form>
  </div>

  <?php
  // Include database connection details (replace with your actual credentials)
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

  // Process form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $interviewDate = $_POST["interviewDate"];
    $location = $_POST["location"];
    $interviewType = $_POST["interviewType"];
    $interviewerName = $_POST["interviewerName"];
    $interviewFeedback = $_POST["interviewFeedback"];

    // Create SQL insert statement
    $sql = "INSERT INTO interviews (interviewDate, location, interviewType, interviewerName, interviewFeedback)
            VALUES ('$interviewDate', '$location', '$interviewType', '$interviewerName', '$interviewFeedback')";

    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Interview scheduled successfully!');</script>";
    } else {
      echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
  }

  // Close database connection
  $conn->close();
  ?>

  <script>
    document.getElementById("interviewSchedulingForm").addEventListener("submit", function(event) {
      // Perform form validation (add validation logic here)
    });
  </script>
</body>
</html>
