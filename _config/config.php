<?php

//---------------------------------------//
//              SESSIONS                 //
//---------------------------------------//

session_start();
//ini_set('session.cookie_lifetime', false);


//---------------------------------------//
//          ERRORS DISPLAY               //
//---------------------------------- ----//

//!\\ A enlever lors du déploiement
error_reporting(E_ALL);
ini_set('display_errors', true);

//---------------------------------------//
//              CONSTANTS                //
//---------------------------------------//

// Paths

define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9));
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9));


// websites informations

define("WEBSITE_TITLE", "Mon Site");
define("WEBSIT_NAME", "Mon Site");
define("WEBSITE_URL", "https://monsite.com");
define("WEBSITE_DESCRIPTION", "tutoriel MVC");
define("WEBSITE_KEYWORDS", "");
define("WEBSITE_LANGUAGE", "francais");
define("WEBSITE_AUTHOR", "Jehovanie");
define("WEBSITE_AUTHOR_MAIL", "jehovanieram@gmail.com");


// Facebook Open Graph tags

define("WEBSITE_FACEBOOK_NAME", "Jehovanie RAMANDRIJOEL");
define("WEBSITE_FACEBOOK_DESCRIPTION", "");
define("WEBSITE_FACEBOOK_URL", "");
define("WEBSITE_FACEBOOK_IMAGE", "");


// DataBase informations

define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "testMvc");
define("DATABASE_USER", "Jehovanie");
define("DATABASE_PASSWORD", "jheo1998");
