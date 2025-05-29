<?php
session_start();
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            width: 100%;
            height: 100vh;
            background-image:url("logonapod.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .parent {
            width: 90%;
            max-width: 1200px;  
            height: 90%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 5px 5px 20px black;
            color: rgb(26, 14, 14);
            overflow: hidden;
            background: linear-gradient(90deg, rgb(245, 245, 242) 0%, rgb(69, 69, 238) 100%);
        }

        header {
            background-color: rgb(67, 147, 227);
            padding: 10px 20px;
            display: flex;
            align-items: center;
            box-sizing: border-box;
            justify-content: space-between; 
        }
        h1 {
            diplay: flex;
            margin: 0;
            margin-left: 10px;        
            font-size: 1.2em;          
            font-weight: bold; 
        }
        footer {
            background-color: rgb(67, 147, 227);
            padding: 20px 30px;
            display: flex;
            color: white;
        }
        /*section {
            height: 100vh; 
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-image: url("logonapod.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        #section1 { 
            background-color:linear-gradient(( #f4f4f4),rgb(33, 76, 133));
        }*/

        .logo {
            margin-right: 15px;
            max-width: 150px;
            height: auto;
        }
        .logo-container {
            display: flex;
            align-items: center;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h1 {
            font-size: 2rem; 
            font-weight: 600;
            color: #014728;
        }

        nav ul {
            display: flex;
            margin-left: 20px; 
            flex-wrap: wrap; 
        }

        nav ul li {
            list-style-type: none;
            position: relative;
        }

        ul li a {
            text-decoration: none;
            padding: 10px 15px; /* Adjusted padding for better touch targets */
            text-transform: uppercase;
            font-weight: 500;
            font-size: 0.9rem; /* Responsive font size */
            color: white;
            transition: 0.5s ease;
        }

        ul li a:hover {
            text-decoration: underline;
            color: blue;
        }
        
        .dropdown {
            display: none;
            position: absolute;
            top: 25px; /* Position below the parent */
            left: 0;
            width: 150px;
            background-color: rgb(18, 3, 18);
            z-index: 1000;
            border-radius: 5px;
        }

        nav ul li:hover .dropdown {
            display: block;
        }

        .dropdown li a {
            padding: 10px 20px;
            display: block;
            color: white;
            text-decoration: none;
        }

        .main_content {
            display: flex;
            flex-direction: column; /* Stack items on smaller screens */
            height: 85%;
        }

        .left {
            flex: 1; /* Allow left section to grow */
            padding: 20px; /* Adjusted padding for better responsiveness */
        }

        .left h1 {
            font-size: 2.5rem; /* Responsive font size */
            font-weight: 600;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .left p {
            font-size: 0.9rem; /* Responsive font size */
        }

        .left button {
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 0.9rem; /* Responsive font size */
            border: none;
            outline: none;
            margin-top: 20px;
            background-color: #033677;
            color: white;
            cursor: pointer;
            transition: 0.5s ease;
        }

        .right {
            flex: 1; /* Allow right section to grow */
            display: flex;
            justify-content: center; /* Center the image */
            align-items: center; /* Center the image */
            padding: 20px; /* Adjusted padding for better responsiveness */
        }

        .right img {
            max-width: 100%; /* Make image responsive */
            height: auto; /* Maintain aspect ratio */
        }
        
        img {
            display: flex;  
            max-width: 100%; 
            height: 15%;
        }

        @media (min-width: 768px) {
            .main_content {
                flex-direction: row;
            }
            .left {
                padding: 40px; 
            }
            .right {
                padding: 40px;
            }
            .left h1 {
                font-size: 3rem; 
            }
            .left p {
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            nav h1 {
                flex-direction: column;
            }

            ul li a {
                font-size: 0.8rem; /* Smaller font size for mobile */
            }

            .left h1 {
                font-size: 2rem; /* Smaller font size for mobile */
            }

            .left p {
                font-size: 0.8rem; /* Smaller font size for mobile */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo-containeer">
            <img src="logoghapon.png" class="logo">
            <div class="h1">
            University of Bohol<br>
            Guidance Center
            </div>
            </div>
            <nav>
                <ul>
                    <li><a href="">home</a></li>
                    <li>
                        <a href="wara.html" id="aboutUs">about us</a>
                    </li>
                    <li>
                        <a href="counselorsList.php" id="guidanceCounselor">Guidance Counselor</a>
                    </li>
                    <li>
                        <a href="#">services</a>
                        <ul class="dropdown">
                            <li><a href="UNSA.html">Guidance Form</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="logout.php" id="logOut">log out</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="main_content">
        <div class="left">
                <h3>Welcome</h3>    
                <h2>UBians!</h2>
                <p>University of Bohol a premier university transforming lives for a great future.
                   Anchored on: SCHOLARSHIP, CHARACTER, SERVICE.</p><br><br>
                <p>The University seal bears the symbol of the fervency of the<br>University of Bohol to be faithful to her mission of<br>providing holistic education to the students.<br><br>
                     At the center is the burning flame of knowledge anchored on<br>three stripes of red, blue and yellow, the trinity of<br>virtues, for which the University of Bohol<br>stands for: Scholarship, Character and Service.</p>
            </div>
        </div>
        <footer>
            <p> 2024 Student Personnel Services. All rights reserved.</p>
        </footer>

</body>
</html>