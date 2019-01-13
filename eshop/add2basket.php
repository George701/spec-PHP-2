<?php

	require "inc/lib.inc.php";
	require "inc/config.inc.php";

$id = clear($_GET["id"]);

if($id){
    add2Basket($id);
}
header('Location: catalog.php');
exit;