<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('122.jpg'); /* Add your background image path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh; /* Set full viewport height */
            display: flex;
            flex-direction: column; /* Add flex direction column to align items */
            justify-content: center;
            align-items: center;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        .about-section {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .container {
            max-width: 400px;
            padding: 20px;
            background-color:white; /* Adding opacity to make it semi-transparent */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: black;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none; /* Remove underline */
        }

        .button:hover {
            background-color: #0056b3;
        }

        .login-link {
            color: #007bff;
            text-decoration: none;
            margin-top: 20px;
            display: block;
        }

        .login-link:hover {
            text-decoration: underline;
        }

        /* Style for the "About Us" button */
        .about-us-button {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: green;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none; /* Remove underline */
        }

        .about-us-button:hover {
            background-color: #0056b3;
        }

        /* Style for the back button */
        .back-button {
            padding: 10px 20px;
            background-color: yellowgreen;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none; /* Remove underline */
        }

        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Our Website</h1>
    </header>
    <section class="about-section">
        <h2>About Us</h2>
        <p>An online recruitment management system works by centralizing and automating various aspects of the hiring process. Here's a breakdown of how it typically works:

            Job Posting: Recruiters create job postings within the system, including details such as job title, description, requirements, and location. The system may also offer templates or suggestions to streamline this process.
            Candidate Application: Job seekers find and apply for positions through the company's career portal or external job boards where the postings are distributed. They submit their resumes and other required documents online.
            Resume Parsing: Upon receiving applications, the system parses resumes to extract relevant information such as work experience, education, skills, and contact details. This information is then stored in the system's database and used to create candidate profiles.
            Applicant Tracking: The system organizes and tracks all candidate applications in a centralized database. Recruiters can easily search, filter, and review candidate profiles based on specific criteria.
            Candidate Screening: Recruiters can use the system to screen and evaluate candidates based on predefined criteria, such as qualifications, experience, and skills. Some systems may also automate the screening process using AI algorithms.
            Communication and Collaboration: The system facilitates communication between recruiters, hiring managers, and candidates throughout the hiring process. This includes sending automated emails, scheduling interviews, and coordinating feedback and evaluations.
            Interview Scheduling: Recruiters can use the system to schedule interviews with candidates, taking into account the availability of interviewers and candidates. This often involves integrating with calendar systems to avoid scheduling conflicts.
            Assessment and Evaluation: The system may include tools for assessing candidate skills, conducting pre-employment assessments, and tracking feedback from interviewers. This helps recruiters make informed decisions about which candidates to move forward in the hiring process.
            Onboarding: Once a candidate is selected, the system may facilitate the onboarding process by managing paperwork, sending welcome emails, and providing access to training materials or company resources.
            Analytics and Reporting: The system generates reports and analytics on key recruitment metrics, such as time-to-fill, cost-per-hire, and applicant sources. This data helps organizations evaluate the effectiveness of their recruitment strategies and make data-driven decisions..</p>
        <!-- Back button -->
        <a href="home.php" class="back-button" onclick="history.back()">Back</a>
    </section>
   
    <div class="container">
        <!-- Container content -->
    </div>
</body>
</html>
