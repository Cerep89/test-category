<?php
function checkError()
{
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}

function closeConnection()
{
    global $mysqli;
    $mysqli->close();
}

function setLanguage()
{
    global $language;
    $sites = ["ro" => "Romana",
        "en" => "English",
    ];

    if (isset($_GET['lang'])) {
        setcookie("lang", $_GET['lang']);
        $language = $_GET['lang'];
    }elseif(isset($_COOKIE["lang"])){
        $language=$_COOKIE["lang"];
    } else {
        $language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 1);
        if (!in_array($language, array_keys($sites))) {
            $language = 'en';
        }
    }
    return $language;
}

function getCategories()
{
    global $language;
    global $mysqli;
    $result_set = $mysqli->query("SELECT `title_$language` FROM `category`");
    $categories = $result_set->fetch_all();
    return $categories;
}

function getCategory($cat)
{
    global $language;
    global $mysqli;
    /*$category_id = $mysqli->query("SELECT `id` FROM `category` WHERE title_$language = '$cat' LIMIT 1 ");
    $category_id = $category_id->fetch_assoc();
    $id = $category_id['id'];*/
    $result_set = $mysqli->query("SELECT * FROM `products` WHERE category_id = 1 ");
    return $select_category = $result_set->fetch_assoc();
    var_dump($select_category);die;
}