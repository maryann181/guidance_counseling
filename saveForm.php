<?php
session_start();
include "connect.php"; 

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $name = $conn->real_escape_string($_POST['name']);
    $age = $conn->real_escape_string($_POST['age']);
    $department = $conn->real_escape_string($_POST['department']);
    $email = $conn->real_escape_string($_POST['email']);
    $issue = $conn->real_escape_string($_POST['issue']);
    $needs = $conn->real_escape_string($_POST['needs']);
    $additional = $conn->real_escape_string($_POST['additional']);
    $preferredContact = isset($_POST['preferred_contact']) ? $conn->real_escape_string(trim($_POST['preferred_contact'])) : ''; 
    $counselorID = $conn->real_escape_string($_POST['CounselorID']); 

    // Insert the client information into the Clients table
    $clientSql = "INSERT INTO guidance_counseling (name, age, department, email, needs, additional, preferred_contact, CounselorID) 
                   VALUES ('$name', '$age', '$department', '$email', '$needs', '$additional', '$preferredContact', '$counselorID')";
    
    if ($conn->query($clientSql) === TRUE) {
        // Get the last inserted ClientID
        $clientID = $conn->insert_id;

        // Prepare the SQL statement for the Appointments table
        $appointmentSql = "INSERT INTO appointments (ClientID, CounselorID, AppointmentDate, Status, Notes) 
                           VALUES ('$clientID', '$counselorID', NOW(), 'unread', '$issue')";

        // Execute the query for appointments
        if ($conn->query($appointmentSql) === TRUE) {
            // Display a success message without showing submitted data
            echo "Form submitted successfully! Your appointment has been scheduled.";

            // Fetch the counselor's email address
            $counselorEmailSql = "SELECT gmail FROM counselorss WHERE id = '$counselorID'";
            $result = $conn->query($counselorEmailSql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $counselorEmail = $row['gmail']; // Get the counselor's email

                // Prepare and send the notification email
                $subject = "New Appointment Scheduled";
                $message = "You have a new appointment scheduled with the following details:\n\n" .
                           "Client Name: $name\n" .
                           "Age: $age\n" .
                           "Department: $department\n" .
                           "Email: $email\n" .
                           "Issue: $issue\n" .
                           "Preferred Contact: $preferredContact\n" .
                           "Appointment Date: " . date('Y-m-d H:i:s') . "\n\n" .
                           "Please check your schedule.";

                $headers = "From: no-reply@example.com"; // Replace with your sender email

                if (mail($counselorEmail, $subject, $message, $headers)) {
                    echo "Notification sent to the counselor.";
                } else {
                    echo "Failed to send notification to the counselor.";
                }
            } else {
                echo "Error: Counselor not found.";
            }
        } else {
            // Display an error message if the query fails
            echo "Error: " . $conn->error;
        }
    } else {
        // Display an error message if the client insertion fails
        echo "Error: " . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>