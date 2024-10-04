<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Profile Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        body {
            background: linear-gradient(135deg, #e3f2fd, #bbdefb); /* Light blue gradient */
            font-family: Arial, sans-serif;
        }

        .card {
            background-color: white;
            border: none;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px); /* Lift effect on hover */
            box-shadow: 0 12px 50px rgba(0, 0, 0, 0.2); /* Enhanced shadow on hover */
        }

        .name {
            color: #f3ce5d; /* Yellow color */
            font-weight: bold;
            font-size: 32px; /* Increased font size */
            margin: 10px 0;
        }

        .name-underline {
            width: 100px;
            border-top: 3px solid #f3ce5d;
            margin: 0 auto 20px;
        }

        .profile-picture {
            position: relative;
            display: inline-block;
            margin-top: 20px;
        }

        .arc {
            position: absolute;
            top: -50px; /* Adjust as necessary */
            left: 50%;
            transform: translateX(-50%);
            width: 220px; /* Adjust as necessary */
            height: 220px; /* Adjust as necessary */
            background-color: transparent;
            border: 6px solid #f3ce5d;
            border-radius: 50%;
            clip-path: ellipse(150% 50% at 50% 0); /* Creates the arc shape */
            z-index: 0;
        }

        .profile-picture img {
            border-radius: 50%;
            width: 160px; /* Adjust as necessary */
            height: 160px; /* Adjust as necessary */
            object-fit: cover;
            position: relative;
            z-index: 1;
            transition: transform 0.3s;
        }

        .profile-picture img:hover {
            transform: scale(1.1); /* Zoom effect on hover */
        }

        .description {
            color: #555; /* Gray color for description */
            font-size: 16px; /* Description font size */
            margin-top: 10px;
        }

        .skills {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .skill {
            background-color: #f3ce5d;
            color: white;
            border-radius: 20px;
            padding: 8px 15px; /* Increased padding */
            margin: 5px;
            font-size: 14px;
            transition: background-color 0.3s; /* Smooth transition for hover */
        }

        .skill:hover {
            background-color: #e1b44c; /* Darker yellow on hover */
        }

        .btn-download {
            background-color: #f3ce5d; /* Yellow background for button */
            color: white; /* White text color */
            margin-top: 20px;
            transition: background-color 0.3s; /* Smooth transition for hover */
        }

        .btn-download:hover {
            background-color: #e1b44c; /* Darker yellow on hover */
        }

        .social-links {
            margin-top: 20px;
        }

        .social-links a {
            color: #f3ce5d;
            margin: 0 10px;
            font-size: 20px;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: #e1b44c; /* Darker yellow on hover */
        }

        .contact-info {
            margin-top: 15px;
            font-size: 14px;
            color: #777; /* Gray color for contact info */
        }

        .projects {
            margin-top: 20px;
            text-align: left;
        }

        .project {
            margin: 10px 0;
        }

        .project a {
            color: #f3ce5d; /* Link color */
            text-decoration: none;
            transition: color 0.3s; /* Smooth transition for hover */
        }

        .project a:hover {
            color: #e1b44c; /* Darker yellow on hover */
        }
    </style>
</head>
<body>
    <!-- Profile Card Section -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div class="card p-4">
                    <header>
                        <h2 class="name">REMUEL FRANCISS</h2>
                        <hr class="name-underline">
                    </header>
                    
                    <!-- Profile Image with Arc -->
                    <div class="profile-picture">
                        <div class="arc"></div>
                        <img src="profile.png" alt="Profile Picture" class="img-fluid">
                    </div>
                    
                    <p class="description">Aspiring Software Developer | Passionate about coding and technology</p>
                    
                    <!-- Download Resume Button -->
                    <a href="resume.pdf" class="btn btn-download" download>Download Resume</a>

                    <!-- Projects Section -->
                    <div class="projects">
                        <h5>Projects</h5>
                        <div class="project"><a href="https://fb.watch/u-_vqinOzH/" target="_blank">Capstone Project: Web-based Varsity Recruitment, Training and Monitoring System</a> - A web-based system that streamlines varsity recruitment, tracks training progress, and monitors athlete performance in real-time.</div>
                        <div class="project"><a href="https://project2link.com" target="_blank">Project 2: Portfolio Site</a> - A personal portfolio site showcasing my work.</div>
                        <div class="project"><a href="https://project3link.com" target="_blank">Project 3: Weather App</a> - A simple app to display weather data using an API.</div>
                    </div>

                    <!-- Social Media Links -->
                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/yourprofile" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://github.com/yourprofile" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://twitter.com/yourprofile" target="_blank"><i class="fab fa-twitter"></i></a>
                    </div>
                    
                    <!-- Contact Information -->
                    <div class="contact-info">
                        <p>Email: remworks@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
