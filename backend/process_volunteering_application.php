<?php
// Include database connection
include 'db_connect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $volunteeringArea = $_POST["volunteering-area"];
    $message = $_POST["message"];

    // Insert form data into the database
    $sql = "INSERT INTO volunteering_application_data (name, email, phone, volunteering_area, message) VALUES ('$name', '$email', '$phone', '$volunteeringArea', '$message')";
    if ($conn->query($sql) === TRUE) {
        // Volunteering application submitted successfully, redirect to home.php
        header("Location: ../application-success.php"); 
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
