<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counselors' Webpage</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            display: flex;
            background-color: #f0f2f5;
            min-height: 100vh;
        }

        /* Navigation Styles */
        nav {
            width: 280px;
            background-color: white;
            height: 100vh;
            position: fixed;
            overflow-y: auto;
            padding: 12px;
            box-shadow: 1px 0 3px rgba(0,0,0,0.1);
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 8px;
            margin-bottom: 10px;
        }

        .logo img {
            width: 100%; /* Adjust as needed */
            height: auto; /* Maintain aspect ratio */
            border-radius: 8px; /* Optional: add border radius */
        }

        .profile-section {
            display: flex;
            align-items: center;
            padding: 8px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .profile-section:hover {
            background-color: #f0f2f5;
            cursor: pointer;
        }

        .nav-section {
            margin: 16px 0;
        }

        .nav-item {
            display: flex;
            align-items: center;
            padding: 8px;
            border-radius: 8px;
            margin-bottom: 4px;
            text-decoration: none; /* Ensure no underline */
            color: #050505; /* Default text color */
        }

        .nav-item:hover {
            background-color: #f0f2f5;
            cursor: pointer;
        }

        .nav-icon {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            color: #050505;
            font-size: 20px;
        }

        .divider {
            height: 1px;
            background-color: #ced0d4;
            margin: 16px 0;
        }

        .footer-links {
            padding: 12px 8px;
            font-size: 11px;
            color: #65676b;
            line-height: 1.5;
        }

        .footer-links a {
            color: #65676b;
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        /* Main Content Styles */
        main {
            flex: 1;
            margin-left: 280px;
            padding: 20px;
        }

        /* Responsive Styles */
        @media (max-width: 1200px) {
            nav {
                width: 80px;
                padding: 12px 4px;
            }
            
            main {
                margin-left: 80px;
            }
        }

        @media (max-width: 768px) {
            nav {
                width: 100%;
                height: auto;
                position: fixed;
                bottom: 0;
                top: auto;
                display: flex;
                justify-content: space-around;
                padding: 8px 0;
                z-index: 100;
            }
            
            main {
                margin-left: 0;
                margin-bottom: 60px;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <img src ="logo.png" alt="Logo">
        </div>

        <div class="nav-section">
            <ul class="nav-menu">
                <li class="nav-item active">
                    <div class="nav-icon">👥</div>
                    <div class="nav-text">Clients</div>
                </li>
                <li class="nav-item">
                    <div class="nav-icon">🕒</div>
                    <div class="nav-text">History</div>
                </li>
                <li class="nav-item">
                    <div class="nav-icon">💾</div>
                    <div class="nav-text">Saved</div>
                </li>
                <li class="nav-item">
                    <div class="nav-icon">🚪</div>
                    <a href="logout3.php" id="logOut" class="nav-text">Log Out</a>
                </li>
                <li class="nav-item">
                    <div class="nav-icon">🎥</div>
                    <div class="nav-text">Video</div>
                </li>
                <li class="nav-item">
                    <div class="nav-icon">🏪</div>
                    <div class="nav-text">Marketplace</div>
                </li>
                <li class="nav-item">
                    <div class="nav-icon">📰</div>
                    <div class="nav-text">Feeds</div>
                </li>
                <li class="nav-item">
                    <div class="nav-icon">⋮</div>
                    <div class="nav-text">See more</div>
                </li>
            </ul>
        </div>

        <div class="divider"></div>

        <div class="footer-links"> 
            <br>More · © 2023
        </div>
    </nav>

    <main>
        <!-- Your main content would go here -->
        <h1>Welcome to your feed</h1>
        <p>This is where your main content would appear.</p>
    </main>
</body>
</html>