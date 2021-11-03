<?php

if (!isset($_GET["page"])) {
    require_once("controller/HomeController.php");
}
if (isset($_GET["page"]) && $_GET["page"] == "home") {
    require_once("controller/HomeController.php");
}
if (isset($_GET["page"]) && isset($_GET["page"]) == "article") {
    require_once("controller/ArticleController.php");
}
