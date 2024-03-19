<?php
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$idate = $_REQUEST["idate"];
$rdate = $_REQUEST["rdate"];
$icount = $_REQUEST["icount"];
$fcount = $_REQUEST["fcount"];
$ptop = $_REQUEST["ptop"];
$pmid = $_REQUEST["pmid"];
$pbot = $_REQUEST["pbot"];

try {
    $conn = new PDO("mysql:host=localhost;dbname=aqualife", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO record (name, email, idate, rdate, icount, fcount, ptop, pmid, pbot) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $idate);
    $stmt->bindParam(4, $rdate);
    $stmt->bindParam(5, $icount);
    $stmt->bindParam(6, $fcount);
    $stmt->bindParam(7, $ptop);
    $stmt->bindParam(8, $pmid);
    $stmt->bindParam(9, $pbot);
    $stmt->execute();

    header("Location: am.html");
    exit();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
