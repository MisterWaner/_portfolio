<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Portfolio of Erwan Soulas, a french passionate web developer" />
    <title>Erwan Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!--------------------- HEADER ----------------------->
    <?php
    include("src/components/Header/header.html");
    ?>

    <!--------------------- NAV ----------------------->
    <?php include ("src/components/Nav/navigation.html"); ?>

    <!--------------------- MAIN ----------------------->
    <main>
        <!------------------ HERO SECTION ------------------>
        <?php include("src/components/Sections/hero-section.html"); ?>

        <!------------------ ABOUT SECTION ------------------>
        <?php include("src/components/Sections/about-section.html"); ?>
        <!------------------ PROJECTS SECTION ------------------>
        <?php include("src/components/Sections/project-section.php"); ?>
    </main>
    <script src="script.js"></script>
</body>

</html>