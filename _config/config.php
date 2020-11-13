<?php

                                    // ------------------------------------------//
                                    //       CONFIGURATION GLOBALE DE TOUT LE SITE //
                                    // ------------------------------------------- //

// --------------------------- //
//       ERRORS DISPLAY        //
// --------------------------- //

//!\\ A enlever lors du déploiement
error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', true); 


// --------------------------- //
//          SESSIONS           //
// --------------------------- //

ini_set('session.cookie_lifetime', false); // la durée de vie de la session est active tant que l'utilisateur n'a pas quitté la page ou fermé le navigateur
session_start();


// --------------------------- //
//         CONSTANTS           //
// --------------------------- //

// Paths
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9)); // Pour fonctions d'inclusion php
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9)); // Pour images, fichiers etc (html)

// Website informations
define("WEBSITE_TITLE", "Mon site");
define("WEBSITE_NAME", "Mon site");
define("WEBSITE_URL", "https://monsite.com");
define("WEBSITE_DESCRIPTION", "Description du site");
define("WEBSITE_KEYWORDS", "");
define("WEBSITE_LANGUAGE", "");
define("WEBSITE_AUTHOR", "");
define("WEBSITE_AUTHOR_MAIL", "");



// DataBase informations
define("DATABASE_HOST", "sql3.freesqldatabase.com");
define("DATABASE_NAME", "sql3376354");
define("DATABASE_USER", "sql3376354");
define("DATABASE_PASSWORD", "u2plwjti3c");


