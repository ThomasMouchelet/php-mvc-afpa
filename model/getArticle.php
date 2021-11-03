<?php
require_once("model/database.php");

$request = $database->prepare("SELECT * FROM post WHERE id = :id");
$request->bindValue(":id", $_GET["id"]);
$request->execute();

$article = $request->fetch();
