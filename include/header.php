<?php
require_once "./class/language_class.php";
require_once "./functions/functions.php";
checkError();
setLanguage();
include('./db/connection.php');
$categories = getCategories();
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
                <a href="?lang=en"><button type="button" class="btn btn-primary">EN</button></a>
                <a href="?lang=ro"><button type="button" class="btn btn-primary">RO</button></a>

            </div>
            <div class="text-center"
            <!--======================================
            Add button
            =======================================-->
            <a href="index.php"><button type="button" class="btn btn-primary"><?= $lang->get("HOME") ?></button></a>
            <a href="category.php"><button type="button" class="btn btn-primary"><?= $lang->get("CATEGORIES") ?></button></a>
            <a href="cart.html"><button type="button" class="btn btn-primary"><?= $lang->get("CART") ?></button></a>
            <div class="center"><h1><?=$lang->get("CATEGORIES")?> </h1></div>
        </div>