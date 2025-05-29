<?php
session_start();
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counselors List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .counselor {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fafafa;
        }

        .counselor img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .info {
            flex: 1;
        }

        .info h2 {
            margin: 0;
            color: #007BFF;
        }

        .info p {
            margin: 5px 0;
            color: #555;
        }

        .schedule {
            margin: 10px 0;
            padding: 0;
            list-style-type: none;
        }

        .schedule li {
            margin: 5px 0;
        }

        .appointment-link {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 12px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .appointment-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Counselors List</h1>
        <div class="counselor">
            <img src="counselor1.jpg" alt="Counselor 1">
            <div class="info">
                <h2>counselor one</h2>
                <p>Guidance Counselor specializing in mental health and wellness.</p>
                <p>Email: counselorone@gmail.com</p>
                <p>Phone: (123) 456-7890</p>
                <p>Available Schedule for Counseling:</p>
                <ul class="schedule">
                    <li>Monday: 10 AM - 2 PM</li>
                    <li>Wednesday: 1 PM - 5 PM</li>
                    <li>Friday: 9 AM - 12 PM</li>
                </ul>
                <a href="UNSA.html" class="appointment-link" onclick="setCounselorsID(CounselorsID);">Appointment Form</a>
            </div>
        </div>
        <div class="counselor">
            <img src="counselor2.jpg" alt="Counselor 2">
            <div class="info">
                <h2>Jane Smith</h2>
                <p>Expert in family therapy and counseling.</p>
                <p>Email: jane.smith@example.com</p>
                <p>Phone: (098) 765-4321</p>
                <p>Available Schedule for Counseling:</p>
                <ul class="schedule">
                    <li>Tuesday: 11 AM - 3 PM</li>
                    <li>Thursday: 2 PM - 6 PM</li>
                    <li>Saturday: 10 AM - 1 PM</li>
                </ul>
                <a href="UNSA.html" class="appointment-link" onclick="setCounselorsID(CounselorsID);">Appointment Form</a>
            </div>
        </div>
        <div class="counselor">
            <img src="counselor3.jpg" alt="Counselor 3">
            <div class="info">
                <h2>John Sugar</h2>
                <p>Guidance Counselor specializing in mental health and wellness.</p>
                <p>Email: john.doe@example.com</p>
                <p>Phone: (123) 456-7890</p>
                <p>Available Schedule for Counseling:</p>
                <ul class="schedule">
                    <li>Monday: 10 AM - 2 PM</li>
                    <li>Wednesday: 1 PM - 5 PM</li>
                    <li>Friday: 9 AM - 12 PM</li>
                </ul>
                <a href="UNSA.html" class="appointment-link" onclick="setCounselorsID(CounselorsID);">Appointment Form</a>
            </div>
        </div>
        <div class="counselor">
            <img src="counselor4.jpg" alt="Counselor 4">
            <div class="info">
                <h2>Hannah Lomod</h2>
                <p>Guidance Counselor specializing in mental health and wellness.</p>
                <p>Email: john.doe@example.com</p>
                <p>Phone: (123) 456-7890</p>
                <p>Available Schedule for Counseling:</p>
                <ul class="schedule">
                    <li>Monday: 10 AM - 2 PM</li>
                    <li>Wednesday: 1 PM - 5 PM</li>
                    <li>Friday: 9 AM - 12 PM</li>
                </ul>
                <a href="UNSA.html" class="appointment-link" onclick="setCounselorsID(CounselorsID);">Appointment Form</a>
            </div>
        </div>
        <div class="counselor">
            <img src="counselor5.jpg" alt="Counselor 5">
            <div class="info">
                <h2>Mary Galagar</h2>
                <p>Guidance Counselor specializing in mental health and wellness.</p>
                <p>Email: john.doe@example.com</p>
                <p>Phone: (123) 456-7890</p>
                <p>Available Schedule for Counseling:</p>
                <ul class="schedule">
                    <li>Monday: 10 AM - 2 PM</li>
                    <li>Wednesday: 1 PM - 5 PM</li>
                    <li>Friday: 9 AM - 12 PM</li>
                </ul>
                <a href="UNSA.html" class="appointment-link" onclick="setCounselorsID(CounselorsID);">Appointment Form</a>
            </div>
        </div>
        <div class="counselor">
            <img src="counselor6.jpg" alt="Counselor 6">
            <div class="info">
                <h2>Sophia Barong</h2>
                <p>Guidance Counselor specializing in mental health and wellness.</p>
                <p>Email: john.doe@example.com</p>
                <p>Phone: (123) 456-7890</p>
                <p>Available Schedule for Counseling:</p>
                <ul class="schedule">
                    <li>Monday: 10 AM - 2 PM</li>
                    <li>Wednesday: 1 PM - 5 PM</li>
                    <li>Friday: 9 AM - 12 PM</li>
                </ul>
                <a href="UNSA.html" class="appointment-link" onclick="setCounselorsID(CounselorsID);">Appointment Form</a>
            </div>
        </div>
        <div class="counselor">
            <img src="counselor7.jpg" alt="Counselor 7">
            <div class="info">
                <h2>Rhea Rulona</h2>
                <p>Guidance Counselor specializing in mental health and wellness.</p>
                <p>Email: john.doe@example.com</p>
                <p>Phone: (123) 456-7890</p>
                <p>Available Schedule for Counseling:</p>
                <ul class="schedule">
                    <li>Monday: 10 AM - 2 PM</li>
                    <li>Wednesday: 1 PM - 5 PM</li>
                    <li>Friday: 9 AM - 12 PM</li>
                </ul>
                <a href="UNSA.html" class="appointment-link" onclick="setCounselorsID(CounselorsID);">Appointment Form</a>
            </div>
        </div>
        <div class="counselor">
            <img src="counselor8.jpg" alt="Counselor 8">
            <div class="info">
                <h2>John Cruz</h2>
                <p>Guidance Counselor specializing in mental health and wellness.</p>
                <p>Email: john.doe@example.com</p>
                <p>Phone: (123) 456-7890</p>
                <p>Available Schedule for Counseling:</p>
                <ul class="schedule">
                    <li>Monday: 10 AM - 2 PM</li>
                    <li>Wednesday: 1 PM - 5 PM</li>
                    <li>Friday: 9 AM - 12 PM</li>
                </ul>
                <a href="UNSA.html" class="appointment-link" onclick="setCounselorsID(CounselorsID);">Appointment Form</a>
            </div>
        </div>
        <div class="counselor">
            <img src="counselor9.jpg" alt="Counselor 9">
            <div class="info">
                <h2>Sam Muhlach</h2>
                <p>Guidance Counselor specializing in mental health and wellness.</p>
                <p>Email: john.doe@example.com</p>
                <p>Phone: (123) 456-7890</p>
                <p>Available Schedule for Counseling:</p>
                <ul class="schedule">
                    <li>Monday: 10 AM - 2 PM</li>
                    <li>Wednesday: 1 PM - 5 PM</li>
                    <li>Friday: 9 AM - 12 PM</li>
                </ul>
                <a href="UNSA.html" class="appointment-link" onclick="setCounselorsID(CounselorsID);">Appointment Form</a>
            </div>
        </div>
        <div class="counselor">
            <img src="counselor10.jpg" alt="Counselor 10">
            <div class="info">
                <h2>April Doe</h2>
                <p>Guidance Counselor specializing in mental health and wellness.</p>
                <p>Email: john.doe@example.com</p>
                <p>Phone: (123) 456-7890</p>
                <p>Available Schedule for Counseling:</p>
                <ul class="schedule">
                    <li>Monday: 10 AM - 2 PM</li>
                    <li>Wednesday: 1 PM - 5 PM</li>
                    <li>Friday: 9 AM - 12 PM</li>
                </ul>
                <a href="UNSA.html" class="appointment-link" onclick="setCounselorsID(CounselorsID);">Appointment Form</a>
            </div>
        </div>
        <div class="counselor">
            <img src="counselor11.jpg" alt="Counselor 11">
            <div class="info">
                <h2>Warren Ford</h2>
                <p>Guidance Counselor specializing in mental health and wellness.</p>
                <p>Email: john.doe@example.com</p>
                <p>Phone: (123) 456-7890</p>
                <p>Available Schedule for Counseling:</p>
                <ul class="schedule">
                    <li>Monday: 10 AM - 2 PM</li>
                    <li>Wednesday: 1 PM - 5 PM</li>
                    <li>Friday: 9 AM - 12 PM</li>
                </ul>
                <a href="UNSA.html" class="appointment-link" onclick="setCounselorsID(CounselorsID);">Appointment Form</a>
            </div>
        </div>
        <!-- Add more counselors as needed -->
    </div>
</body>
</html>