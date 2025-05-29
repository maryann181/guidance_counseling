<?php
// Include the database connection file
include 'connect.php';

// Query to fetch data
$sql = "SELECT id, firstname, lastname, email FROM users"; // Replace 'users' with your table name
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERS</title>
    <style>
        body {
            background: linear-gradient(90deg, rgb(245, 245, 242) 0%, rgb(223, 55, 57) 100%);
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
    <h1>USERS</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['firstname']}</td>
                            <td>{$row['lastname']}</td>
                            <td>{$row['email']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No data found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>