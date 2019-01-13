<?php
// подключение библиотек
require "secure/session.inc.php";
require "../inc/lib.inc.php";
require "../inc/config.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = isset($_POST["title"])		? clear($_POST['title']) : "";
    $author = isset($_POST["author"])	? clear($_POST['author']) : "";
    $pubyear = isset($_POST["pubyear"])	? clear($_POST['pubyear'],"i") : "";
    $price = isset($_POST["price"])		? clear($_POST['price'],"i") : "";

    if($title and $author and $pubyear and $price) {
        if (!addItemToCatalog($title, $author, $pubyear, $price)){
            echo 'Произошла ошибка при добавлении товара в каталог '.$title.", ".$author.", ".$pubyear.", ".$price.".";
        } else {
            header("Location: add2cat.php");
            echo 'Added successfully!';
            exit;
        }

    }
}