<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Seeker Profile Management</title>
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
        input[type="file"],
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
    <!-- Job Seeker Profile Management Form -->
    <div class="container">
        <h2>Job Seeker Profile Management</h2>
        <form id="jobSeekerProfileForm">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone">

            <label for="address">Address:</label>
            <textarea id="address" name="address"></textarea>

            <label for="resume">Resume:</label>
            <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx">

            <label for="disability">Disability:</label>
            <input type="text" id="disability" name="disability">

            <label for="references">References:</label>
            <textarea id="references" name="references"></textarea>

            <button type="submit">Update Profile</button>
        </form>
    </div>

    <!-- JavaScript code for form submission and validation -->
    <script>
        document.getElementById("jobSeekerProfileForm").addEventListener("submit", function(event) {
            event.preventDefault();
            // Perform form validation
            // Send profile data to server using AJAX or fetch API
        });
    </script>
</body>
</html>
