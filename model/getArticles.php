<?php
require_once("model/database.php");

$request = $database->prepare("SELECT * FROM post");
$request->execute();

$articles = $request->fetchAll();
