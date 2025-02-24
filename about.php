<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>

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
<link href="https://fonts.googleapis.com/css2?family=Delius+Swash+Caps&family=Fuzzy+Bubbles:wght@400;700&family=Henny+Penny&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    <!-- My Css -->
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
<?php require_once "inc/navbar.php"; ?>
    <!-- about -->
     <div class="container">
        <div class="about">
            <div class="card justify-content-center mt-5" style="width: fit-content;">
                <div class="card-body">
                    <h5 class="card-title">About Me!</h5>
                    <p class="card-text">I am an Education graduate who transitioned into a career as a programmer with a strong passion for learning. Currently, I am undergoing training at PPKD Jakarta Pusat to sharpen my skills in the tech industry. This journey is a significant step in combining my passion for education and technology to create a more innovative future.</p>
                    <iframe width="500" height="300" src="https://www.youtube.com/embed/gKLW1QO5R7U?si=-eK6T9ImSG2M_Q8f" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <figure class="text-end">
                            <blockquote class="blockquote">
                                <p>"The impediment to action advances action. What stands in the way becomes the way."</p>
                            </blockquote>
                        <figcaption class="blockquote-footer">
                        Marcus Aurelius,<cite title="Source Title">Meditations, Book 5, Passage 20</cite>
                        </figcaption>
                        </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#b99470" fill-opacity="1" d="M0,320L48,298.7C96,277,192,235,288,224C384,213,480,235,576,213.3C672,192,768,128,864,133.3C960,139,1056,213,1152,208C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> -->
     <!-- akhir about -->
    <!-- footer -->
    <?php require_once "inc/footer.php"; ?>
    <!-- akhir footer -->
</body>
</html>