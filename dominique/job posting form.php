<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Posting</title>
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
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: green;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: green;
        }
    </style>
</head>
<body>
    <!-- Job Posting Form -->
    <div class="container">
        <h2>Job Posting</h2>
        <form id="jobPostingForm">
            <label for="jobName">Job Name:</label>
            <input type="text" id="jobName" name="jobName" required>
            
            <label for="jobDescription">Job Description:</label>
            <textarea id="jobDescription" name="jobDescription" required></textarea>
            
            <label for="jobLocation">Job Location:</label>
            <input type="text" id="jobLocation" name="jobLocation" required>
            
            <label for="jobSalary">Job Salary:</label>
            <input type="text" id="jobSalary" name="jobSalary">
            
            <label for="applicationDeadline">Application Deadline:</label>
            <input type="date" id="applicationDeadline" name="applicationDeadline" required>

            <button type="submit">Post Job</button>
        </form>
    </div>

    <!-- JavaScript code for form submission and validation -->
    <script>
        document.getElementById("jobPostingForm").addEventListener("submit", function(event) {
            event.preventDefault();
            // Perform form validation
            // Send job posting data to server using AJAX or fetch API
        });
    </script>
</body>
</html>
