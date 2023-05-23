<?php

include_once("./_config/config.php");
include_once("./_config/db.php");
include_once("./_fonctions/fonction.php");


include_once("./_classes/Articles.php");
include_once("./_classes/Authors.php");
include_once("./_classes/Categories.php");


$author = Categories::getAllCategories();

if (isset($_GET['page']) && !empty($_GET['page'])) {

    $page = trim(strtolower($_GET['page']));
} else {
    $page = "home";
}

$allpages = scandir('controllers/'); // scan all element.

if (in_array($page . '_controller.php', $allpages)) {

    include_once('controllers/' . $page . '_controller.php');
    include_once('modeles/' . $page . '_modele.php');
    include_once('views/' . $page . '_view.php');
} else {
    echo "Error : 404 ";
}


var_dump($_SESSION);
// die();
