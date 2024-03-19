<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$idate = $_POST["idate"];
$rdate = $_POST["rdate"];
$address = $_POST["addr"];
$city = $_POST["city"];
$state = $_POST["state"];
$message = $_POST["pincode"];

try {
    $conn = new PDO("mysql:host=localhost;dbname=aqualife", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO rental (name, email, phone, idate, rdate, address, city, state, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$name, $email, $phone, $idate, $rdate, $address, $city, $state, $message]);

    header("Location: Home.html");
    exit();

    $conn = null;
} catch (PDOException $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>
