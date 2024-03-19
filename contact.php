<?php
$name = $_POST["name"];
$password = $_POST["phone"];
$phone = $_POST["email"];
$message = $_POST["msg"];

try {
    $conn = new PDO("mysql:host=localhost;dbname=aqualife", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO contact (name, password, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $password, $phone, $message]);

    if ($stmt->rowCount() > 0) {
        header("Location: Home.html");
        exit();
    }

    $conn = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    $e->getTraceAsString();
}
?>
