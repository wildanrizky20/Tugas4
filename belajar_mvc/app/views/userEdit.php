<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            width: 100%;
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
            color: #333;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: black;
            text-decoration: none;
            font-weight: bold;
        }

        .back-link:hover {
            color: #333;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Edit User</h2>
    <form action="index.php?action=edit&id=<?php echo $user ['id']; ?>" method="POST">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $user['name']; ?>" required>

        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" required>

        <button type="submit">Update</button>
    </form>
    <a href="index.php" class="back-link">Back to User List</a>
</div>

</body>
</html>