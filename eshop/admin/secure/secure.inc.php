<?

define("FILE_NAME", ".htpasswd");
// Создайте и опишите функцию getHash, генерирующую хеш пароля:
function getHash($string, $salt, $iterationCount){
    for ($i = 0; $i < $iterationCount; $i++)
        $string = sha1($string . $salt);
    return $string;
}
// Создайте и опишите функцию saveHash, создающую новую запись в файле пользователей:
function saveHash($user, $hash, $salt, $iteration){
    $str = "$user:$hash:$salt:$iteration\n";
    if(file_put_contents(FILE_NAME, $str, FILE_APPEND))
        return true;
    else
        return false;
}
// Создайте и опишите функцию userExists, проверяющую наличие пользователя в списке:
function userExists($login){
    if(!is_file(FILE_NAME))
        return false;
    $users = file(FILE_NAME);
    foreach($users as $user){
        if(strpos($user, $login) !== false)
            return $user;
    }
    return false;
}
// Создайте и опишите функцию logOut(), завершающую сеанс пользователя:
function logOut(){
    session_destroy();
    header('Location: secure/login.php');
    exit;
}