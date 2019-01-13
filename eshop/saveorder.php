<?php
	require "inc/lib.inc.php";
	require "inc/config.inc.php";

	if($_SERVER["REQUEST_METHOD"] == "POST"){

	    $name = isset($_POST["name"])       ? clear($_POST['name'])         : "";
        $email = isset($_POST["email"])     ? clear($_POST['email'])        : "";
        $phone = isset($_POST["phone"])     ? clear($_POST['phone'])        : "";
        $address = isset($_POST["address"]) ? clear($_POST['address'])      : "";

        if($name and $email and $phone and $address){
            $orderId = $basket['orderid'];
            $date = time();
            $order = "$name|$email|$phone|$address|$orderId|$date\r\n";
            file_put_contents("admin/".ORDERS_LOG, $order, FILE_APPEND);
            saveOrder($date);
        }

    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Сохранение данных заказа</title>
</head>
<body>
	<p>Ваш заказ принят.</p>
	<p><a href="catalog.php">Вернуться в каталог товаров</a></p>
</body>
</html>