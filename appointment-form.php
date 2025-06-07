<?php
// If POST, process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    // Database connection (adjust credentials)
    $conn = new mysqli("localhost", "root", "", "appointments_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO appointments (name, date, time) VALUES ('$name', '$date', '$time')";
    if ($conn->query($sql) === TRUE) {
        echo "Appointment booked successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Appointment</title>
</head>
<body>
    <h2>Book an Appointment</h2>
    <form method="POST">
        Name: <input type="text" name="name" required><br>
        Date: <input type="date" name="date" required><br>
        Time: <input type="time" name="time" required><br>
        <input type="submit" value="Book">
    </form>
</body>
</html>
