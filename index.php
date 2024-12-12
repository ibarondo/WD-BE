<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jannah Ibarondo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="Homepage/assets/j.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Homepage/css/style.css">
</head>

<body>
    <header class="header">
        <a href="./" class="logo">
            <img src="Homepage/assets/ibarondo.png" alt="Logo" class="logo-image">
        </a>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <!-- <a href="#services">Services</a> -->
            <a href="#project">Projects</a>
            <!-- <a href="#contact">Contact</a> -->
        </nav>

        <div class="bx bx-moon" id="darkMode-icon"></div>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <section class="home" id="home">
        <div class="home-grid">
            <div class="home-content pt-0">
                <h1>Hi, I'm Jannah!</h1>
                <h3>IT Student</h3>
                <p>I'm a third-year BS Information Technology student at the Polytechnic University of the Philippines,
                    passionate about tech innovation and eager to apply my skills in programming, systems analysis, and
                    web development.</p>

                <div class="social-media">
                    <a href="https://www.facebook.com/j.ibarondo" target="_blank"><i class='bx bxl-facebook'></i></a>
                    <a href="mailto:jannah.ibarondo@gmail.com" target="_blank"><i class='bx bxl-gmail'></i></a>
                    <a href="ibarondo.github.io" target="_blank"><i class='bx bxl-github'></i></a>
                </div>
                <a href="#" class="btn">Download CV</a>
            </div>

            <div class="home-img-container">
                <div class="triangle-shape"></div>
                <div class="home-img">
                    <img src="Homepage/assets/jibarondo.png" alt="Profile Image">
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-5 col-md-5 col-sm-12 mb-4 px-4 d-flex align-items-center">
                    <div class="about-img">
                        <img src="Homepage/assets/about-img.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-7 col-md-7 col-sm-12 mb-4 d-flex align-items-center px-4">
                    <div class="about-content">
                        <h2 class="heading">About <span>Me</span></h2>
                        <h3>3rd Year BSIT Student</h3>
                        <p>
                            I am dedicated third-year IT student passionate about technology and problem-solving. With a
                            keen interest in software development and a drive to learn new skills, I thrive on turning
                            ideas into
                            functional solutions. I believe in continuous learning and growth, embracing challenges, and
                            using
                            technology to create meaningful impact.
                        </p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="services" id="services">
        <h2 class="heading">My <span>Services</span></h2>

        <div class="services-container">
            <div class="services-box">
                <i class='bx bx-loader-circle'></i>
                <h3>Loading...</h3>
                <p>
                    Nothing to show here yet.
                </p>
                <a href="#" class="btn">Read More</a>
            </div>
            <div class="services-box">
                <i class='bx bx-loader-circle'></i>
                <h3>Loading...</h3>
                <p>
                    Nothing to show here yet.
                </p>
                <a href="#" class="btn">Read More</a>
            </div>
            <div class="services-box">
                <i class='bx bx-loader-circle'></i>
                <h3>Loading...</h3>
                <p>
                    Nothing to show here yet.
                </p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section> -->

    <section class="project" id="project">
        <h2 class="heading mb-5">My <span>Projects</span></h2>

        <div class="project-container">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6 col-sm-12 col-12 mb-4 mx-auto">
                    <a href="A08/index.php" target="_blank">
                        <div class="card">
                            <div class="card-image-wrapper">
                                <img src="Homepage/assets/insideout.png" class="card-img-top" alt="Project Image">
                                <div class="card-body-overlay">
                                    <h4 class="card-title">My Island of Personality</h4>
                                    <p class="card-text">My core memories create islands of personality—each
                                        representing
                                        love, family, friendship, or discovery. They're my foundation, shaping who I am
                                        and
                                        guiding my journey.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="Homepage/js/script.js"></script>
</body>

</html>