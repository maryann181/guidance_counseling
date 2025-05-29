<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* styles/style.css */

body {
    background-color: #f0f0f0; /* Light gray background for contrast */
    color: #333; /* Dark text color for readability */
    font-family: Arial, sans-serif; /* Font style */
    margin: 0;
    padding: 0;
}

header {
    background-color:rgb(13, 95, 183); /* Blue background for header */
    padding: 20px;
    text-align: center;
    color: white; /* White text color */
}
p {
    color: #f0f0f0;
}

nav ul {
    list-style-type: none; /* Remove bullet points */
    padding: 0;
}

nav ul li {
    display: inline; /* Display list items in a row */
    margin: 0 15px; /* Space between items */
}

nav ul li a {
    color: white; /* White text for links */
    text-decoration: none; /* Remove underline from links */
    font-weight: bold; /* Bold text */
}

nav ul li a:hover {
    text-decoration: underline; /* Underline on hover */
}

main {
    padding: 20px;
    text-align: center; /* Center align text */
    background: linear-gradient(90deg, rgb(238, 238, 236) 0%, rgb(60, 52, 150) 0%, rgb(4, 5, 62) 100%); /* Yellow background for main content */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow */
}

h2 {
    color:rgb(246, 239, 236); /* Red color for headings */
}

footer {
    background-color:rgb(13, 95, 183); /* Blue background for footer */
    text-align: center; /* Center align text */
    padding: 10px;
    position: bottom;
    bottom: 0;
    width: 100%;
}
    </style>
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
        <nav>
            <ul>
                <li><a href="users.php">Users</a></li>
                <li><a href="formSubmitted.php">Submitted Form</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Welcome to the Admin Dashboard</h2>
        <p>Select an option from the menu to get started.</p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Admin Website</p>
    </footer>
</body>
</html>