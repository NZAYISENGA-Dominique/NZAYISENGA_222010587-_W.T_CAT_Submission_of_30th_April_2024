<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('124.jpg'); /* Add wallpaper image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh; /* Set minimum height to 100% of viewport height */
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: right;
        }

        .container {
            flex: 1; /* Allow container to grow to fill remaining space */
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color:none; /* Light background */
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Increase shadow */
            overflow: hidden; /* Ensure the container wraps its content */
            position: relative; /* For absolute positioning of buttons */
        }

        .search-bar {
            width: 100%;
            padding: 10px 20px;
            box-sizing: border-box;
            margin-bottom: 20px;
            border-radius: 25px;
            border: 1px solid #ccc;
            background-color: #fff; /* White background */
            outline: none;
            transition: border-color 0.3s ease;
            max-width: 400px; /* Adjusted max-width */
        }

        .buttons-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .button {
            padding: 12px 24px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin: 5px; /* Add space between buttons */
        }

        .button:hover {
            background-color: #0056b3;
        }

        .settings-list {
            position: absolute;
            top: 40px;
            right: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        .logout-button {
            background-color: #dc3545;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-left: 10px;
            cursor: pointer;
        }

        .logout-button:hover {
            background-color: #c82333;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 0 0 10px 10px;
        }

        footer a {
            color: #35d6ef;
            text-decoration: none;
            margin: 0 10px;
        }

        footer a:hover {
            text-decoration:underline;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <!-- Settings button -->
       
        <!-- Settings list -->
        
        <!-- Logout button -->
        <button class="logout-button" onclick="logout()">Logout</button>
    </header>

    <!-- Admin Dashboard Content -->
    <div class="container">
        <!-- Search bar -->
        <input type="text" class="search-bar" placeholder="Search...">

        <!-- Buttons container -->
        <div class="buttons-container">
            <!-- Add admin dashboard buttons here -->
            <a href="update.php" class="button">Manage Users</a>
            <a href="manage jobs.php" class="button">Manage Jobs</a>
            <a href="employement admin.php" class="button">Manage Applications</a>
            <a href="interviews.php" class="button">Manage Interviews</a>
            <a href="offer management.php" class="button">Manage Offers</a>
            <a href="placement tracking.php" class="button">Manage Placements</a>
            <a href="offer management.php" class="button">Manage Profiles</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>RN1, HUYE, RWANDA</p>
        <div>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
            <a href="#">LinkedIn</a>
        </div>
    </footer>

    <!-- JavaScript code for admin dashboard functionality -->
    <script>
        // Toggle visibility of the settings list
        function toggleSettings() {
            var settingsList = document.getElementById("settingsList");
            if (settingsList.style.display === "none" || settingsList.style.display === "") {
                settingsList.style.display = "block";
            } else {
                settingsList.style.display = "none";
            }
        }

        // Logout function
        function logout() {
            // Perform logout operation here
            alert("Logout successful!");
        }
    </script>
</body>
</html>
