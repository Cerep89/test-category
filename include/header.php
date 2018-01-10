<?php
require_once "language_class.php";
error_reporting(E_ALL);
ini_set("display_errors", 1);

$sites = ["ro" => "Romana",
    "en" => "English",
];
if (isset($_GET['lang'])) {
    $language = $_GET['lang'];
} else {
    $language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 1);
    if (!in_array($language, array_keys($sites))) {
        $language = 'en';
    }
}
$mysqli = new mysqli("127.0.0.1", "root", "mysql", "test-category");
$mysqli->set_charset("utf8");
$result_set = $mysqli->query("SELECT `title_$language` FROM `category`");
$categories = $result_set->fetch_all();
$mysqli->close();
$lang = new Language($language);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $lang->get("TITLE_MAIN") ?></title>

</head>
<body>
<div class="row">
    <div class="container">
        <div class="col-sm-12 col-md-12">

            <div class="text-right">
                <!--======================================
                Add language button
                =======================================-->
                <button type="button" class="btn btn-primary"><a href="?lang=en">EN</a></button>
                <button type="button" class="btn btn-primary"><a href="?lang=ro">RO</a></button>

            </div>
            <div class="text-center"
            <!--======================================
            Add button
            =======================================-->
            <button type="button" class="btn btn-primary">Category</button>
            <button type="button" class="btn btn-primary">Cart</button>
            <div class="center"><h1><?=$lang->get("CATEGORIES")?> </h1></div>
        </div>