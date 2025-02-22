<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>

    <!-- Boostrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Font Style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Delius+Swash+Caps&family=Fuzzy+Bubbles:wght@400;700&family=Henny+Penny&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
<!-- My Css -->
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
<?php require_once "inc/navbar.php"; ?>
    <!-- navbar -->
    <!-- <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: #B99470">
        <div class="container">
            <a class="navbar-brand" href="#">Andtrzk</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Download CV</a>
                    <a class="nav-link" href="#">Contact</a>
                    <a class="nav-link " href="#">About</a>
                </div>
            </div>
        </div>
    </nav> -->
    <!-- akhir navbar -->
    <!-- jumbotron -->
    <section class="jumbotron text-center font-family: DM Serif Text, serif;">
        <img src="../tugas/img/profile.jpg" alt="foto profile" width="200" class="rounded-circle">
        <h1 class="display-4">Andita Rizka Ramadhanti</h1>
        <p class="lead">Teacher | Programmer</p>
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>I am currently undergoing training at PPKD Jakarta Pusat</h2>
                    <br>
                </div>
            </div>
            <div class="row justify-contect-center fs-5 kemampuan">
                <div class="col-6">
                    <h5>Skills</h5>
                    <hr>
                    <ul style="list-style-type: none;">
                        <li>JavaScript</li>
                        <li>HTML CSS</li>
                    </ul>
                </div>
                <div class="col-6">
                    <h5>Experience</h5>
                    <hr>
                    <ul style="list-style-type: none;">
                        <li>Teaching at WSE Bimbel</li>
                        <li>Teaching at Brain Academy by Ruangguru</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fefae0" fill-opacity="1" d="M0,160L48,138.7C96,117,192,75,288,69.3C384,64,480,96,576,106.7C672,117,768,107,864,96C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> -->
    </section>
    <!-- akhir jumbotron -->

    <!-- footer -->
    <?php require_once "inc/footer.php"; ?>
    <!-- akhir footer -->
</body>

</html>