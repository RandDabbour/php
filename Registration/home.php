<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=edit" />

   
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <button><span class="material-symbols-outlined">
edit
</span></button>

<button>X</button>
<form action="" method="post" enctype="multipart/form-data" >
    Choose img:
    <input type=""
</form>

    <?php
include "connect.php";

// Check if form values are set
if (isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['password'])) {
    // Get form values
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    // SQL statement with placeholders
    $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";

    try {
        // Prepare the statement
        $stmt = $dbConnection->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        // Execute the statement
        $stmt->execute();

        echo "<h3>Data stored in the database successfully.</h3>";
        echo nl2br("\nName: $name\nEmail: $email\nPassword: $password");
    } catch (PDOException $error) {
        echo "ERROR: Could not execute query. " . $error->getMessage();
    }
} else {
    echo "Please fill out the form completely.";
}
    ?>
    
</body>
</html>