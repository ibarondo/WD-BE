<?php
include('assets/php/classes.php');
include('assets/php/connect.php');
include('assets/php/islands.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>J. Memories</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/img/logo.ico">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Navbar (sit on top) -->
    <?php include('assets/php/navbar.php'); ?>

    <!-- Header -->
    <header class="w3-display-container" id="home"
        style="width: 100%; height: 100vh; margin: 0; padding: 0; overflow: hidden;">
        <img class="w3-image" src="assets/img/insideout.png" alt="Inside Out"
            style="width: 100%; height: 100%; object-fit: cover;">
        <div class="w3-display-middle w3-margin-top w3-center">
            <a class="header-link" href="#islands" style="text-decoration: none; cursor: pointer;">
                <h1 class="w3-xxlarge w3-text-black hoverable-text">
                    <span class="w3-padding w3-text-bold"><b>Explore My Islands of Personality →</b></span>
                </h1>
            </a>
        </div>
    </header>



    <!-- Page content -->
    <div class="w3-content w3-padding" style="max-width:1564px">


        <!-- Island Section -->
        <section>
            <div class="w3-container w3-padding-32" id="islands">
                <h3 class="w3-border-bottom w3-border-solid-black w3-padding-16 mb-4">Islands</h3>
                <p>My core memories shape who I am, creating vibrant islands of personality that define me. Each island
                    represents something unique—love, family, friendship, discovery. They're the foundation of my
                    identity, woven from precious moments I treasure. These islands remind me of what matters most and
                    guide me through every journey. Explore my islands and discover the memories that make me who I am.
                </p>
            </div>

            <!-- Island Card -->
            <div class="container">
                <div class="w3-row-padding" style="gap: 20px;">
                    <?php
                    foreach ($islands as $islandCard) {
                        echo $islandCard->buildCard();
                    }
                    ?>
                </div>
        </section>

        <!-- End page content -->
    </div>

    <!-- Footer -->
    <footer class="footer w3-center w3-padding-16"">
    </footer>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>