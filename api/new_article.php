<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');
include_once(dirname(path: __FILE__) . "/utils/database.php");

$db = new Database;

echo $_POST["title"];
$title = htmlspecialchars($_POST["title"]);
$description = htmlspecialchars($_POST["description"]);
$link = htmlspecialchars($_POST["link"]);



$db -> query("INSERT INTO internetnews_articles (title, description, link, active) VALUES ('%s', '%s', '%s', %s)", [$title, $description, $link, 0]);