<?php 

include 'connect.php';

if (isset($_POST['signUp'])) {
    $username = $_POST['username']; // Assuming you have a username field
    $password = $_POST['password'];
    $password = md5($password); // Hash the password

    // Check if the username already exists
    $checkUsername = "SELECT * FROM admin_users WHERE username='$username'";
    $result = $conn->query($checkUsername);

    if ($result->num_rows > 0) {
        echo "Username Already Exists!";
    } else {
        // Insert new admin user
        $insertQuery = "INSERT INTO admin_users (username, password) VALUES ('$username', '$password')";
        if ($conn->query($insertQuery) === TRUE) {
            header("Location: admin_index.php"); // Redirect after successful signup
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if (isset($_POST['signIn'])) {
    $username = $_POST['username']; // Assuming you have a username field
    $password = $_POST['password'];
    $password = md5($password); // Hash the password

    // Check in the admin users table
    $sqlAdmin = "SELECT * FROM admin_users WHERE username='$username' AND password='$password'";
    $resultAdmin = $conn->query($sqlAdmin);

    if ($resultAdmin === false) {
        echo "Error in query: " . $conn->error;
    } elseif ($resultAdmin->num_rows > 0) {
        session_start();
        $rowAdmin = $resultAdmin->fetch_assoc();
        $_SESSION['username'] = $rowAdmin['username']; // Store username in session
        header("Location: admin_login.php"); // Redirect to admin dashboard
        exit();
    } else {
        echo "Not Found, Incorrect Username or Password";
    }
}
?>