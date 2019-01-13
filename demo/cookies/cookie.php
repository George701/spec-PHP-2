<?php
    // Make cookie
//	setcookie("userName", 'John');

//	echo $_COOKIE["userName"];

	// Delete cookie
//	setcookie("userName", 'John', time()-3600);
//	setcookie("userName", 'John', 1);
//	setcookie("userName");
//	setcookie("userName", "");
//	setcookie("userName", false);

$user = [
    'name' => 'John',
    'login' => 'root',
    'password' => '1234'
];

$str = base64_encode(serialize($user));
setcookie("name", $str);
echo $str;
