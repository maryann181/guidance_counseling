<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* styles/style.css */

body {
    background-color: #007BFF; /* Blue background */
    color: white; /* White text color */
    font-family: Arial, sans-serif; /* Font style */
    margin: 0;
    padding: 0;
}

header {
    background-color: #0056b3; /* Darker blue for header */
    padding: 20px;
    text-align: center;
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
    padding: 5px 10px; /* Padding around links */
    border-radius: 5px; /* Rounded corners */
    padding-color:rgb(92, 144, 201); /* Blue background on hover */
    transition: background-color 0.3s; /* Smooth transition for hover effect */
}

nav ul li a:hover {
    text-decoration: underline; /* Underline on hover */
}

main {
    padding: 20px;
    text-align: center; /* Center align text */
}

footer {
    background-color: #0056b3; /* Darker blue for footer */
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
                <li><a href="listData.php">Data</a></li>
                <li><a href="logout2.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Welcome to the Admin Panel</h2>
        <p>Select an option from the menu to get started.</p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Admin Website</p>
    </footer>
</body>
</html>