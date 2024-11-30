<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $medical_records = $_POST["medical_records"];

    // Database connection
    $servername = "localhost";
    $username = "root"; // Change this if you have a different username
    $password = ""; // Change this if you have a password set for MySQL
    $dbname = "healthcare";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO patients (name, address, medical_records) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $address, $medical_records);

    if ($stmt->execute()) {
        echo "<p>New patient added successfully!</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
