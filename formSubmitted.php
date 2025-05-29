<?php
// Include the database connection file
include 'connect.php';

// Query to fetch data
$sql = "SELECT id, name, age, department, email, issue, needs, additional, preferred_contact FROM guidance_counseling"; // Replace 'users' with your table name
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Form</title>
    <style>
        body {
            background: linear-gradient(90deg, rgb(245, 245, 242) 0%, rgb(69, 69, 238) 100%);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Submitted Form</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Department</th>
                <th>Email</th>
                <th>Issue</th>
                <th>Needs</th>
                <th>Additional</th>
                <th>Preferred Contact</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['age']}</td>
                            <td>{$row['department']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['issue']}</td>
                            <td>{$row['needs']}</td>
                            <td>{$row['additional']}</td>
                            <td>{$row['preferred_contact']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='9'>No data found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>