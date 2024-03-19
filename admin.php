<?php
$email = $_REQUEST["uname"];
$password = $_REQUEST["password"];

// Database connection parameters
$servername = "localhost";
$username = "root";
$password_db = "";
$database = "aqualife";

// Create connection
$conn = new mysqli($servername, $username, $password_db, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement with placeholders to prevent SQL injection

$stmt = $conn->prepare("SELECT email FROM admin WHERE email=? AND password=?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$stmt->store_result();



if ($stmt->num_rows > 0) {
    setcookie("email",$email, time()+3600,"/","",0);
    header("Location: am.html");
    exit();
} else {
    echo "<br><br><br><center><p style='color: red;'>INCORRECT EMAIL/PASSWORD</p></center>";
}

// Close statement and connection
$stmt->close();
$conn->close();


?>