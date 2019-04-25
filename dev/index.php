<?php
require_once  __DIR__ . "/lib.php";
?>

<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Google -->
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta name="copyright" content="" />
        <meta name="application-name" content="" />

        <!-- Facebook -->
        <meta property="og:url" content="http://www.headtoboots.com/" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Head to Boots" />
        <meta property="og:description" content="Head to Boots est une compagnie beauceronne ayant été fondée dans le but de vendre du linge adapté pour nos danseurs de ligne." />
        <meta property="og:image" content="http://www.headtoboots.com/assets/img/head-to-boots.jpg" />

        <link rel="stylesheet" type="text/css" href="assets/css/index.min.css">
        <link rel="shortcut icon" href="/assets/img/favicon.png">
		<title>Head To Boots</title>
	</head>

	<body>

        <div class="lay-wrapper">

            <?php
                module(["name" => "video"]);
                module(["name" => "banner"]);
                module(["name" => "shop"]);
                module(["name" => "footer"]);
                module(["name" => "info"]);
            ?>

        </div>

		<script type="text/javascript" src="assets/js/index.min.js"></script>
	</body>

</html>