<?php 
$cookie_name ="user";
$cookie_value ="registers";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=edit" />
    <title>Manage Users</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php 
    if(!isset($_COOKIE[$cookie_name]))
    {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
      echo "Cookie '" . $cookie_name . "' is set!<br>";
      echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>
    <h2>Manage Users</h2>

    <?php
    include "connect.php";

    // Check if the form is submitted for updating data
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Update query
        $updateSql = "UPDATE users SET name=:name, email=:email, password=:password WHERE id=:id";
        try {
            $stmt = $dbConnection->prepare($updateSql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            echo "<p>Record updated successfully.</p>";
        } catch (PDOException $error) {
            echo "ERROR: Could not update the record. " . $error->getMessage();
        }
    }

    // Check if the form is submitted for deleting data
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];

        // Delete query
        $deleteSql = "DELETE FROM users WHERE id=:id";
        try {
            $stmt = $dbConnection->prepare($deleteSql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            echo "<p>Record deleted successfully.</p>";
        } catch (PDOException $error) {
            echo "ERROR: Could not delete the record. " . $error->getMessage();
        }
    }

    // Display all records
    $sql = "SELECT * FROM users";
    $result = $dbConnection->query($sql);

    if ($result->rowCount() > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>

                    <th>Actions</th>
                </tr>";
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['password'] . "</td>
                    <td>
                        <a href='?edit=" . $row['id'] . "'>Edit</a> |
                        <a href='?delete=" . $row['id'] . "' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a>
                    </td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No records found.</p>";
    }

    // Check if the edit button is clicked
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $editSql = "SELECT * FROM users WHERE id=:id";
        $stmt = $dbConnection->prepare($editSql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
    ?>

    <h3>Edit User</h3>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required>
        <label>Password:</label>
        <input type="password" name="password" value="<?php echo htmlspecialchars($row['password']); ?>" required>
        <button type="submit" name="update">Update</button>
    </form>

    <?php
        } else {
            echo "<p>User not found.</p>";
        }
    }
    ?>

</body>
</html>
