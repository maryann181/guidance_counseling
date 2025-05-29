<?php
session_start();
include "connect.php"; 

// Fetch unread appointments from the database
$sql = "SELECT * FROM `appointments` WHERE `Status` = 'unread'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unread Appointments</title>
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
        .appointment {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            background-color: #fafafa;
        }
        .appointment h2 {
            margin: 0;
            color: #007BFF;
        }
        .appointment p {
            margin: 5px 0;
            color: #555;
        }
        .mark-read {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Unread Appointments</h1>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="appointment">';
                echo '<h2>Client ID: ' . htmlspecialchars($row['ClientID']) . '</h2>'; // Display Client ID
                echo '<p>Appointment Date: ' . htmlspecialchars($row['AppointmentDate']) . '</p>';
                echo '<p>Time Slot: ' . htmlspecialchars($row['TimeSlot']) . '</p>';
                echo '<p>Status: ' . htmlspecialchars($row['Status']) . '</p>';
                echo '<form action="markAsRead.php" method="post">';
                echo '<input type="hidden" name="appointment_id" value="' . $row['AppointmentID'] . '">';
                echo '<button type="submit" class="mark-read">Mark as Read</button>';
                echo '</form>';
                echo '</div>';
            }
        } else {
            echo '<p>No unread appointments found.</p>';
        }
        ?>
    </div>
</body>
</html>

<?php
// Close the connection
$conn->close();
?>