<?php
require_once "language_class.php";
error_reporting(E_ALL);
ini_set("display_errors", 1);

function getLanguage()
{
    preg_match_all('/([a-z]{1,8}(?:-[a-z]{1,8})?)(?:;q=([0-9.]+))?/', strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"]), $matches); // Получаем массив $matches с соответствиями
    $langs = array_combine($matches[1], $matches[2]); // Создаём массив с ключами $matches[1] и значениями $matches[2]
    foreach ($langs as $n => $v)
        $langs[$n] = $v ? $v : 1; // Если нет q, то ставим значение 1
    arsort($langs); // Сортируем по убыванию q
    $default_lang = key($langs); // Берём 1-й ключ первого (текущего) элемента (он же максимальный по q)
    if(strpos($default_lang, "ro") !== false) return "ro";
    elseif (strpos($default_lang, "en") !== false) return "en";
    return $default_lang; // Выводим язык по умолчанию
}
$language = getLanguage();
$language = "en";
$mysqli = new mysqli("127.0.0.1", "root", "mysql", "test-category");
$mysqli->set_charset("utf8");
$result_set = $mysqli->query("SELECT `title_$language` FROM `category`");
$categories = $result_set->fetch_all();
$mysqli->close();
$lang = new Language($language);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$lang->get("TITLE_MAIN")?></title>
</head>
<body>
<?php foreach ($categories as $category):?>
<h2><?=$category[0];?></h2>
<?php endforeach;?>
</body>
</html>
