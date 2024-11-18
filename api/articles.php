<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');

include_once(dirname(path: __FILE__) . "/utils/database.php");

$db = new Database;


$articles = $db-> select("SELECT * FROM internetnews_articles");


echo json_encode($articles);