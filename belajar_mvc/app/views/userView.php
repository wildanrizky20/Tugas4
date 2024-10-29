<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 20px;
        }

        h2 {
            text-align : center;
            color: #333;
            
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table tr:nth-child(even) {
            background-color: blue;
        }

        table tr:hover {
            background-color: blue;
        }

        table th {
            background-color: #004085; /* Dark blue */
            color: white;
        }
    </style>
</head>
<body>
    <h2><b>User List</b></h2>
    <table class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td class="action-links">
                        <a href="index.php?action=detail&id=<?php echo $user['id']; ?>" class="btn btn-primary btn-sm">Detail</a>
                        <a href="index.php?action=edit&id=<?php echo $user['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="index.php?action=delete&id=<?php echo $user['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>