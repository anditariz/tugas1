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
    <!-- Font Style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Pinstripe:ital@0;1&family=Delius+Swash+Caps&family=Delius+Unicase:wght@400;700&family=Niconne&display=swap" rel="stylesheet">
    <!-- My Css -->
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
    <?php require_once "inc/navbar.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
                <div class="card mt-3">
                    <div class="card-header text-center">
                        <h1>Contact Me</h1>
                    </div>
                    <div class="card-body" style="background-color:  #f1e7dd;">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputTextarea" class="form-label">Pesan</label>
                                <textarea name="Pesan" id=""></textarea>
                            </div>
                            <!-- <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2">

            </div>
        </div>
    </div>

    <!-- <header class="contact">
    </header> -->

    <?php require_once "inc/footer.php"; ?>
</body>

</html>