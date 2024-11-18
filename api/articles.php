<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');

include_once(dirname(path: __FILE__) . "/utils/database.php");

$db = new Database;

$showInnactives = isset($_GET["showInnactives"]) && $_GET["showInnactives"] == 1;

if ($showInnactives) {
    $articles = $db-> select("SELECT * FROM internetnews_articles");
} else {
    $articles = $db-> select("SELECT * FROM internetnews_articles WHERE active = 1");
}

echo json_encode($articles);