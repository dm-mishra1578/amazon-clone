
<?php
 $servername = "localhost";
 $username = "root";
 $dbpassword = "";
 $dbname = "test";
// Create connection
$conn = new mysqli($servername, $username,  $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_STRING);
    $re_password = filter_input(INPUT_POST, 're_pwd', FILTER_SANITIZE_STRING);

    // Check if passwords match
    if ($password !== $re_password) {
        echo "Passwords do not match!";
        exit;
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO amazonuser (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $hashed_password);
    
    // Execute the statement
    if ($stmt->execute()) {
        header("Location: index.php");
        echo "New record created successfully";
    } else {
        header("Location: registration.php");
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    

   
}

$conn->close();
?>
