<?php
// Start session
session_start();

// Include database connection
include 'db_connect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate email and password (you may need more validation here)
    // Query the database to check if the email exists and the password is correct
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, create session and redirect
            $_SESSION['user_id'] = $row['id'];
            header("Location: ../account.php"); // Redirect to account page
            exit;
        } else {
            // Password is incorrect
            $error = "Invalid email or password";
        }
    } else {
        // Email does not exist
        $error = "Invalid email or password";
    }
}
?>

