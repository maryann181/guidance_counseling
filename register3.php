<?php 

include 'connect.php';
session_start(); // Start the session at the beginning

if (isset($_POST['signUp'])) {
    $firstName = htmlspecialchars($_POST['fName']);
    $lastName = htmlspecialchars($_POST['lName']);
    $email = htmlspecialchars($_POST['email']);
    $password = isset($_POST['password']) ? $_POST['password'] : ''; // Check if password is set
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Use password_hash for better security

    // Check if the email already exists using prepared statements
    $stmt = $conn->prepare("SELECT * FROM counselor_users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check for query error
    if ($result === false) {
        echo "Error in query: " . $conn->error;
    } elseif ($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        // Insert new user using prepared statements
        $insertStmt = $conn->prepare("INSERT INTO counselor_users (firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
        $insertStmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);
        
        if ($insertStmt->execute()) {
            header("Location: counselor_homepage.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if (isset($_POST['signIn'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = isset($_POST['password']) ? $_POST['password'] : ''; // Check if password is set

    // Check in the regular users table using prepared statements
    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check for query error
    if ($result === false) {
        echo "Error in query: " . $conn->error;
    } elseif ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify the password
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $row['email'];
            header("Location: homepage.php"); // Redirect to user homepage
            exit();
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "Invalid email or password.";
    }
}
?>