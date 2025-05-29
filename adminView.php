<?php
require_once '../connect.php';
require_once '../login/adminController.php';

try {
    $adminController = new AdminController();
    $data = $adminController->fetchData();
} catch (Exception $e) {
    // Handle error (log it, show a user-friendly message, etc.)
    $data = [];
    error_log($e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style2.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
        <nav>
            <a href="../logout.php">Logout</a>
        </nav>
    </header>
    <main>
        <h2>Data from Database</h2>
        <?php if (!empty($data)): ?>
            <table>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No data available.</p>
        <?php endif; ?>
    </main>
</body>
</html>