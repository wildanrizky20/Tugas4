<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .user-detail-card {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            font-size: 24px;
            font-weight: bold;
        }

        .card-body p {
            font-size: 16px;
            color: #555;
        }

        .btn-primary {
            width: 100%;
            border-radius: 25px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card user-detail-card">
        <div class="card-header text-center bg-primary text-white">
            <h3>User Detail</h3>
        </div>
        <div class="card-body">
        <?php if ($user): ?>
                    <p><strong>ID: <?php echo $user['id']; ?></p></strong>
                    <p><strong>Name: <?php echo $user['name']; ?></p></strong>
                    <p><strong>Email: <?php echo $user['email']; ?></p></strong>
                <?php else: ?>
                    <p class="text-danger">User tidak ditemukan.</p>
                <?php endif; ?>
            <a href="index.php" class="btn btn-primary mt-4">Back to User List</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>