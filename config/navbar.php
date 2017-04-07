<?php

$rootUrl = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

// Поменяй эти параметры под себя для локального хоста
if ($_SERVER['HTTP_HOST'] == "localhost") {
    $localRoot = $rootUrl . "/website_project/";
} else {
    $localRoot = $rootUrl;
}

?>

<!DOCTYPE html>

<html lang="en-ca">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo $title ?>
    </title>
    <!-- plugging in reset stylesheet, global stylesheet, and page-specific stylesheet-->
    <link rel="stylesheet" type="text/css" href=<?php echo $localRoot . "css/reset.css" ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo $localRoot . "css/style.css" ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo $localRoot . "css/footer.css" ?>>

    <!--include ALL the CSS -->
    <link rel="stylesheet" type="text/css" href=<?php echo $localRoot . "css/pages/main.css" ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo $localRoot . "css/pages/about_us.css" ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo $localRoot . "css/pages/contact.css" ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo $localRoot . "css/pages/feedback.css" ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo $localRoot . "css/pages/services.css" ?>>
    <!-- End CSS -->

    <link rel="icon" href=<?php echo $localRoot . "images/icon.png" ?>/>
    <link rel="stylesheet" href=<?php echo $localRoot . "lib/bootstrap/css/bootstrap.min.css" ?>>
    <link rel="stylesheet" href=<?php echo $localRoot . "lib/font-awesome/css/font-awesome.css" ?>>

    <!--[if lt IE 9]>

    <script src=<?php echo $localRoot . "js/html5shiv.js" ?>></script>
    <![endif]-->
</head>
<body>

<link rel="stylesheet" href=<?php echo $localRoot . "lib/bootstrap/css/bootstrap.min.css" ?>>

<nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href=<?php echo $localRoot . "index" ?>>Mary Ventrella Counselling</a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href=<?php echo $localRoot . "index" ?>>Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=<?php echo $localRoot . "php/about_me.php" ?>>About Me</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=<?php echo $localRoot . "php/services.php" ?>>Services</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Contact
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href=<?php echo $localRoot . "php/contact_me" ?>>Contact Me</a>
                    <a class="dropdown-item" href=<?php echo $localRoot . "php/feedback.php" ?>>Feedback</a>
                </div>
            </li>
        </ul>
    </div>
</nav>