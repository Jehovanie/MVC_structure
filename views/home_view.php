<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./views/includes/head.php") ?>

    <title> <?= ucfirst($page) ?> - Mon Site </title>
</head>

<body>
    <?php include_once("./views/includes/header.php") ?>

    <section class="banner d-flex justify-content-center align-items-center pt-5">
        <div class="container my-5 py-5">
            <div class="row">
                <div class="col-md-6 ">
                    <img class="rounded w-100 h-250" src="https://random.imagecdn.app/500/150" alt=" first Image ">
                </div>
                <div class="col-md-6 banner-desc lh-lg">
                    <h1 class="text-capitalize py-3 redressed">
                        Restaurant multi-saveurs à <br />
                        votre goût dans la ville de NDIKI
                    </h1>
                    <p>
                        <button class="btn btn-order btn-lg me-5 rounded-0 merriweather">Commander maintenant</button>
                        <button class="btn btn-outline-info btn-lg rounded-0 merriweather">Reserver</button>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php include_once "./views/includes/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>