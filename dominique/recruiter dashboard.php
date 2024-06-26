<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiter Dashboard</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('123.jpg'); /* Your wallpaper image path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative; /* Required for absolute positioning */
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Adding opacity to make it semi-transparent */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative; /* Required for absolute positioning */
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center; /* Center align the heading */
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a.button {
            display: block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a.button:hover {
            background-color: #0056b3;
        }

        /* Logout button styles */
        .logout-btn {
            padding: 8px 16px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; /* Remove underline */
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .logout-btn:hover {
            background-color: #c82333;
        }

        /* Footer styles */
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            padding: 10px 20px;
            color: #fff;
            text-align: center;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .footer-links a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
    <!-- Recruiter Dashboard Content -->
    <div class="container">
        <h2>Recruiter Dashboard</h2>
        <!-- Add recruiter dashboard content here -->
        <p>Welcome, Recruiter!</p>
        <ul>
            <li><a href="employement.php" class="button">View Applications</a></li>
            <li><a href="scheduling.php" class="button">Schedule Interviews</a></li>
            <li><a href="placement tracking.php" class="button">Track Placements</a></li>
            <li><a href="recruiter profile.php" class="button">Manage Profile</a></li>
        </ul>
        <!-- Logout button -->
        <a href="home.php" class="logout-btn">Logout</a>
    </div>

    <!-- Footer -->
    <footer>
        <p>RN1, HUYE, RWANDA | Phone: +250 798916573 | Email: technologysservices@gmail.com</p>
        <div class="footer-links">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">LinkedIn</a>
            <a href="#">Instagram</a>
        </div>
    </footer>
</body>
</html>
