<?php

$allArticles = Articles::getAllArticles();
$allCategories = Categories::getAllCategories();
$lastArtilcleInCategorier = Articles::getlastArticle();

$articleLeft = Articles::getlastArticle(5);
$articleright = Articles::getlastArticle(2);
