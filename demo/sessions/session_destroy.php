<? session_start() ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Сессия закрыта</title>
</head>
<body>
<h1>Сессия закрыта</h1>
</body>
</html>
<? session_destroy();
    setcookie(session_name(), session_id(), time());
?>