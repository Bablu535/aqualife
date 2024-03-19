<?php
$username = $_POST["uname"];
$password = $_POST["pass"];

try {
    $conn = new PDO("mysql:host=localhost;dbname=aqualife", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT username, password FROM sign WHERE username=? AND password=?");
    $stmt->execute([$username, $password]);

    if ($stmt->rowCount() > 0) {
        setcookie("username",$username, time()+3600,"/","",0);
        
        header("Location: Home.html");
        exit();
    } else {
        echo "Please register first.";
        header("Location: login.html");
        exit();
    }

    $conn = null;
} catch (PDOException $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>
