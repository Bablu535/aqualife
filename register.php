<?php
$username = $_POST["uname"];
$email = $_POST["email"];
$password = $_POST["pass"];
$cpassword = $_POST["cpass"];

try {
    $conn = new PDO("mysql:host=localhost;dbname=aqualife", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($password === $cpassword) {
        $stmt = $conn->prepare("INSERT INTO sign (username, email, password, cpassword) VALUES (:username, :email, :password, :cpassword)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':cpassword', $cpassword);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            header("Location: login.html");
            exit();
        } else {
            echo "<p>Registration failed. Please try again.</p>";
        }
    } else {
        echo "<p>Password and confirm password do not match.</p>";
    }

    $conn = null;
} catch (PDOException $e) {
    echo "<p>An error occurred: " . $e->getMessage() . "</p>";
}
?>
