<?
$dt = time();
$page = $_SERVER['REQUEST_URI'];
$ref = $_SERVER['HTTP_REFERER'];
$path = $dt." | ".$page." | ".$ref.PHP_EOL;

file_put_contents(PATH_LOG, $path, FILE_APPEND);