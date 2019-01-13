<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
</head>
<body>
<?php
//echo md5("password");
//echo "<br>";
//echo sha1("password");
//echo "<br>";
////echo crypt("password");
//$hash = password_hash("password", PASSWORD_BCRYPT);
//echo $hash;
//echo "<br>";
//$pass = "password";
//if(password_verify($pass, $hash))
//    echo "OK";

//$dir = opendir(".");
//while ($name = readdir($dir)){
//    if($name == "." or $name=="..")
//        continue;
//    if(is_dir($name))
//        echo '['.$name.']<br>';
//    else
//        echo $name . '<br>';
//}
//
//print_r(scandir("."));
//
//$dir_txt_content = glob("*.txt");

// connection to db
//error_reporting(0);
$link = mysqli_connect('localhost', 'root','', 'web');

if (!$link->set_charset("utf8")) {
    printf("Ошибка при загрузке набора символов utf8: %s\n", $mysqli->error);
    exit();
} else {
    printf("Текущий набор символов: %s"."<br>", $link->character_set_name());
}

//mysqli_select_db($link, "test");
//if(!$link){
//    echo mysqli_connect_errno();
//    echo "<br>";
//    echo mysqli_connect_error();
//}

//$result = mysqli_query($link, "SET NAME 'utf-8'"); // TRUE/FALSE
//
//if(!$result){
//    echo mysqli_error($link);
//}

$sql = "SELECT * FROM teachers";
//echo $sql;
$res = mysqli_query($link, $sql);
//echo mysqli_error($link);

mysqli_close($link);

//while($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){
//while($row = mysqli_fetch_array($res, MYSQLI_NUM)){
while($row = mysqli_fetch_array($res)){
//while($row = mysqli_fetch_all($res)){
    print_r($row);
    echo "<br>";
}

echo "<br>";

$name = "John O'Brain";
$name = mysqli_real_escape_string($link,$name);
$sql = "SELECT * FROM teachers WHERE name = '$name'";

echo $sql;
?>
</body>
</html>