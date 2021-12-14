<?php

if (isset($_GET['page']) && !empty($_GET['page'])) {

    $page = trim(strtolower($_GET['page']));
} else {
    $page = "home";
}

$allpages = scandir('controllers/');

if (in_array($page . '_controller.php', $allpages)) {

    include_once('controllers/' . $page . '_controller.php');
    include_once('modeles/' . $page . '_modele.php');
    include_once('views/' . $page . '_view.php');
} else {
    echo "Error : 404 ";
}
