<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once("./views/includes/head.php") ?>
    <title> <?= ucfirst($page) ?> - Mon Site </title>
</head>

<body>
    <?php include_once "./views/includes/header.php" ?>
    <h1>
        Contact ...
    </h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="email"> Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="firstname">Prénom</label>
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Jheo">
        </div>
        <div class="form-group">
            <label for="text">Message</label>
            <textarea class="form-control" id="text" name="message" rows="8" placeholder="Mon message ... "></textarea>
        </div>
        <button type="submit" class="btn btn-primary my-2" name="btnContact"> Envoye mon message </button>
    </form>

    <?php include_once "./views/includes/footer.php" ?>
</body>

</html>