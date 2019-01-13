<?
error_reporting(E_ALL & ~E_NOTICE);

if(!is_file('path.log')){
    echo "File missing";
    return;
}

$f = fopen(PATH_LOG, "r");
//$lines=[];
$lines;

while ($line = fgetss($f, 4096, "<p><br>")){
    $lines[] = $line;
}
fclose($f);
$i = 1;
foreach($lines as $line){
    $arrLine = explode("|", $line);
    $visit = date('d-m-Y H:i:s', $arrLine[0]);
    echo $i++.". Время [$visit";
    echo "] >> Страница [".$arrLine[1];
    echo "] >> Ссылка [".$arrLine[2];
    echo "]<br>";
}
