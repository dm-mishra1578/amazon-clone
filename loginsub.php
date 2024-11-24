<?php
session_start();
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_STRING);

    // Prepare the SQL statement to select user data
    $stmt = $conn->prepare("SELECT id, name, password FROM amazonuser WHERE email = ?");
    $stmt->bind_param("s", $email); // Bind email parameter to the SQL query

    $stmt->execute(); // Execute the prepared statement
    $stmt->store_result(); // Store the result to check if the user exists
    $stmt->bind_result($user_id, $user_name, $hashed_password); // Bind result variables

    // Check if user exists
    if ($stmt->num_rows > 0) {
        $stmt->fetch(); // Fetch the result
        if (password_verify($password, $hashed_password)) {
            // Store user id and name in session upon successful login
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_name'] = $user_name;
            header("Location: index.php"); // Redirect to index.php
            exit;
        } else {
            // Redirect back to login page if password is incorrect
            header("Location: login.html");
            exit;
        }
    } else {
        // Redirect back to login page if email is not found
        header("Location: login.html");
        exit;
    }

    $stmt->close(); // Close the statement
}

$conn->close(); // Close the database connection
?>
