<?php
if (isset($_COOKIE["username"])) {
    $user = $_COOKIE["username"];

    try {
        $conn = new PDO("mysql:host=localhost;dbname=aqualife", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Retrieve data from the database
        $stmt = $conn->prepare("SELECT * FROM record WHERE name = :username");
        $stmt->bindParam(':username', $user);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
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

    <title>Inance</title>

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
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">

            <div class="header_bottom">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container ">
                        <a class="navbar-brand" href="Home.html">
                            <span>
                                AQUA LIFE
                            </span>
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""> </span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ">
                                <li class="nav-item ">
                                    <a class="nav-link" href="Home.html">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html"> About</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="ren.html">Rental</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact Us</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="service.html"></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- end header section -->
    </div>

    <!-- service section -->

    <section class="slider_section ">
        <div class="container ">
            <div class="row">
                <div class="col-md-18">
                    <div class="detail-box">
                        <br>
                        <h1>
                            Previous Records
                        </h1>

                        <main style="max-width: 1500px; margin: 5px auto; background-color: #fff; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 8px; overflow: hidden;width:100vw;">

                            <table style="width: 100%; border-collapse: collapse; margin-top: 10px;">
                                <thead>
                                    <tr>
                                        <th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">Name</th>
                                        <th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">Email</th>
                                        <th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">Issue Date</th>
                                        <th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">Return Date</th>
                                        <th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">Initial Fish Count</th>
<th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">Final Fish Count</th>
<th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">pH(Top)</th>
<th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">pH(Mid)</th>
<th style="border: 1px solid #ddd; padding: 12px; background-color: #fd7e14; color: #fff; text-align: left;">pH(Bottom)</th>

</tr>
</thead>
<tbody>
<?php
foreach ($records as $record) {
?>
    <tr>
        <th><?php echo $record["name"]; ?></th>
        <th><?php echo $record["email"]; ?></th>
        <th><?php echo $record["idate"]; ?></th>
        <th><?php echo $record["rdate"]; ?></th>
        <th><?php echo $record["icount"]; ?></th>
        <th><?php echo $record["fcount"]; ?></th>
        <th><?php echo $record["ptop"]; ?></th>
        <th><?php echo $record["pmid"]; ?></th>
        <th><?php echo $record["pbot"]; ?></th>
    </tr>
<?php
}
?>

</tbody>
</table>

</main>

