<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=aqualife", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM rental");
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rental Information</title>
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- font awesome style -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="header_bottom">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" style="margin-top: -90px;" href="am.html">
                    <span>AQUA LIFE</span>
                </a>
                <div class="slider_section">
                    <div class="detail-box">
                        <a style="margin-left: 1020px;" href="index.html">Logout</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section " style="margin-top: -86px;">
        <div class="container ">
            <div class="row">
                <div class="col-md-18">
                    <div class="detail-box">
                        <h1>Rental Information</h1>
                        <main style="max-width: 1200px; margin: 20px auto; background-color: #fff; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 8px; overflow: hidden;">
                            <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                                <thead>
                                    <tr>
                                        <th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">Name</th>
                                        <th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">Email</th>
                                        <th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">Phone</th>
                                        <th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">Issue Date</th>
                                        <th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">Return Date</th>
                                        <th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">Address</th>
                                        <th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">City</th>
                                        <th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">State</th>
                                        <th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">pincode</th>
                                    </tr>
                                </thead>
                                <tbody>
    <?php
    if (isset($results) && !empty($results)) {
        foreach ($results as $row) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["phone"] . "</td>";
            echo "<td>" . $row["idate"] . "</td>";
            echo "<td>" . $row["rdate"] . "</td>";
            echo "<td>" . $row["address"] . "</td>";
            echo "<td>" . $row["city"] . "</td>";
            echo "<td>" . $row["state"] . "</td>";
            echo "<td>" . $row["message"] . "</td>";
           
        }
    }
    ?>
</tbody>

