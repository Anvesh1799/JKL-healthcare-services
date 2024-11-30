<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $medical_records = $_POST["medical_records"];

    // Database connection
    include 'db_connect.php';

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO patients (name, address, medical_records) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $address, $medical_records);

    if ($stmt->execute()) {
        echo "New patient added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
