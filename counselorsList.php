<?php
session_start();
include 'connect.php'; // Include your database connection file

// Fetch counselors from the database
$sql = "SELECT id, name, department, available_schedule, profile_picture FROM counselorss"; // Exclude gmail
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counselors List</title>
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

        .counselor {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fafafa;
        }

        .counselor img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .info {
            flex: 1;
        }

        .info h2 {
            margin: 0;
            color: #007BFF;
        }

        .info p {
            margin: 5px 0;
            color: #555;
        }

        .schedule {
            margin: 10px 0;
            padding: 0;
            list-style-type: none;
        }

        .schedule li {
            margin: 5px 0;
        }

        .appointment-link {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 12px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .appointment-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Counselors List</h1>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<div class="counselor">';
                echo '<img src="' . htmlspecialchars($row['profile_picture']) . '" alt="Profile Picture">';
                echo '<div class="info">';
                echo '<h2>' . htmlspecialchars($row['name']) . '</h2>';
                echo '<p>Department: ' . htmlspecialchars($row['department']) . '</p>';
                echo '<p>Available Schedule for Counseling:</p>';
                echo '<ul class="schedule">';
                // Split the available schedule into an array and display each item
                $schedules = explode(',', $row['available_schedule']);
                foreach ($schedules as $schedule) {
                    echo '<li>' . htmlspecialchars(trim($schedule)) . '</li>';
                }
                echo '</ul>';
                echo '<a href="UNSA.html" class="appointment-link" onclick="setCounselorsID(' . $row['id'] . ');">Appointment Form</a>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p>No counselors found.</p>';
        }
        ?>
    </div>
</body>
</html>

<?php
$conn->close(); // Close the database connection
?>