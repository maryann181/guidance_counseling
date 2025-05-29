<?php
session_start();
include "connect.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the appointment ID from the form
    $appointment_id = $conn->real_escape_string($_POST['appointment_id']);

    // Update the status to 'read but not scheduled'
    $sql = "UPDATE `appointments` SET `Status` = 'read but not scheduled' WHERE `appointmentID` = '$appointment_id'";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the unread appointments page
        header("Location: unreadAppointments.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>