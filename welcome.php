<?php
// Include database connection
require('DBcon.php');

// Get form data
$name = $_POST["name"];
$email = $_POST["email"];

// Insert data into the database
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Display the input back to the user
echo "Welcome " . htmlspecialchars($name) . "<br>";
echo "Your email address is: " . htmlspecialchars($email);

// Close the connection
$conn->close();
?>
