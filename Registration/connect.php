<?php
$host = "localhost";
$dbname = "registeration";
$userName = "root";
$password = "";

// Data Source Name (DSN)
$dsn = "mysql:host=$host;dbname=$dbname";

try {
    // Create a new PDO instance
    $dbConnection = new PDO($dsn, $userName, $password);
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connection successful";
} catch (PDOException $error) {
    // Output error code
    echo "Connection failed: " . $error->getMessage();
    exit();
}

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
