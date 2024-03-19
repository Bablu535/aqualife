<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=aqualife", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM contact");
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
    <title>Customer Feedback</title>
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
                <div class="col-md-8 ">
                    <div class="detail-box">
                        <h1>Customer Feedback</h1>
                        <main style="max-width: 800px; margin: 20px auto; background-color: #fff; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 8px; overflow: hidden;">
                            <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                                <thead>
                                    <tr>
                                        <th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">Name</th>
                                        <th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">Password</th>
                                        <th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">phone</th>
                                        <th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($results) && !empty($results)) {
                                        foreach ($results as $row) {
                                            echo "<tr>";
                                            echo "<td>" . $row["name"] . "</td>";
                                            echo "<td>" . $row["phone"] . "</td>";
                                            echo "<td>" . $row["password"] . "</td>";
                                            echo "<td>" . $row["message"] . "</td>";
                                            echo "</tr>";
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </main>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-box">
                        <img src="images/slider-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end slider section -->
    </div>
    <!-- end info_section -->
    <!-- footer section -->
    <br><br>
    <footer class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayDateYear"></span> All Rights Reserved By
                <a href="https://html.design/">AQUA LIFE</a>
            </p>
        </div>
    </footer>
    <!-- footer section -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
    <!-- End Google Map -->
</body>

</html>
