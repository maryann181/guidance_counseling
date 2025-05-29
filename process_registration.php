<?php
include "connect.php"; // Include your database connection file

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set
    if (isset($_POST['name'], $_POST['department'], $_POST['available_schedule'], $_POST['gmail'], $_POST['password'])) {
        $name = $conn->real_escape_string(trim($_POST['name']));
        $department = $conn->real_escape_string(trim($_POST['department']));
        $available_schedule = $conn->real_escape_string(trim($_POST['available_schedule']));
        $gmail = $conn->real_escape_string(trim($_POST['gmail'])); // Get Gmail
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

        // Handle profile picture upload
        $profile_picture = null;
        if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == UPLOAD_ERR_OK) {
            $target_dir = "uploads/"; // Directory to save uploaded files
            $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);
            if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
                $profile_picture = $conn->real_escape_string($target_file); // Save the file path
            } else {
                echo "Error uploading file.";
            }
        }

        // Insert counselor into the database
        $sql = "INSERT INTO counselorss (name, department, available_schedule, profile_picture, gmail, password) 
                VALUES ('$name', '$department', '$available_schedule', '$profile_picture', '$gmail', '$password')";
        
        if ($conn->query($sql) === TRUE) {
            // Redirect to homepage after successful registration
            header("Location: counselor_homepage.php");
            exit(); // Stop further execution
            // 
         } else {
            echo "Error: " . $conn->error; // Display the error message
        }
    } else {
        echo "Please fill in all required fields.";
    }
}
?>