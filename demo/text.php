<?php
echo md5("password");
echo "<br>";
echo sha1("password");
echo "<br>";
//echo crypt("password");
$hash = password_hash("password", PASSWORD_BCRYPT);
echo $hash;
echo "<br>";
$pass = "password";
if(password_verify($pass, $hash))
    echo "OK";