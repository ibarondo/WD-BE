<?php
include('assets/php/classes.php');
include('assets/php/connect.php');
include('assets/php/islands.php');
include('assets/php/contents.php');

?>

<!DOCTYPE html>
<html>

<head>
    <title><?php echo $content->islandName ?> | My Island of Personality</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/img/logo.ico" type="image/png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Navbar (sit on top) -->
    <?php include('assets/php/navbar.php'); ?>

    <!-- Header -->
    <header class="w3-display-container w3-content w3-wide" id="home">
        <div class="w3-container w3-padding-32 mt-5" id="about">
            <h1 class="w3-border-bottom w3-border-solid-black w3-padding-16">
                <?php echo $content->islandName ?>
            </h1>
            <p class="mt-4">
                <?php echo $content->description ?>
            </p>
        </div>
        <!-- <div>
            <img src="assets/img/<?php echo $content->islandImage ?>" class="w3-image" style="width:100%; height: 75%"
                alt="<?php echo $content->islandName ?>">
        </div> -->
    </header>

    <section>
        <!-- Page content -->
        <!-- style="max-width:1564px" -->
        <div class="w3-content w3-padding" style="width: 100%; height: 100%">

            <!-- Main Content -->
            <div class="container-fluid">
                <div class="row">
                    <?php
                    foreach ($contents as $content) {
                        echo $content->buildContent();
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- End page content -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>