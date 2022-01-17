<!doctype html>
<html lang="en">

<head>
    <?php include_once("./views/includes/head.php") ?>
    <title> <?= ucfirst($page) ?> - Mon Site </title>
</head>

<body>
    <?php include_once("./views/includes/header.php") ?>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <?php foreach ($allCategories as $index => $category) : ?>
                <a class="p-2 link-secondary" href="#"><?= $category["name"] ?></a>
            <?php endforeach ?>
        </nav>
    </div>
    </div>

    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic"><?= $lastArtilcleInCategorier["title"] ?></h1>
                <p class="lead my-3"><?= $lastArtilcleInCategorier["sentence"] ?></p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"><?= $articleLeft["category"] ?></strong>
                        <h3 class="mb-0"><?= $articleLeft["title"] ?></h3>
                        <div class="mb-1 text-muted"><?= date_format(date_create($articleLeft["date"]), 'd/m/Y H:i') ?></div>
                        <p class="card-text mb-auto"><?= $articleLeft["sentence"] ?></p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"><?= $articleright["category"] ?></strong>
                        <h3 class="mb-0"><?= $articleright["title"] ?></h3>
                        <div class="mb-1 text-muted"><?= date_format(date_create($articleright["date"]), 'd/m/Y H:i') ?></div>
                        <p class="card-text mb-auto"><?= $articleright["sentence"] ?></p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>

                    </div>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    From the Firehose
                </h3>

                <?php foreach ($allArticles as $index => $article) : ?>
                    <article class="blog-post">
                        <h2 class="blog-post-title"><?= $article['title'] ?></h2>
                        <p class="blog-post-meta"><?= date_format(date_create($article['date']), 'd/m/Y H:i') ?> par <a href="#"><?= $article['firstname'] . " " . $article['lastname'] ?></a></p>
                        <p><?= $article['content'] ?> </p>

                    </article>
                <?php endforeach ?>

                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled">Newer</a>
                </nav>

            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fst-italic">About</h4>
                        <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php include_once "./views/includes/footer.php" ?>
</body>

</html>