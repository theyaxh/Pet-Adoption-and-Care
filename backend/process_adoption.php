<?php
// Include database connection
include 'db_connect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $petType = $_POST["pet-type"];
    $reason = $_POST["reason"];

    // Insert form data into the database
    $sql = "INSERT INTO adoption_data (name, email, phone, address, pet_type, reason) VALUES ('$name', '$email', '$phone', '$address', '$petType', '$reason')";
    if ($conn->query($sql) === TRUE) {  
        header("Location: ../application-success.php"); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
