<?php
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");
const DB_HOST = "localhost";
const DB_LOGIN = "root";
const DB_PASSWORD = "";
const DB_NAME = "eshop";
const ORDERS_LOG = "orders.log";

$basket = array();
$count=0;
$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);


if($link->connect_error){
    echo "Could not connect to database: ".$link->connect_error;
}

basketInit();
