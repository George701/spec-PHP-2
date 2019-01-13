<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";

$id = clear($_GET["id"]);

if($id){
    deleteItemFromBasket($id);
}
header('Location: basket.php');
exit;
