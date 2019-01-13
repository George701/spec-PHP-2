<HTML>
<HEAD>
<TITLE>fopen</TITLE>
</HEAD>
<BODY>
<?
//	$f = fopen("data.html", "r") or die ("Не могу открыть файл");
//	$f = fopen("data.txt", "r") or die ("Не могу открыть файл");
	$f = fopen("data.txt", "a+") or die ("Не могу открыть файл");
//	$file fread($f, filesize("data.txt"));
//  the same as
//  $file = file_get_contents("file.txt");
//  $file = file_put_contents("file.txt", "New file");  //Rewrite all file
//  $file = file_put_contents("file.txt", "New file", FILE_APPEND);  //write from end file
//	$a = fopen("data.txt", "r") || die ("Не могу открыть файл"); // bool type

//	echo var_dump($f);
//	$f1 = fread($f, 5); //Line
//	echo fread($f, 5); //Line
//	echo fread($f, 4); //one
//	echo $f1;
//	echo var_dump($f1);
//    fpassthru($f); // all file

$lines = [];

// for txt in array by line
//while ($line = fgets($f)){
//    $lines[] = $line;
//}
//print_r($lines);


//is the same as
//$lines = file("file.txt);
//	fclose($f);

// for html in array by line
//while ($line = fgetss($f, 1024, "<a>")){
//    $lines[] = $line;
//}
//print_r($lines);

// by bytes
//$bytes = [];
//while (!feof($f)){
//    $bytes[] = fgetc($f);
//}
//print_r($bytes);

// Add new line
//fputs($f, "\nLine six");

//put cursor in end
//fseek($f, -10, SEEK_END);

fclose($f);
//readfile("data.txt");
?>
</BODY>
</HTML>